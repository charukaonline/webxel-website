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

// Service form toggle
document.querySelector('#service').onclick = () => {
    document.querySelector('#service-form').classList.toggle('active');
}
// Service form close
document.querySelector('#service-form-close').onclick = () => {
    document.querySelector('#service-form').classList.remove('active');
}