<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = new mysqli($servername, $username, $password);
if(!$con)
{
    echo "fail to connect";
}
else
{
    echo"connect successfully";
}
?>