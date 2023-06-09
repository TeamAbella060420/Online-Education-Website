<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Watch Video</title>

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

    <!-- watch video section starts -->

    <section class="watch-video">
      <div class="video-details">
        <video
          src="images/vid-1.mp4"
          class="video"
          poster="images/post-1-1.png"
          controls
          autoplay
        ></video>
        <h3 class="title">Complete HTML Tutorial (part 01)</h3>
        <div class="info">
          <p><i class="fas fa-calendar"></i><span>15-04-2023</span></p>
          <p><i class="fas fa-heart"></i><span>45 likes</span></p>
        </div>
        <div class="tutor">
          <img src="images/pic-2.jpg" alt="" />
          <div>
            <h3>John Deo</h3>
            <span>Developer</span>
          </div>
        </div>
        <form action="" method="post" class="flex">
          <a href="playlist.php" class="inline-btn">View Playlist</a>
          <button type="submit">
            <i class="far fa-heart"></i><span>Likes</span>
          </button>
        </form>
        <div class="description">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
            repellendus labore deleniti eaque ducimus, ipsum esse omnis
            architecto excepturi tempora?
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias
            neque, dolores temporibus eveniet asperiores iure inventore harum
            laborum vel a obcaecati molestiae qui praesentium odit quia?
            Suscipit neque quos tenetur?
          </p>
        </div>
      </div>
    </section>

    <!-- watch video section ends -->

    <!-- commenst section starts -->

    <section class="comments">
      <h1 class="heading">Add Comment</h1>
      <form action="" method="post" class="add-comment">
        <textarea
          name="comment_box"
          required
          cols="30"
          rows="10"
          placeholder="Write your comment..."
          maxlength="1000"
        ></textarea>
        <input
          type="submit"
          value="add comment"
          name="add_comment"
          class="inline-btn"
        />
      </form>

      <h1 class="heading">6 comments</h1>

      <div class="show-comments">
        <div class="box">
          <div class="user">
            <img src="images/pic-1.jpg" alt="" />
            <div>
              <h3>Abraham Flynn Abella</h3>
              <span>15-04-2023</span>
            </div>
          </div>
          <p class="text">This is a comment from Abraham Flynn Abella</p>
          <form action="" method="post" class="flex-btn">
            <button type="submit" name="edit_comment" class="inline-option-btn">
              Edit Comment
            </button>
            <button
              type="submit"
              name="delete_comment"
              class="inline-delete-btn"
            >
              Delete Comment
            </button>
          </form>
        </div>
        <div class="box">
          <div class="user">
            <img src="images/pic-2.jpg" alt="" />
            <div>
              <h3>John Doe</h3>
              <span>15-04-2023</span>
            </div>
          </div>
          <p class="text">Wow amazing video! Thanks for the source code</p>
        </div>
        <div class="box">
          <div class="user">
            <img src="images/pic-3.jpg" alt="" />
            <div>
              <h3>John Doe</h3>
              <span>15-04-2023</span>
            </div>
          </div>
          <p class="text">Wow amazing video! Thanks for the source code</p>
        </div>
        <div class="box">
          <div class="user">
            <img src="images/pic-4.jpg" alt="" />
            <div>
              <h3>John Doe</h3>
              <span>15-04-2023</span>
            </div>
          </div>
          <p class="text">Wow amazing video! Thanks for the source code</p>
        </div>
        <div class="box">
          <div class="user">
            <img src="images/pic-5.jpg" alt="" />
            <div>
              <h3>John Doe</h3>
              <span>15-04-2023</span>
            </div>
          </div>
          <p class="text">Wow amazing video! Thanks for the source code</p>
        </div>
        <div class="box">
          <div class="user">
            <img src="images/pic-6.jpg" alt="" />
            <div>
              <h3>Jezreel Abella</h3>
              <span>15-04-2023</span>
            </div>
          </div>
          <p class="text">
            I am forever greatful that God gave me time and talent to build
            website! Praise God!!!
          </p>
        </div>
      </div>
    </section>

    <!-- commenst section ends -->

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
