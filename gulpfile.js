const elixir = require('laravel-elixir');
const anime = require('animejs');

require('laravel-elixir-vue-2');



/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */



elixir(function (mix) {
    
    mix.webpack('resources/assets/js/app.js', 'public/js')
    // .css(videojs, 'public/css')
    .stylus('resources/assets/styl/app.styl', 'public/css')
    .browserSync({ proxy: 'natetheaverage.app' });

});
