/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueResource from 'vue-resource'
import Vue from 'vue'
Vue.use(VueResource)

// enable @keyup.s
// Vue.directive('on').keyCodes.s = 83


// REQUESTS HEADER
//Vue.http.headers.common['Access-Control-Allow-Origin'] = 'http://natetheaverage.com';
// document.querySelector('#token').getAttribute('value');

// https://openapi.etsy.com/v2/users/9311200/shops?api_key=ljv61i2bg4wa3s9ho3egqgz7

// Vue.http.get('/etsyLogin').then(data => {
//         console.log(`app.js@ready - UserInfo`);
//     },
//     (response, status) => {
//         //     console.log(`Err app.js@ready with - %s `, status)
//     })





require('./bootstrap');
//window.Vue = Vue;

//Simple Scrollbar downloaded and stored in library here
const ss = require('./libs/simple-scrollbar.min.js')


const videojs = require('video.js')
const vjsyoutube = require('videojs-youtube')



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
/
// listings / active.js ? callback = getData & api_key = ljv61i2bg4wa3s9ho3egqgz7

Vue.component('example', require('./components/Example.vue'));

const etsyUrl = "https://openapi.etsy.com/v2";
const etsyShopId = '6577223';
const etsyUserId = '9311200';
const app = Vue.extend({
    // el: '#app-container',
    data() {
        return {
            etsyUserResource: this.$resource('https://openapi.etsy.com/v2/shops/6577223.js?callback=getData&api_key=ljv61i2bg4wa3s9ho3egqgz7'),
            // etsyShopResource: this.$resource(etsyUrl + '/shops/:etsyShop' + 'js?callback=getData&api_key=ljv61i2bg4wa3s9ho3egqgz7'),
            // etsyListingsResource: this.$resource(etsyUrl + '/shops/:etsyShop/listings/activejs?callback=getData&api_key=ljv61i2bg4wa3s9ho3egqgz7'),
        }

    },
    mounted() {
        // Call api for collection of each model
        console.log(`app.js@ready`);
        this.etsyUserResource.get(data => {
                console.log(`app.js@ready - UserInfo`);
            },
            (response, status) => {
                //     console.log(`Err app.js@ready with - %s `, status)
            })
    },
});
app.use(VueResource);
Vue.http.get("/etsyLogin",
    (data) => console.log(data),
    (errData) => console.log(errData)
)
console.log(Vue.http.get);

let APP = new app({
    el: '#app-container',
});

//logo animation function
const lanime = require("./svgAnime.js")