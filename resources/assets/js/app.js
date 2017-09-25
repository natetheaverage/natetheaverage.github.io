/**************************************************************************
 * Vue and Laravel dependencies
 **************************************************************************/
import VueResource from 'vue-resource'
import Vue from 'vue'
Vue.use(VueResource)

// REQUESTS HEADER
// Vue.http.headers.common['Access-Control-Allow-Origin'] = 'http://natetheaverage.com';
// document.querySelector('#token').getAttribute('value');

require('./bootstrap');
window.Vue = Vue;

//Simple Scrollbar downloaded and stored in library here
const ss = require('./libs/simple-scrollbar.min.js')

//video js

const vjsyoutube = require('videojs-youtube')
const vjschromecast = require('videojs-chromecast')
const videojs = require('video.js')  // Must be after plugins

/*******************************************
 * Vue Component registration
 * Trying to keep it simple this time round
 *******************************************/
import MainMenu from './components/Menu.vue'
Vue.component('MainMenu', MainMenu)
import EtsyStore from './components/EtsyStore.vue'
Vue.component('etsyStore', EtsyStore)
import EtsyListing from './components/EtsyListing.vue'
Vue.component('etsyListing', EtsyListing)


/****************************************************************************************
 * Import Core Vue module extend application instance and attach it to the page.
 * *in case I decide to implement a router later this is scalable*
 ***************************************************************************************/
import CoreVueObject from './CoreVue.js'
const app = Vue.extend(CoreVueObject);
const App = new app({ el: '#app-container' })

//logo animation function
const logoAnimate = require("./svgAnime.js")