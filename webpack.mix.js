const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/text-animation.js', 'public/js')
    .sass('resources/sass/app-bootstrap.scss', 'public/css')
    .sass('resources/sass/app-main.scss', 'public/css')
    .css('resources/css/app.css', 'public/css')
    .sourceMaps();
