// svgAnime.js
import anime from 'animejs'
export default function animateLogo(){  
  let pathEls = document.querySelectorAll('path');
  for (var i = 0; i < pathEls.length; i++) {
      let pathEl = pathEls[i];
      let offset = anime.setDashoffset(pathEl);
      pathEl.setAttribute('stroke-dashoffset', offset);
      anime({
        targets: pathEl,
        strokeDashoffset: [offset, 0],
        duration: anime.random(3000, 5000),
        delay: anime.random(0, 2000),
        loop: true,
        direction: 'alternate',
        easing: 'easeInOutSine',
        autoplay: true
      });
  }
  console.log(pathEls)
};

//return console.log('svgAnime.js js fireing!');
