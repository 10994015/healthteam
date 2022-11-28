const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/quest1.js', 'public/js')
    .js('resources/js/quest2.js', 'public/js')
    .js('resources/js/quest3.js', 'public/js')
    .js('resources/js/quest4.js', 'public/js')
    .js('resources/js/script1.js', 'public/js')
    .js('resources/js/script2.js', 'public/js')
    .js('resources/js/script3.js', 'public/js')
    .js('resources/js/script4.js', 'public/js')
    .js('resources/js/input.js', 'public/js')
    .js('resources/js/cms.js', 'public/js')
    .js('resources/js/randomBtn.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]).sass('resources/sass/index.scss', 'public/css')
    .sass('resources/sass/input.scss', 'public/css')
    .sass('resources/sass/style.scss', 'public/css')
    .sass('resources/sass/cms.scss', 'public/css')
    .sass('resources/sass/finish.scss', 'public/css');
