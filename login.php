<?php
include("connection.php"); //Establishing connection with our database
    if(empty($_POST["email"]) || empty($_POST["password"]))
    {
        echo "Both fields are required.";
    }
    else
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="SELECT uid FROM glochaz WHERE username='username' and password='$password'";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result) == 1)
        {
            header("location: home.html"); // Redirecting To another Page
        }
        else
        {
            echo "Incorrect username or password.";
        }
    }
?>