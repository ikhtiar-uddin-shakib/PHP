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
$sql = " update information set Phone = '01555555555' where id = 33";
if ($con -> query($sql) === TRUE)
{
    echo "Update has been  succesfully";
}
else
{
    echo "fail ";
}
$con ->close();
?>