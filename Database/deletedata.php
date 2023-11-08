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
$sql = " delete from information where id = 33";
if ($con -> query($sql) === TRUE)
{
    echo "Delete has been  succesfully";
}
else
{
    echo "fail ";
}
$con ->close();
?>