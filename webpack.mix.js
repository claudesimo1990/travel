const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('assets/js/controllers/appController.js', 'public/js')
    .js('assets/alpineJs/controllers/alpineController.js', 'public/js')
    .postCss('assets/css/controllers/appController.css', 'public/css', [
        require("tailwindcss"),
    ])
    .options({
        postCss: [tailwindcss('tailwind.config.js')],
    });
mix.copy('assets/img', 'public/images')
mix.copy('assets/img/colissend/favicon', 'public/images')
