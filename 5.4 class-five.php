<?php
/*
make a login form, with username and password. 
Now take variable in action file where store 
username and password hard coded. 
Now when the form submits with username and password, 
then check with the values that taken with variable.
If username and password match , then show "Authorized" 
otherwise show "Invalid Credentials"
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

<h2>Login</h2>

<form action="login-form.php" method="post">

<input type="text" name="user" placeholder="user-name">
<input type="password" name="password" placeholder="password">

<input type="submit" value="submit" name="submit">

</form>
    
</body>
</html>