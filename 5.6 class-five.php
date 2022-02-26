<?php
/*
Take a form with file input field. 
Now when upload an image check if 
the file size is not more than 2 MB. 
If the file is more than 2 MB then 
show message that can not be uploaded
*/ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image-upload</title>
</head>
<body>

<h2>Upload your image here</h2>

<form action="" method="post" enctype="multipart/form-data">

<?php

if(isset($_POST['submit']))
{
    if($_FILES['image']['size'] < 2000000)
    {
        $upload = $_FILES['image']['tmp_name'];
        $create = uniqid() . '.jpg' . '.png';

        move_uploaded_file($upload, $create);
        echo 'uploaded';
    }else
    {
        echo 'can not be uploaded' ."<br>";
    }
}

?>


    <input type="file" name="image">
    <input type="submit" value="submit" name="submit">


</form>
    
</body>
</html>