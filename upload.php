<?php
include 'connection.php'; // Include the connection file

// Process form submission
if(isset($_POST['submit'])) {
    $recipe_name = $_POST['recipe_name'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];
    $chef_id = $_POST['chef_id'];
    $user_id = $_POST['user_id'];

    // Image upload
    $target_dir = "uploads/";
    $timestamp = time();
    $filename = $timestamp . '_' . basename($_FILES["image"]["name"]);
    $target_file = $target_dir . basename($filename);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats
    $allowed_formats = ["jpg", "jpeg", "png", "gif"];
    if(!in_array($imageFileType, $allowed_formats)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Try to upload the file
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars(basename($_FILES["image"]["name"])). " has been uploaded.";
            // Insert data into database
            $image_path = $target_file;
            $sql = "INSERT INTO recipes (recipe_name, ingredients, instructions, chef_id, user_id, image_path) VALUES ('$recipe_name', '$ingredients', '$instructions', '$chef_id', '$user_id', '$image_path')";
            if ($mysqli->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$mysqli->close(); // Close database connection
?>
