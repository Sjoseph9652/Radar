<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radar Shop</title>
    <link rel="stylesheet" href="includes/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planet Shopify | Online Shopping Site for Men</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
</head>
<body>
</html>


<?php
require ("includes/common.php");
session_start();

$email=$_POST['lemail'];
$email=mysqli_real_escape_string($con,$email);

$password=$_POST['lpassword'];
$password=mysqli_real_escape_string($con,$password);
$password=md5($password);

$query="SELECT id,email_id,password, is_expert from users where email_id='".$email."' and  password='".$password."'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num==0){
    $m = "Please enter correct E-mail id and Password";
    header('location: index.php?errorl='.$m);
}else{
    $row = mysqli_fetch_array($result);
    $_SESSION['email'] = $row['email_id'];
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['is_expert'] = $row['is_expert'];
    header('location:index.php');
}



?>