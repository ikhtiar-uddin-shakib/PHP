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
$sql = " select Name , Phone from information where id = 41";
$result = $con->query($sql);
if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        echo"The name of the student is ".$row["Name"]."Phone number is ".$row["Phone"];
    }
}

else
{
    echo "0 ";
}
$con ->close();
?>