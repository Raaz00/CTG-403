<?php
/*
Make a registration form with fields 
username,password,email,phone,address .
 Validate the form with
i) username must be at least 6 character
ii) password at least 8 length
iii) username and password must be filled up
iv) phone number must be numeric
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>

<style>
    form input{
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>

<h2>Registration</h2>

<form action="" method="post">

<?php

if(isset($_POST['submit']))
{
    if(empty($_POST['user']) && empty($_POST['password']))
    {
        echo 'username and password must be filled up';
    }else
    {

    }
}

?>

<br>

    <input type="text" name="user" placeholder="user-name">
    <br>

<?php

    if(isset($_POST['submit']))
    {
        if(strlen($_POST['user']) >= 6)
        {
            echo $_POST['user'];
        }else
        {
            echo 'Username must be at least 6 character';
        }
    }
?>
    <br>
    
    <input type="password" name="password" placeholder="password">
    <br>

    <?php

    if(isset($_POST['submit']))
    {
        if(strlen($_POST['password']) >= 8)
        {
            echo 'You password has been stored';
        }else
        {
            echo 'password at least 8 length';
        }
    }

    ?>

    <br>

    <input type="email" name="email" placeholder="e-mail">
    <br>
    <input type="number" name="number" placeholder="phone">

 <br>
    <?php

    if(isset($_POST['submit']))
    {
        if(is_numeric($_POST['number']))
        {
            echo 'Your contact will be store for future';
        }else
        {
            echo 'phone number must be numeric';
        }
    }

    ?>
<br>

    <input type="text" name="address" placeholder="address">
    <br>

    <input type="submit" value="submit" name="submit">

</form>
    
</body>
</html>