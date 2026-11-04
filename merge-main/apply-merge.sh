#!/usr/bin/env bash
# Aplica el merge de humanasAdmin-main sobre ./overlay y ./src (si existe).
# Ejecutar desde la carpeta humanas-l13:   ./merge-main/apply-merge.sh
set -euo pipefail
HERE="$(cd "$(dirname "$0")" && pwd)"
ROOT="$(cd "$HERE/.." && pwd)"
cd "$ROOT"

for T in overlay src; do
  [[ -d "$T" ]] || continue
  echo "==> Copiando archivos a ./$T"
  cp -a "$HERE/files/." "$T/"
  L="$T/resources/views/layouts/app.blade.php"
  if [[ -f "$L" ]]; then
    sed -i "s#asset('favicon.ico')#asset('slim/images/humanas.png')#" "$L"
  fi
  # Nombres con ñ/tildes mal decodificados por el zip (a#U00f1o -> año)
  if [[ -d "$T/public/slim" ]]; then
    python3 - "$T/public/slim" <<'PY'
import os,re,sys,unicodedata
dec=lambda x: unicodedata.normalize('NFC',re.sub(r'#U([0-9a-fA-F]{4})',lambda m:chr(int(m.group(1),16)),x))
for d,dirs,fs in os.walk(sys.argv[1],topdown=False):
    for n in fs+dirs:
        if '#U' in n:
            os.rename(os.path.join(d,n),os.path.join(d,dec(n))); print('  renombrado:',dec(n))
PY
  fi
done

echo "==> Actualizando nginx"
cp "$HERE/docker/nginx/default.conf" docker/nginx/default.conf

if [[ -n "${SUDO_UID:-}" ]]; then chown -R "$SUDO_UID:$SUDO_GID" overlay src docker 2>/dev/null || true; fi

if [[ -d src ]]; then
  export HOST_UID="${SUDO_UID:-$(id -u)}" HOST_GID="${SUDO_GID:-$(id -g)}"
  echo "==> Limpiando cachés y reiniciando web"
  docker compose run --rm --no-deps -T app php artisan optimize:clear || true
  docker compose restart web || true
fi
echo "Listo."
