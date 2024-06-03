const profileNav = document.getElementById('profile-nav');
const profileOpenButton = document.getElementById('profile-open-btn')

profileOpenButton.addEventListener('click', (e) => {

  profileNav.classList.toggle('open-side');

});

const filterBtn = document.getElementById('filter-btn');
const filterNav = document.getElementById('filter-nav');
// const input = document.querySelector('.input');

filterBtn.addEventListener('click', (e) => {

  // input.classList.toggle('border-adjusted')
  filterNav.classList.toggle('open-top');


});