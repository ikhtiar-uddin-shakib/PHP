<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = new mysqli($servername, $username, $password);
if(!$con)
{
    echo "fail to connect";
}
$sql = " CREATE DATABASE Student";
if ($con -> query($sql) === TRUE)
{
    echo "Database has been created succesfully";
}
else
{
    echo"fail ";
}
$con ->close();
?>