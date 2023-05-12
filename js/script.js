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

let profile = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () => {
  profile.classList.toggle('active')
  searcForm.classList.remove('active')
}

let searcForm = document.querySelector('.header .flex .search-form');

document.querySelector('#search-btn').onclick = () => {
  searcForm.classList.toggle('active')
  profile.classList.remove('active')
}

let sideBar = document.querySelector('.side-bar');
let body = document.body

document.querySelector('#menu-btn').onclick = () => {
  body.classList.toggle('active');
  sideBar.classList.toggle('active');
}

document.querySelector('.side-bar .close-side-bar').onclick = () => {
  sideBar.classList.remove('active');
  body.classList.remove('active');
}

window.onscroll = () => {
  profile.classList.remove('active')
  searcForm.classList.remove('active')

  if (window.innerWidth < 1200) {
    sideBar.classList.remove('active');
    body.classList.remove('active');
  }
}

let toggleBtn = document.querySelector('#toggle-btn');
let darkMode = localStorage.getItem('dark-mode');

const enableDarkMode = () => {
  toggleBtn.classList.replace('fa-sun', 'fa-moon');
  body.classList.add('dark');
  localStorage.setItem('dark-mode', 'enabled');

  if (body.classList.contains('dark')) {
    toggleBtn.style.color = 'var(--black)';
  } else {
    toggleBtn.style.color = '#e99e75';
  }

  toggleBtn.addEventListener('mouseenter', () => {
    toggleBtn.style.color = 'var(--white)';
  });

  toggleBtn.addEventListener('mouseleave', () => {
    if (body.classList.contains('dark')) {
      toggleBtn.style.color = 'var(--black)';
    } else {
      toggleBtn.style.color = '#e99e75';
    }
  });
};


const disableDarkMode = () => {
  toggleBtn.classList.replace('fa-moon', 'fa-sun');
  toggleBtn.style.color = '#e99e75';
  body.classList.remove('dark');
  localStorage.setItem('dark-mode', 'disabled');
}

if (darkMode === 'enabled') {
  enableDarkMode();
}

toggleBtn.onclick = (e) => {
  let darkMode = localStorage.getItem('dark-mode');
  if (darkMode === 'disabled') {
    enableDarkMode();
  } else {
    disableDarkMode();
  }
}