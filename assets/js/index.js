let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

// Search bar toggle
document.querySelector('#search-icon').onclick = () => {
    document.querySelector('#search-form').classList.toggle('active');
}
// Search bar close
document.querySelector('#search-form-close').onclick = () => {
    document.querySelector('#search-form').classList.remove('active');
}

// Progress section auto increment
var reached = false;
window.addEventListener('scroll', function () {
    var element = document.getElementById('progress');
    var position = element.getBoundingClientRect();

    if (position.top < window.innerHeight && !reached) {
        reached = true;
        var counts = document.querySelectorAll('.count');
        counts.forEach(function (counter) {
            var max = parseInt(counter.getAttribute('max-data'));
            var currentValue = 0;
            var increment = max / 10;
            var interval = 2300 / max;
            var timer = setInterval(function () {
                currentValue += increment;
                if (currentValue >= max) {
                    clearInterval(timer);
                    currentValue = max;
                }
                counter.innerText = Math.round(currentValue);
            }, interval);
        });
    }
});

// Animation for h1 tag
window.addEventListener("scroll", function () {

    var h1 = document.querySelector("h1");
    var popServices = document.getElementById("home");
    var rect = popServices.getBoundingClientRect();
    var position = rect.top;

    if (position <= window.innerHeight && position >= 0) {
        TweenMax.to(h1, 1, { opacity: 1, y: 0, ease: Power2.easeOut });
    } else {
        TweenMax.to(h1, 1, { opacity: 0, y: 70, ease: Power2.easeOut });
    }

    var h1 = document.querySelector("h1.heading");
    var popServices = document.getElementById("pop-services");
    var rect = popServices.getBoundingClientRect();
    var position = rect.top;

    if (position <= window.innerHeight && position >= 0) {
        TweenMax.to(h1, 1, { opacity: 1, y: 0, ease: Power2.easeOut });
    } else {
        TweenMax.to(h1, 1, { opacity: 0, y: 70, ease: Power2.easeOut });
    }
});