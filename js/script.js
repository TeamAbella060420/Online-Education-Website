function toggleTheme() {
    var sunIcon = document.querySelector("#theme-toggle .fa-sun");
    var moonIcon = document.querySelector("#theme-toggle .fa-moon");
    
    if (sunIcon.style.display === "none") {
      sunIcon.style.display = "block";
      moonIcon.style.display = "none";
    } else {
      sunIcon.style.display = "none";
      moonIcon.style.display = "block";
    }
  }
  
  var themeToggle = document.querySelector("#theme-toggle");
  themeToggle.addEventListener("click", toggleTheme);
  