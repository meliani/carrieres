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

mix.js('resources/assets/js/bootstrap.js', 'public/js/app.js')
.sass('resources/assets/sass/app.scss', 'public/css/app.css');

/* import { js, inProduction, version } from 'laravel-mix';

js('resources/assets/js/bootstrap.js', 'public/js/materialize.js')
    .sass('resources/assets/sass/app.scss', 'public/css/materialize.css', [
      //   require('tailwindcss'),
    ])
   //  .webpackConfig(require('./webpack.config'));

if (inProduction()) {
    version();
}

 */