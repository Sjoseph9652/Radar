<?php
session_start();
require 'includes/common.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $response_id = $_POST['response_id'];


    if (empty($response_id)) {
        echo "Error: No response ID received.";
        exit;
    }


    $deleteQuery = "DELETE FROM responses WHERE response_id = '$response_id' AND customer_email = '{$_SESSION['email']}'";


    if (mysqli_query($con, $deleteQuery)) {
        header('Location: account.php'); 
        exit(); 
    } else {
        echo "Error: " . mysqli_error($con); 
    }
}
?>
