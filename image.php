<?php 
    include('config.php');

    if(isset($_POST['upload']) ){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $image_name = $_FILES["image"]["name"];
        $temp_name =  $_FILES['image']['tmp_name'];
        $folder = "upload_image/" .$image_name;
        move_uploaded_file($temp_name, $folder);
        
        $sql = "INSERT INTO `image`(`name`, `email`, `image`) VALUES ('$name', '$email', '$folder')";

        if(mysqli_query($conn, $sql) ){
            echo "data inserted";
        }else{
            echo "Error!";
        }
    }

   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Upload Image</title>
    </head>

    <body>
        <h2>Upload Image</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            <label for="fname">Name:</label><br>
            <input type="text" id="name" name="name" placeholder="Enter Your Name"><br>
            <br>
            <label for="email">Email: </label><br>
            <input for="email" id="email" name="email" placeholder="Enter Your Email"><br>
            <br>
            <label for="image">Image:</label><br>
            <input type="file" id="image" name="image"><br><br>
            <input type="submit" name="upload" value="Upload Image">
        </form>
    </body>
</html>