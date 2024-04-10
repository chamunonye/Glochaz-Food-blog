<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recipe Upload Form</title>
    <link href="https://fonts.googleapis.com/css?family=Hind:400,300|Bangers" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Upload Recipe</h2>
        <div class="row">
            <div class="col-md-6">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="recipe_name">Recipe Name:</label>
                        <input type="text" class="form-control" id="recipe_name" name="recipe_name">
                    </div>
                    <div class="form-group">
                        <label for="ingredients">Ingredients:</label>
                        <textarea class="form-control" id="ingredients" name="ingredients" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="instructions">Instructions:</label>
                        <textarea class="form-control" id="instructions" name="instructions" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="chef_id">Chef ID:</label>
                        <input type="text" class="form-control" id="chef_id" name="chef_id">
                    </div>
                    <div class="form-group">
                        <label for="user_id">User ID:</label>
                        <input type="text" class="form-control" id="user_id" name="user_id">
                    </div>
                    <div class="form-group">
                        <label for="image">Select image to upload:</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Upload Recipe</button>
                </form>
            </div>
            <div class="col-md-6">
                <?php
                include 'connection.php'; // Include the connection file

                // Fetch data from the database
                $sql = "SELECT * FROM recipes";
                $result = $mysqli->query($sql);

                // Check if there are any rows returned
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='recipe'>";
                        echo "<h3>" . $row["recipe_name"] . "</h3>";
                        echo "<p><strong>Ingredients:</strong> " . $row["ingredients"] . "</p>";
                        echo "<p><strong>Instructions:</strong> " . $row["instructions"] . "</p>";
                        echo "<img src='" . $row["image_path"] . "' alt='" . $row["recipe_name"] . "' class='recipe-image img-fluid'>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No recipes found.</p>";
                }

                $mysqli->close(); // Close database connection
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
