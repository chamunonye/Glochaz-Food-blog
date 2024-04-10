<?php

include('connection.php');
 $chefname=$_POST['chefname'];
 $category=$_POST['category'];
 $RecipeName=$_POST['RecipeName'];
 $Ingredients=$_POST['Ingredients'];
 $Directions=$_POST['Directions'];

    if(empty($_POST["chefname"]) || empty($_POST["category"]) || empty($_POST["RecipeName"]) || empty($_POST["Ingredients"]) || empty($_POST["Directions"]))
    {
        echo "All fields are required.";
    }
       
    else
    {   
        $sql = "INSERT INTO recipemethod (chefname,category,RecipeName,Ingredients,Directions) VALUES ('$chefname','$category','$RecipeName','$Ingredients','$Directions')";
        $result = mysqli_query($db, $sql);

        if($result)
        {
            echo "Successfully";
            header("Location: home.html");
        }
        else
        {
            echo "Something Went Wrong!";
            header("Location: addRecipe.html");
        }
    }
   
?>