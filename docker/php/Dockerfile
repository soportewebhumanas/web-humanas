FROM php:8.3-fpm

ARG UID=1000
ARG GID=1000

RUN apt-get update && apt-get install -y --no-install-recommends \
        git unzip curl libzip-dev libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
        libicu-dev libonig-dev libxml2-dev default-mysql-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" pdo_mysql mysqli zip gd intl bcmath mbstring exif opcache pcntl \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN { echo "upload_max_filesize=50M"; echo "post_max_size=55M"; echo "memory_limit=512M"; } > /usr/local/etc/php/conf.d/app.ini

# Mismo UID/GID que tu usuario de WSL para que los archivos no queden como root.
# Si el UID/GID ya existe en la imagen se reutiliza; nunca se usa root (0).
RUN set -eux; \
    [ "${UID}" -ne 0 ] && [ "${GID}" -ne 0 ]; \
    getent group "${GID}" >/dev/null || groupadd -g "${GID}" dev; \
    id -u "${UID}" >/dev/null 2>&1 || useradd -u "${UID}" -g "${GID}" -m -s /bin/bash dev; \
    U="$(id -nu "${UID}")"; G="$(getent group "${GID}" | cut -d: -f1)"; \
    mkdir -p "$(getent passwd "${UID}" | cut -d: -f6)"; \
    sed -i "s/^user = .*/user = ${U}/; s/^group = .*/group = ${G}/" /usr/local/etc/php-fpm.d/www.conf

USER ${UID}:${GID}
WORKDIR /var/www/html
