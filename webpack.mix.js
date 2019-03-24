const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/dist/js')
   .js('resources/js/index.js', 'public/dist/js');
//    .sass('src/app.scss', 'dist')
//    .setPublicPath('dist');