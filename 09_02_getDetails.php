<?php
$con = new mysqli("localhost","root","","json_php");
$sql = "select * from mobile";
$res = $con -> query($sql);
$mobile = array();

while($row = $res -> fetch_assoc())
{
    $mobile[] = $row;
}

echo json_encode($mobile);
?>