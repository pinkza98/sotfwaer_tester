<?php
$servername = "localhost";
$username = "root";
$password = "";
$con = new mysqli($servername,$username,$password);
if($con->connect_error){
    die("Connect failed:".$con->connect_error);
}
echo "เชื่อมต่อสำเร็จ";
?>