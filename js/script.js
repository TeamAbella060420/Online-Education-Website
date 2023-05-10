// Toggle between light and dark themes when theme toggle is clicked

// function toggleTheme() {
//     const sunIcon = document.querySelector("#theme-toggle .fa-sun");
//     const moonIcon = document.querySelector("#theme-toggle .fa-moon");

//     if (sunIcon.style.display === "none") {
//         sunIcon.style.display = "block";
//         moonIcon.style.display = "none";
//     } else {
//         sunIcon.style.display = "none";
//         moonIcon.style.display = "block";
//     }
// }

// const themeToggle = document.querySelector("#theme-toggle");
// themeToggle.addEventListener("click", toggleTheme);

// Toggle visibility of profile when user icon is clicked

// const profileToggle = document.querySelector(".header .fas.fa-user");
// const profile = document.querySelector(".profile");

// profileToggle.addEventListener("click", function() {
//   if (profile.style.display === "none") {
//     profile.style.display = "block";
//   } else {
//     profile.style.display = "none";
//   }
// });

let profile  = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () => {
  profile.classList.toggle('active')
  searcForm.classList.remove('active')
}

let searcForm  = document.querySelector('.header .flex .search-form');

document.querySelector('#search-btn').onclick = () => {
  searcForm.classList.toggle('active')
  profile.classList.remove('active')
}

let sideBar  = document.querySelector('.side-bar');

document.querySelector('#menu-btn').onclick = () => {
  sideBar.classList.toggle('active')
}

window.onscroll = () => {
  profile.classList.remove('active')
  searcForm.classList.remove('active')
}
