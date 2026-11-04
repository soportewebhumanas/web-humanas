import './bootstrap';
import Alpine from 'alpinejs';

// CKEditor 27 se carga desde CDN en layouts/app.blade.php (window.ClassicEditor),
// porque varias vistas lo usan en scripts inline que corren antes de los módulos.
window.Alpine = Alpine;
Alpine.start();
