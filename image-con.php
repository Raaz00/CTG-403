<?php

$exten = $_FILES['image']['type'];
$upload = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];
$modify = uniqid() .'.jpg';

if(isset($_POST['upload']))
{
    if($exten == 'image/jpeg')
    {
        if($size <= 1000000)
        {
            move_uploaded_file($upload,'my-img/'.$modify);
            echo 'Upload done';

        }else
        {
            echo 'The image size should be 1mb';
        }

    }else
    {
        echo 'Image extension must be jpg';
    }
}

?>