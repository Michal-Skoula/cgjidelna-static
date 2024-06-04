const profileNav = document.getElementById('profile-nav');
const profileOpenButton = document.getElementById('profile-open-btn')

profileOpenButton.addEventListener('click', (e) => {

  profileNav.classList.toggle('open-side');

});

const filterBtn = document.getElementById('filter-btn');
const filterNav = document.getElementById('filter-nav');

filterBtn.addEventListener('click', (e) => {

  filterNav.classList.toggle('open-top');

});

const addNewBtn = document.getElementById('add-new-btn');
addNewBtn.addEventListener('click', (e) => {

  location.href = 'new-food-form.html'; // will be changed

});






// Code for closing menus when clicking off, havent finished it yet

// const targetElement = document.getElementById('targetElement');
// const excludedElements = [
//       document.getElementById('excludedElement'),
//       document.getElementById('excludedButton')
//   ];

//   document.addEventListener('click', (event) => {
//       // Check if the clicked element is one of the excluded elements
//       const isClickInsideExcluded = excludedElements.some(element => element.contains(event.target));

//       // Check if the click is inside the target element
//       const isClickInsideTarget = targetElement.contains(event.target);

//       // Toggle the class if the click is outside the excluded and target elements
//       if (!isClickInsideExcluded && !isClickInsideTarget) {
//           targetElement.classList.toggle('highlight');
//       }
//   });