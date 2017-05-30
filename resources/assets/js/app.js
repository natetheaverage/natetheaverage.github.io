/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
window.Vue = require('vue');

//Simple Scrollbar downloaded and stored in library here
const ss = require('./libs/simple-scrollbar.min.js')


const videojs = require('video.js')
const vjsyoutube = require('videojs-youtube')



//animejs npm module
// import anime from 'animejs'



// Vue Componant registration
// Trying to keep it simple this time round
//

import MainMenu from './components/Menu.vue'
Vue.component('MainMenu', MainMenu)
import VideoPlayer from './components/VideoPlayer.vue'
Vue.component('videoPlayer', VideoPlayer)


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app-container'
});

//logo animation function
const lanime = require("./svgAnime.js")