const { mix } = require('laravel-mix');
require('laravel-mix-stylus');
const anime = require('animejs');
// const videoj = require('!style-loader!css-loader!video.js/dist/video-js.css');
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
// mix.webpackConfig({ target: 'node' })

mix.js('resources/assets/js/app.js', 'public/js');
    // .css(videojs, 'public/css')
    mix.stylus('resources/assets/styl/app.styl', 'public/css');
    mix.browserSync('natetheaverage.app');