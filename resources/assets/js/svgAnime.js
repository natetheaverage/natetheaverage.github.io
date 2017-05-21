const anime = require('animejs')


const colors = ['#16F0F0', '#00FF00', '#FFFF00', '#FF14AB', '#16F0F0']
let pathEls = document.querySelectorAll('path');
let colorNumber = anime.random(0, 3);
module.exports = (function() {
    for (var i = 0; i < pathEls.length; i++) {
        let pathEl = pathEls[i];
        let offset = anime.setDashoffset(pathEl);

        // pathEl.setAttribute('fill', colors[anime.random(0, 4)]);
        pathEl.setAttribute('stroke-dashoffset', offset);
        const timeline = anime.timeline();
        timeline.add({
                targets: pathEl,
                // delay: 4000,
                duration: 1000, //anime.random(1000, 5000),
                update: pathEl.setAttribute('fill', '#000'),
                opacity: 1,
                //loop: true,
                direction: 'alternate',
                easing: 'easeInOutExpo'
            })
            .add({
                targets: pathEl,
                update: pathEl.setAttribute('stroke', colors[colorNumber]),
                strokeDashoffset: [offset, 0],
                duration: 3000, //anime.random(1000, 5000),
                delay: 1000, //anime.random(0, 2000),
                easing: 'easeInOutSine',
                loop: true,
                direction: 'alternate',
            })
            .add({
                targets: pathEl,
                delay: 4000,
                duration: 2000, //anime.random(1000, 5000),
                backgroundColor: colors[colorNumber + 1],
                // opacity: 0,
                // loop: true,
                direction: 'alternate',
                easing: 'easeInOutExpo'
            });
        //console.log(pathsEls)
    }

})();