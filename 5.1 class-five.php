<?php
/*
Take a form with two input fields (GET Request).
Now when submit the form it will output the sum 
of the two input fields values. (Addition you 
can check if the inputs are number or not)
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    
<form action="" method="get">

    <input type="text" name="num-a">
    <input type="text" name="num-b">

    <input type="submit" value="Submit" name="submit">
    <br>

<?php

if(isset($_GET['submit']))
{
    if(is_numeric($_GET['num-a']) && is_numeric($_GET['num-b']))
    {
        echo $_GET['num-a'] + $_GET['num-b'];

    }else
    {
        echo 'Please insert numeric number';
    }
}

?>

</form>


</body>
</html>