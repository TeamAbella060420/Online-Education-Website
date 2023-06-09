<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Playlist</title>

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

    <!-- playlist section starts -->

    <section class="playlist">
      <h1 class="heading">Playlist Details</h1>

      <div class="row">
        <div class="col">
          <form action="" method="post" class="save-list">
            <button type="submit" name="save_list">
              <i class="far fa-bookmark"></i><span>Save Playlist</span>
            </button>
          </form>
          <div class="thumb">
            <span>6 videos</span>
            <img src="images/thumb-1.png" alt="" class="thumb" />
          </div>
        </div>

        <div class="col">
          <div class="tutor">
            <img src="images/pic-2.jpg" alt="" />
            <div>
              <h3>John Deo</h3>
              <span>Developer</span>
            </div>
          </div>

          <div class="details">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam eum
              minima veritatis, quis provident ducimus.
            </p>
            <h3>Complete php tutorial</h3>
            <div class="date">
              <i class="fas fa-calendar"></i><span>15-04-2023</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- playlist section ends -->

    <!-- video container section starts -->

    <section class="videos-container">
      <h1 class="heading">Playlist Videos</h1>
      <div class="box-container">
        <a href="watch-video.php" class="box">
          <i class="fas fa-play"></i>
          <img src="images/post-1-1.png" alt="" />
          <h3>Complete PHP tutor (part 01)</h3>
        </a>
        <a href="watch-video.php" class="box">
          <i class="fas fa-play"></i>
          <img src="images/post-1-2.png" alt="" />
          <h3>Complete PHP tutor (part 02)</h3>
        </a>
        <a href="watch-video.php" class="box">
          <i class="fas fa-play"></i>
          <img src="images/post-1-3.png" alt="" />
          <h3>Complete PHP tutor (part 03)</h3>
        </a>
        <a href="watch-video.php" class="box">
          <i class="fas fa-play"></i>
          <img src="images/post-1-4.png" alt="" />
          <h3>Complete PHP tutor (part 04)</h3>
        </a>
        <a href="watch-video.php" class="box">
          <i class="fas fa-play"></i>
          <img src="images/post-1-5.png" alt="" />
          <h3>Complete PHP tutor (part 05)</h3>
        </a>
        <a href="watch-video.php" class="box">
          <i class="fas fa-play"></i>
          <img src="images/post-1-6.png" alt="" />
          <h3>Complete PHP tutor (part 06)</h3>
        </a>
      </div>
    </section>

    <!-- video container section ends -->

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
