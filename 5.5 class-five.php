<?php
/*
Take a form with file input field. 
Now upload a file and store in image folder
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image-Upload</title>
</head>
<body>

<h3>Upload your image here</h3>

<form action="upload-file.php" method="post" enctype="multipart/form-data">

    <input type="file" name="image">
    <input type="submit" value="submit" name="submit">

</form>
    
</body>
</html>