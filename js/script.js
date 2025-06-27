//toggle class active
const navMenu = document.querySelector('.nav-menu');
document.querySelector('#hamburger-menu').onclick = () => {
    navMenu.classList.toggle('active');
};

//klik luar sidebar untuk menghilangkan nav
const hamburger = document.querySelector('#hamburger-menu');

document.addEventListener('click', function (e) {
    if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.classList.remove('active');
    }
}) 

