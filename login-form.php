<?php

$name = 'Raaz Khan';
$password = 454845;

if(isset($_POST['submit']))
{

    if($name == $_POST['user'] && $password == $_POST['password'])
    {
        echo "Authorized";
        
    }else
    {
        echo "Invalid Credentials";
    }

}

?>