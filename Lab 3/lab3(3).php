<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         fieldset{
            width: 300px;
            height: 300px;
            text-align:center;
            
        }
    </style>
</head>
<body>
<form action="lab3(3).php" method="post" enctype="multipart/form-data">
    <fieldset>
        <img src = "empty.png"><br>
        <legend><b>Profile Picture</b></legend>
        <label for="image">Select image to upload:</label>
  <input type="file" name="image" id="image"><br>
  <input type="submit" value="Upload Image" name="submit"><br>
    </fieldset>
</form>
</body>
</html>

<?php
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        // Check file size
        if ($_FILES["image"]["size"] > 4 * 1024 * 1024) {
            echo "Sorry, your file is too large.";
        } else {
            // Allow certain file formats
            $imageFileType = strtolower(pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION));
            if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" ) {
                echo "Sorry, only JPG, JPEG & PNG files are allowed.";
            } else {
                // If all checks pass, move the uploaded file to a permanent location
                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
            }
        }
    } else {
        echo "File is not an image.";
    }
}
?>
