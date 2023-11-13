<?php
$con = new mysqli('localhost', 'root', '', 'student');
if(!$con)
{
    echo "fail to connect";
}
$id = $_POST['fid'];
$name = $_POST['fname'];
$phone = $_POST['fphone'];

$sql = "insert into information values ('$id', '$name', '$phone')";

if($con->query($sql) === TRUE){
    echo "inserted data";
}
else{
    echo "failed to insert data";
}
$con -> close();
?>