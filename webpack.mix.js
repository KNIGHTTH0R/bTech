let mix = require('laravel-mix');

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

mix
    // SASS
    .sass('resources/assets/sass/main.sass', 'public/css')

    // SASS->Pages
    .sass('resources/assets/sass/pages/home.sass', 'public/css/pages')
    .sass('resources/assets/sass/pages/auth.sass', 'public/css/pages')
    .sass('resources/assets/sass/pages/profile.sass', 'public/css/pages')

    // JavaScript
    .js('resources/assets/js/base.js', 'public/js')

    .copyDirectory('resources/assets/img', 'public/img');

