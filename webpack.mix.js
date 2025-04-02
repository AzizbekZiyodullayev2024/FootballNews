const mix = require('laravel-mix');

// Tailwind CSS va PostCSS konfiguratsiyasi
mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
]);

// JavaScriptni kompilyatsiya qilish (agar kerak bo'lsa)
mix.js('resources/js/app.js', 'public/js')
    .vue() // Agar Vue.js ishlatsangiz
    .sourceMaps(); // Source map'ni yoqish