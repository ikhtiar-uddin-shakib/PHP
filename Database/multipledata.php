<?php
$con = new mysqli("localhost", "root", "", "student");
if(!$con)
{
    echo "fail to connect";
}
$sql= " insert into information values (35, 'Soud', 019999999999);";
$sql.= " insert into information values (36, 'raahman', 019999999999);";
$sql.= " insert into information values (37, 'Shakil', 019999999999);";
$sql.= " insert into information values (38, 'anas', 019999999999);";
$sql.= " insert into information values (39, 'Shanto', 019999999999);";
$sql.= " insert into information values (48, 'rohit', 019999999999)";
if ($con -> multi_query($sql) === TRUE)
{
    echo "Insert has been  succesfully";
}
else
{
    echo "fail ";
}
$con ->close();
?>