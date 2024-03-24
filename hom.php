<?php
include 'connection.php';
session_start();
// $sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";
// $result = mysqli_query($mysqli, $sql);


// // Fetch all
// mysqli_fetch_all($result, MYSQLI_ASSOC);

// // Free result set
// mysqli_free_result($result);

// mysqli_close($mysqli);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Hind:400,300I Bangers" rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="css.html/unsemantic-grid-responsive-tablet.css"> -->
    <link rel="stylesheet" href="css.html/style.css">
<head>
<body>
<main class="grid-container">
<nav class="home-nav">
        <div><img src="assets/Logo.png" alt="" class='logo'></div>
        <div class="options">
            <a class="navlink" style="color: #f86f14;" href="planner.php">Recipes</a>
            <a class="navlink">Blog</a>
            <a class="navlink">Contact</a>
            <a class="navlink" href=""><?php if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']=='true'){
                echo 'welcome '.$_SESSION['username'];
            } 
            ?> </a>
            <?php if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!='true'){
                // echo 'Sign Up';
              echo  '<a class="navlink" href="signup.php">Sign Up<a>';
            } 
            ?> </a>
            <?php if(!isset($_SESSION['loggedin']) ||$_SESSION['loggedin']!='true'){
                echo '<a class="navlink" href="signin.php">Sign In<a>';
            } 
            ?> </a>
            <?php if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']=='true'){
                echo '<a class="navlink" href="logout.php">Log Out<a>';
            } 
            ?> </a>
            <!-- <a class="navlink" href="signin.php"><?php if(!isset($_SESSION['loggedin']) ||$_SESSION['loggedin']!='true'){
                echo 'Sign In';
            } 
            ?> </a> -->
            <!-- <a class="navlink" href="logout.php"><?php if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']=='true'){
                echo 'Log Out';
            } 
            ?> </a> -->
            <!-- <a class="navlink" href="signup.php">Sign Up</a>
            <a class="navlink" href="signin.php">Sign In</a>
            <a style="display: none;">Log Out</a> -->
        </div>
    </nav>
<header>
    <h1>Welcome to my website !!!</h1>
    <h2>This website is all about me</h2>
</header>
   <section class="grid-container">
       <div class="grid-66"><p>This is my main text</p>/div>
        <iframe src="https://www.goggle.com/maps/embed?pb=!1m18!1m12!1m3!1d2166.0903504023904!2d-2.1432107841174592!3d57"
        .11841899330936!2m3!1f0!3f0!3m2!1i1024!2!768!4f13.1!3m3!m2!1s0x488410483d2f0941%3A0x5d8969696688e77366a!2sRobert+Gordon+University+Aberdeen frameborder="0"></iframe>
        %2C+Garthdee+Campus!5e0!3m2!1sen!2suk!4v1460643848350"width="600" height="450"frameborder="0"style="border:0"<allowfullscreen></iframe>
        YOUTUBE STARTS HERE 
        <iframe width="560" height="315" src="https://">
            <div class="grid-33"><p>This is my sidebar</p></div> 
        <blockquote class="twitter-tweet" data-media-max-width="560"><p lang="en" dir="ltr">At dawn from the gateway to Mars, the launch of Starship’s second flight test <a href="https://t.co/ffKnsVKwG4">pic.twitter.com/ffKnsVKwG4</a></p>&mdash; SpaceX (@SpaceX) <a href="https://twitter.com/SpaceX/status/1732824684683784516?ref_src=twsrc%5Etfw">December 7, 2023</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
  </section>
</main>
</body>
</head>
</html>