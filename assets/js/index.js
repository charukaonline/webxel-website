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