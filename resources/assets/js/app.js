
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

// Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app-container'
});

const colors = ['#16F0F0', '#00FF00', '#FFFF00', '#FF14AB', '#16F0F0']
let pathEls = document.querySelectorAll('path');
let colorNumber = anime.random(0, 3);
  for (var i = 0; i < pathEls.length; i++) {
      let pathEl = pathEls[i];
      let offset = anime.setDashoffset(pathEl);
      
      // pathEl.setAttribute('fill', colors[anime.random(0, 4)]);
      pathEl.setAttribute('stroke-dashoffset', offset);
      const timeline = anime.timeline({
        
      });
      timeline.add({
        targets: pathEl,
        // delay: 4000,
        duration: 10,//anime.random(1000, 5000),
        update: pathEl.setAttribute('fill', '#000'),
        // opacity: 0,
        //loop: true,
        direction: 'alternate',
        easing: 'easeInOutExpo'
      })
      .add({
        targets: pathEl,
        update: pathEl.setAttribute('stroke', colors[colorNumber]),
        strokeDashoffset: [offset, 0],
        duration: 3000,//anime.random(1000, 5000),
        delay: 1000,//anime.random(0, 2000),
        easing: 'easeInOutSine',
        loop: true,
        direction: 'alternate',
      })
      .add({
        targets: pathEl,
        delay: 4000,
        duration: 2000,//anime.random(1000, 5000),
        backgroundColor:  colors[colorNumber+1],
        // opacity: 0,
        // loop: true,
        direction: 'alternate',
        easing: 'easeInOutExpo'
      });
  }



