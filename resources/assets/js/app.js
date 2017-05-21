/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

import anime from 'animejs'


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// import AnimateLogo from './svgAnime.js'
// const animateLogo = new AnimateLogo()
// const activateLogo = animateLogo
// Vue.component('animateLogo', animateLogo)
// const $AL = require('./svgAnime.js')

Vue.component('example', require('./components/Example.vue'));

import MainMenu from './components/Menu.vue'
Vue.component('MainMenu', MainMenu)


const app = new Vue({
    el: '#app-container'
});

const lanime = require("./svgAnime.js")