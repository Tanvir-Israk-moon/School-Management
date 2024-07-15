<?php 
session_start();
include_once('include/Data_Base.php');
if (!isset($_SESSION["e1m2a3i4l5"]) && !isset($_SESSION['r1o2l3e4']) && !isset($_SESSION['p1a2ss3w4o5r6d7'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/common.css">
    <title><?php echo $title; ?></title>
</head>