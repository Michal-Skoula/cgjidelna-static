const sidenav = document.getElementById('side-nav');
const navOpenButton = document.getElementById('nav-open-btn');

navOpenButton.addEventListener('click', (e) => {

  sidenav.classList.toggle('open');

});