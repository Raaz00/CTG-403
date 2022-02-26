<?php
/*
Take a form with 3 input fields, they are named, 
first_name, last_name, age, gender. Use POST method , 
then when submit the form it will show all the 
input fields data
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


    <form action="action.php" method="post">

    <input type="text"  name="first_name" placeholder="first-name">
    <input type="text"  name="last_name" placeholder="last-name">
    <input type="number" name="age" placeholder="age">

<?php
    
    if(isset($_POST['submit']))
    {
        echo $_POST['first_name'] . "<br>";
        echo $_POST['last_name'] . "<br>";
        echo $_POST['age'];

    }

?>  

    <input type="submit" value="submit" name="submit">


    </form>
    
</body>
</html>