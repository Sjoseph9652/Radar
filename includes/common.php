<?php
$con=mysqli_connect("localhost","root","","radar");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}