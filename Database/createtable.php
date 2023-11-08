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
$sql = " create table information (id int(10), Name varchar(50), Phone varchar(15))";
if ($con -> query($sql) === TRUE)
{
    echo "Table has been created succesfully";
}
else
{
    echo "fail ";
}
$con ->close();
?>