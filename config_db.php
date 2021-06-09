<?php
$mysqli = new mysqli("localhost", "root","","test_case");
/* check connection */
mysqli_set_charset($mysqli, "utf8");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
if(!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();
}



