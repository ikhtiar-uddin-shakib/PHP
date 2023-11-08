<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";
$con = new mysqli($servername, $username, $password, $database);
if(!$con)
{
    echo "fail to connect";
}
$sql = " insert into information values (35, 'Soud', 019999999999)";
if ($con -> query($sql) === TRUE)
{
    echo "Insert has been  succesfully";
}
else
{
    echo "fail ";
}
$con ->close();
?>