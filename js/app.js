const sidenav = document.getElementById('side-nav');
const navOpenButton = document.getElementById('nav-open-btn');

navOpenButton.addEventListener('click', (e) => {

  sidenav.classList.toggle('open');

});

const profileNav = document.getElementById('profile-nav');
const profileOpenButton = document.getElementById('profile-open-btn')

profileOpenButton.addEventListener('click', (e) => {

  profileNav.classList.toggle('open');

});