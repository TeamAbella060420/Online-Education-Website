<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Courses</title>

    <!-- font awesome cdn link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
  </head>
  <body>
    <!-- header section starts -->
    <header class="header">
      <section class="flex">
        <a href="home.php" class="logo">Educate</a>
        <form action="" method="post" class="search-form">
          <input
            type="text"
            name="search_box"
            placeholder="Search courses..."
            maxlength="100"
            required
          />
          <button
            type="submit"
            class="fas fa-search"
            name="search_box"
          ></button>
        </form>
        <div class="icons">
          <div id="menu-btn" class="fas fa-bars"></div>
          <div id="search-btn" class="fas fa-search"></div>
          <div id="user-btn" class="fas fa-user"></div>
          <!-- <div id="theme-toggle"> -->
          <div id="toggle-btn" style="color: #e99e75" class="fas fa-sun"></div>
          <!-- <span style="display:block; color: rgb(12, 117, 136);" class="fas fa-moon"></span> -->
          <!-- </div> -->
        </div>
        <div class="profile">
          <img src="images/pic-1.jpg" alt="" />
          <h3>Abraham Abella</h3>
          <span>Student</span>
          <a href="profile.php" class="btn">View profile</a>
          <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
          </div>
        </div>
      </section>
    </header>
    <!-- header section ends -->

    <!-- side bar section starts -->

    <div class="side-bar">
      <div class="close-side-bar">
        <i class="fas fa-times"></i>
      </div>

      <div class="profile">
        <img src="images/pic-1.jpg" alt="" />
        <h3>Abraham Abella</h3>
        <span>Student</span>
        <a href="profile.php" class="btn">View profile</a>
      </div>

      <nav class="navbar">
        <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="about.php"
          ><i class="fas fa-question"></i><span>About us</span></a
        >
        <a href="courses.php"
          ><i class="fas fa-graduation-cap"></i><span>Our Courses</span></a
        >
        <a href="teachers.php"
          ><i class="fas fa-chalkboard-user"></i><span>Teachers</span></a
        >
        <a href="contact.php"
          ><i class="fas fa-headset"></i><span>Contact US</span></a
        >
      </nav>
    </div>

    <!-- side bar section ends -->

    <!-- courses section starts -->

    <section class="courses">
      <h1 class="heading">Our Courses</h1>

      <div class="box-container">
        <div class="box">
          <div class="tutor">
            <img src="images/pic-2.jpg" alt="" />
            <div>
              <h3>John Deo</h3>
              <span>15-04-2023</span>
            </div>
          </div>
          <img src="images/thumb-1.png" class="thumb" alt="" />
          <h3 class="title">Complete HTML Tutorial</h3>
          <a href="playlist.php" class="inline-btn">View Playlist</a>
        </div>

        <div class="box">
          <div class="tutor">
            <img src="images/pic-3.jpg" alt="" />
            <div>
              <h3>John Deo</h3>
              <span>15-04-2023</span>
            </div>
          </div>
          <img src="images/thumb-2.png" class="thumb" alt="" />
          <h3 class="title">Complete CSS Tutorial</h3>
          <a href="playlist.php" class="inline-btn">View Playlist</a>
        </div>

        <div class="box">
          <div class="tutor">
            <img src="images/pic-4.jpg" alt="" />
            <div>
              <h3>John Deo</h3>
              <span>15-04-2023</span>
            </div>
          </div>
          <img src="images/thumb-3.png" class="thumb" alt="" />
          <h3 class="title">Complete JS Tutorial</h3>
          <a href="playlist.php" class="inline-btn">View Playlist</a>
        </div>

        <div class="box">
          <div class="tutor">
            <img src="images/pic-5.jpg" alt="" />
            <div>
              <h3>John Deo</h3>
              <span>15-04-2023</span>
            </div>
          </div>
          <img src="images/thumb-4.png" class="thumb" alt="" />
          <h3 class="title">Complete JS Tutorial</h3>
          <a href="playlist.php" class="inline-btn">View Playlist</a>
        </div>

        <div class="box">
          <div class="tutor">
            <img src="images/pic-6.jpg" alt="" />
            <div>
              <h3>John Deo</h3>
              <span>15-04-2023</span>
            </div>
          </div>
          <img src="images/thumb-5.png" class="thumb" alt="" />
          <h3 class="title">Complete JQuery Tutorial</h3>
          <a href="playlist.php" class="inline-btn">View Playlist</a>
        </div>

        <div class="box">
          <div class="tutor">
            <img src="images/pic-7.jpg" alt="" />
            <div>
              <h3>John Deo</h3>
              <span>15-04-2023</span>
            </div>
          </div>
          <img src="images/thumb-6.png" class="thumb" alt="" />
          <h3 class="title">Complete SASS Tutorial</h3>
          <a href="playlist.php" class="inline-btn">View Playlist</a>
        </div>

        <div class="box">
          <div class="tutor">
            <img src="images/pic-8.jpg" alt="" />
            <div>
              <h3>John Deo</h3>
              <span>15-04-2023</span>
            </div>
          </div>
          <img src="images/thumb-7.png" class="thumb" alt="" />
          <h3 class="title">Complete PHP Tutorial</h3>
          <a href="playlist.php" class="inline-btn">View Playlist</a>
        </div>

        <div class="box">
          <div class="tutor">
            <img src="images/pic-9.jpg" alt="" />
            <div>
              <h3>John Deo</h3>
              <span>15-04-2023</span>
            </div>
          </div>
          <img src="images/thumb-8.png" class="thumb" alt="" />
          <h3 class="title">Complete MySQL Tutorial</h3>
          <a href="playlist.php" class="inline-btn">View Playlist</a>
        </div>

        <div class="box">
          <div class="tutor">
            <img src="images/pic-1.jpg" alt="" />
            <div>
              <h3>John Deo</h3>
              <span>15-04-2023</span>
            </div>
          </div>
          <img src="images/thumb-9.png" class="thumb" alt="" />
          <h3 class="title">Complete React Tutorial</h3>
          <a href="playlist.php" class="inline-btn">View Playlist</a>
        </div>
      </div>
    </section>

    <!-- courses section ends -->

    <!-- footer section starts -->

    <footer class="footer">
      &copy; <span id="year"></span> by <span>Engr. Jezreel Abella</span> | All
      rights reserved!
    </footer>

    <!-- footer section ends -->

    <!-- custom js file link -->
    <script src="js/script.js"></script>
  </body>
</html>
