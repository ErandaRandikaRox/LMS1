<?php
// Start the session
session_start();

// Check if the 'user' session variable is set
if (!isset($_SESSION['user'])) {
    // Optionally, redirect to login page if user is not logged in
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Playlist</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
    <section class="flex">
        <a href="home.php" class="logo">Education.</a>

        <div class="icons">
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
        </div>

        <div class="profile">
            <img src="images/pic-1.jpg" class="image" alt="Profile Image">
            <h3 class="name"><?php echo htmlspecialchars($_SESSION['user']); ?></h3>
            <p class="role">Student</p>
            <!-- <a href="profile.php" class="btn">View Profile</a> -->
            <div class="flex-btn">
                <a href="login.php" class="option-btn">Login</a>
                <a href="logout.php" class="option-btn">logout</a>
            </div>
        </div>
    </section>
</header>

<div class="side-bar">
    <div id="close-btn">
        <i class="fas fa-times"></i>
    </div>

    <div class="profile">
        <img src="images/pic-1.jpg" class="image" alt="Profile Image">
        <h3 class="name"><?php echo htmlspecialchars($_SESSION['user']); ?></h3>
        <p class="role">Student</p>
        <!-- <a href="profile.php" class="btn">View Profile</a> -->
    </div>

    <nav class="navbar">
        <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>      
        <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
        <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Calendar</span></a>
        <a href="contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
        <a href="about.php"><i class="fas fa-question"></i><span>About</span></a>
    </nav>
</div>

<section class="playlist-details">
    <h1 class="heading">Playlist Details</h1>
    <div class="row">
        <div class="column">
            <form action="" method="post" class="save-playlist">
                <button type="submit"><i class="far fa-bookmark"></i> <span>Save Playlist</span></button>
            </form>

            <div class="thumb">
                <img src="images/thumb-1.png" alt="Thumbnail">
                <span>10 videos</span>
            </div>
        </div>
        <div class="column">
            <div class="tutor">
                <img src="images/pic-2.jpg" alt="Tutor Image">
                <div>
                    <h3>KKSR</h3>
                    <span>21-10-2024</span>
                </div>
            </div>

            <div class="details">
                <h3>Complete HTML Tutorial</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum minus reiciendis, error sunt veritatis exercitationem deserunt velit doloribus itaque voluptate.</p>
                <!-- <a href="teacher_profile.php" class="inline-btn">View Profile</a> -->
            </div>
        </div>
    </div>
</section>

<section class="playlist-videos">
    <h1 class="heading">Playlist Videos</h1>
    <div class="box-container">
        <?php
        // Example of dynamic video rendering
        $videos = [
            ['title' => 'Complete HTML Tutorial (Part 01)', 'image' => 'images/post-1-1.png', 'link' => 'watch-video.php'],
            ['title' => 'Complete HTML Tutorial (Part 02)', 'image' => 'images/post-1-2.png', 'link' => 'watch-video.php'],
            ['title' => 'Complete HTML Tutorial (Part 03)', 'image' => 'images/post-1-3.png', 'link' => 'watch-video.php'],
            ['title' => 'Complete HTML Tutorial (Part 04)', 'image' => 'images/post-1-4.png', 'link' => 'watch-video.php'],
            ['title' => 'Complete HTML Tutorial (Part 05)', 'image' => 'images/post-1-5.png', 'link' => 'watch-video.php'],
            ['title' => 'Complete HTML Tutorial (Part 06)', 'image' => 'images/post-1-6.png', 'link' => 'watch-video.php'],
        ];

        foreach ($videos as $video) {
            echo '<a class="box" href="' . htmlspecialchars($video['link']) . '">
                      <i class="fas fa-play"></i>
                      <img src="' . htmlspecialchars($video['image']) . '" alt="Video Thumbnail">
                      <h3>' . htmlspecialchars($video['title']) . '</h3>
                  </a>';
        }
        ?>
    </div>
</section>

<footer class="footer">
    <!-- Footer content -->
</footer>

<!-- Custom JS file link -->
<script src="js/script.js"></script>

</body>
</html>
