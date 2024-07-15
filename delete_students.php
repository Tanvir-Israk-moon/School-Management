<?php

include_once('include/head.php');
$ID =$_GET['id'];

$studentSQL = "DELETE FROM `students` WHERE `ID` = '$ID'";
$studentData = $conn->query($studentSQL);
header("location:all_students.php");


?>