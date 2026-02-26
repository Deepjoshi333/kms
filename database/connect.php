<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$dbuser="root";
$dbpass="";
$host="localhost:8080";
$db="kms";

$con = new mysqli($host,$dbuser, $dbpass, $db);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

//session_start();
?>