<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
   <section class="flex">

      <a href="home.php" class="logo">Education</a>

      <form action="search.php" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="Search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">Shaikh Anas</h3>
         <p class="role">Student</p>
         <a href="profile.php" class="btn">View Profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">Login</a>
            <a href="register.php" class="option-btn">Register</a>
         </div>
      </div>

   </section>
</header>   

<div class="side-bar">
   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">Eranda</h3>
      <p class="role">Student</p>
      <a href="profile.php" class="btn">View Profile</a>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>About</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="calender.php"><i class="fas fa-chalkboard-user"></i><span>calender</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
      
   </nav>
</div>

<section class="courses">
   <h1 class="heading">Our Courses</h1>
   <div class="box-container">
      <?php
         $courses = [
            ["image" => "images/pic-2.jpg", "name" => "Eranda", "role" => "Student", "thumb" => "images/thumb-1.png", "title" => "Complete HTML Tutorial", "videos" => "10"],
            ["image" => "images/pic-3.jpg", "name" => "John Deo", "date" => "21-10-2022", "thumb" => "images/thumb-2.png", "title" => "Complete CSS Tutorial", "videos" => "10"],
            ["image" => "images/pic-4.jpg", "name" => "John Deo", "date" => "21-10-2022", "thumb" => "images/thumb-3.png", "title" => "Complete JS Tutorial", "videos" => "10"],
            ["image" => "images/pic-5.jpg", "name" => "John Deo", "date" => "21-10-2022", "thumb" => "images/thumb-4.png", "title" => "Complete Bootstrap Tutorial", "videos" => "10"],
            ["image" => "images/pic-6.jpg", "name" => "John Deo", "date" => "21-10-2022", "thumb" => "images/thumb-5.png", "title" => "Complete jQuery Tutorial", "videos" => "10"],
            ["image" => "images/pic-7.jpg", "name" => "John Deo", "date" => "21-10-2022", "thumb" => "images/thumb-6.png", "title" => "Complete SASS Tutorial", "videos" => "10"],
            ["image" => "images/pic-8.jpg", "name" => "John Deo", "date" => "21-10-2022", "thumb" => "images/thumb-7.png", "title" => "Complete PHP Tutorial", "videos" => "10"],
            ["image" => "images/pic-9.jpg", "name" => "John Deo", "date" => "21-10-2022", "thumb" => "images/thumb-8.png", "title" => "Complete MySQL Tutorial", "videos" => "10"],
            ["image" => "images/pic-1.jpg", "name" => "John Deo", "date" => "21-10-2022", "thumb" => "images/thumb-9.png", "title" => "Complete React Tutorial", "videos" => "10"]
         ];

         foreach ($courses as $course) {
            echo '<div class="box">
                     <div class="tutor">
                        <img src="' . $course["image"] . '" alt="">
                        <div class="info">
                           <h3>' . $course["name"] . '</h3>
                           <span>' . ($course["role"] ?? $course["date"]) . '</span>
                        </div>
                     </div>
                     <div class="thumb">
                        <img src="' . $course["thumb"] . '" alt="">
                        <span>' . $course["videos"] . ' videos</span>
                     </div>
                     <h3 class="title">' . $course["title"] . '</h3>
                     <a href="playlist.php" class="inline-btn">View Playlist</a>
                  </div>';
         }
      ?>
   </div>
</section>

<footer class="footer">
   <!-- Footer content -->
</footer>

<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>
