<?php
/*
(Special) take a form with file input field.
Now validate the file if the file is image or not ,
and take the extension only JPG . And also file 
should not be more than 1mb. 
If all the conditions are true then
upload the image to images folder
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload</title>
</head>
<body>

<h2>upload your image here</h2>

<form action="image-con.php" method="post" enctype="multipart/form-data">

    <input type="file" name="image">
    <input type="submit" value="upload" name="upload">

</form>
    
</body>
</html>