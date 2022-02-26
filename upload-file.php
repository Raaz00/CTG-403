
<?php

if(isset($_POST['submit']))
{
    $upload = $_FILES['image']['tmp_name'];
    $create = uniqid() . '.jpg' . '.png';

    move_uploaded_file($upload, $create);

    echo 'Uploaded';
}else
{
    echo 'Try again';
}

?>