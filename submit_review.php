<?php
session_start();
require "includes/common.php"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $review = mysqli_real_escape_string($con, $_POST['review']);
    $product_id = $_POST['product_id'];
    $user_email = $_SESSION['email'];


    $query = "INSERT INTO reviews (product_id, user_email, review) VALUES ('$product_id', '$user_email', '$review')";
    $result = mysqli_query($con, $query);

    if ($result) {
        $_SESSION['review_success'] = true;
    } else {
        $_SESSION['review_error'] = true;
    }
    header("Location: product.php?id=$product_id");
    exit();
}
?>
