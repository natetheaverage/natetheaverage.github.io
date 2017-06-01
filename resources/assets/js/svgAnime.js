const anime = require('animejs')


const colors = ['#16F0F0', '#FF14AB', '#00FF00', '#FFFF00', '#16F0F0']
let pathEls = document.querySelectorAll('path');
let colorNumber = anime.random(0, 2);
module.exports = (function() {
    for (var i = 0; i < pathEls.length; i++) {
        let pathEl = pathEls[i];

        const offset = anime.setDashoffset(pathEl);

        pathEl.setAttribute('stroke-dashoffset', offset);

        const logoAJS = anime({

            targets: pathEl,
            update: pathEl.setAttribute('stroke', colors[colorNumber]),
            // pathEl.setAttribute('stroke', colors[anime.random(0, 3)]); 
            strokeDashoffset: [offset, 0],
            duration: 5000,
            delay: 500,
            // loop: true,
            direction: 'alternate',
            easing: 'easeInOutSine',
            autoplay: true,
            complete: function(anim) {
                pathEl.setAttribute('stroke', colors[anime.random(0, 2)]);
                logoPlay();
            }
        });
        const logoPlay = function() {
            logoAJS.restart();
        }
    }

})();