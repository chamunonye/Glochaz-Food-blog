<?php
include 'connection.php';
session_start();

//Values 
if(isset($_POST['email'])){
    $username= $_POST['email'];
} else {
    $username= '';
}

if(isset($_POST['password'])){
    $password= $_POST['password'];
} else {
    $password= '';
}


// $email= $_POST['email'];
// $username= $_POST['username'];
// $password= $_POST['password'];
// $confirmpass= $_POST['confirmpass'];
// $user= $_POST['user'];
// $email= $_REQUEST['email'];
$errMsg='';



 



// Free result set
// mysqli_free_result($result);


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.html/style.css">
</head>
<body>
<nav class="home-nav">
        <div><img src="assets/Logo.png" alt="" class='logo'></div>
        <div class="options">
            <a class="navlink" href="hom.php">Recipes</a>
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
                echo '<a class="navlink" style="color: #e01c0e;" href="signin.php">Sign In<a>';
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
    <div >
        <form action="signin.php" method='post' style="display: flex; align-items: center;justify-content: center; height: 92vh; ">
            <div class="login-form" >
                <div style="text-align: center;font-weight: bold;">SIGN IN</div>
                <div style="padding-top: 20px;">
                    <label for="username">email</label>
                    <div style="padding-top: 10px;">
                        <input class="login-inputs" autocomplete='off' name='email' type="text" placeholder="username">
                    </div>    
                </div>
                <div style="padding-top: 15px;">
                    <label for="password">password</label>
                    <div style="padding-top: 10px;">
                    <input name='password' class="login-inputs" autocomplete='off' type="password" placeholder="password">
                </div>
                <small style='color: red;'>
                <?php
                    if(isset($_POST['email']) && isset($_POST['password']) ){
                        $sql= "SELECT name, password from users where email= '$username'";
                        $result = mysqli_query($mysqli, $sql);
                        $row = $result -> fetch_array(MYSQLI_NUM);
                        if($row!=[]){
                            if ($password==$row[1]) {
                                $_SESSION['loggedin'] = "true";
                                $_SESSION['username'] = $row[0];
                                header("Location: hom.php");
                            } else {
                                echo "invalid username or password";
                            }
                        } else {
                            echo "invalid username or password";
                        }
                        
                    
                    
                    
                    
                        // // Fetch all
                        // mysqli_fetch_all($result, MYSQLI_ASSOC);
                    }
                    mysqli_close($mysqli);
                ?>
                </small>
                </div>
                <small style="float: right; font-size: 12px; margin-top: 5px; color: #555; cursor: pointer;">forgot password?</small>
                <div style="margin-top: 25px;">
                    <input style="width: 260px;" type='submit' class="signin-button" value='SIGN IN'></input>
                </div>
            <div style="margin-top: 7px; font-size: 12px; text-align: center;">Don't have an account? <a href="signup.php" style="color: #e01c0e; text-decoration: none;">sign up</a></div>
            </div>
        </form>
    </div>
</body>
</html>