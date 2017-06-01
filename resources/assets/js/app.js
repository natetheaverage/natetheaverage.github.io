/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueResource from 'vue-resource'
import Vue from 'vue'
// import Axios from 'axios'
Vue.use(VueResource)


// Vue.prototype.$http = Axios;

// let etsy = Axios.create({
//     baseURL: 'https://openapi.etsy.com/v2',
//     headers: {
//         'Access-Control-Allow-Origin': '*',
//         'Content-Type': 'application/json;',
//         'Cross-Origin': 'true'
//     }
// });
// ETSY_KEY=ljv61i2bg4wa3s9ho3egqgz7
// ETSY_SECRET=fx45swa3gk
// ETSY_REDIRECT_URI=http://natetheaverage.app/etsyLogin



// enable @keyup.s
// Vue.directive('on').keyCodes.s = 83


// REQUESTS HEADER
Vue.http.headers.common['Access-Control-Allow-Origin'] = 'http://natetheaverage.com';
// document.querySelector('#token').getAttribute('value');






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

Vue.component('example', require('./components/Example.vue'));

const etsyUrl = "https://openapi.etsy.com/v2";
const etsyShopId = '6577223';
const etsyUserId = '9311200';

const app = new Vue({
    el: '#app-container',
    data() {
        return {
            etsyData: {},
            // etsyResource: this.$resource('https://openapi.etsy.com/v2/:path'),
            // etsyShopResource: this.$resource(etsyUrl + '/shops/:etsyShop' + 'js?callback=getData&api_key=ljv61i2bg4wa3s9ho3egqgz7'),
            // etsyListingsResource: this.$resource(etsyUrl + '/shops/:etsyShop/listings/activejs?callback=getData&api_key=ljv61i2bg4wa3s9ho3egqgz7'),
        }

    },
    mounted() {
        // Call api for collection of each model
        //console.log(`vue mounted on ${ this }`);



        this.$http.get('https://openapi.etsy.com/v2/users/sparkleprincess.js?callback=getData&api_key=ljv61i2bg4wa3s9ho3egqgz7').then(function getData(data) {
            console.log(data.body);
        })
    },
});

// etsy.get('/shops/6577223.js?callback=getData&api_key=ljv61i2bg4wa3s9ho3egqgz7')
// .then(function(response) {
//         console.log(response);
//     })
//     .catch(function(error) {
//         console.log(error);
//     });




//logo animation function
const lanime = require("./svgAnime.js")