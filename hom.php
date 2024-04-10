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
            <a class="navlink" style="color: #e01c0e;" href="hom.php">Recipes</a>
            <a class="navlink" href="blog.php">Blog</a>
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
    <h1>Welcome to Glochaz Food Blog  !!!</h1>
    <h2>Our Mission Statement is to provide the right Recipe for Healthy Living</h2>
    <h3> Vision is Think Recipe Think Glochaz</h3>
</header>
  
</main>
</body>
</head>
</html>