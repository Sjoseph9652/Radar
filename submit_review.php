<?php
session_start();
require "includes/common.php";  // Make sure the DB connection is included

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $review = mysqli_real_escape_string($con, $_POST['review']);
    $product_id = $_POST['product_id'];
    $user_email = $_SESSION['email'];

    // Store the review in the database
    $query = "INSERT INTO reviews (product_id, user_email, review) VALUES ('$product_id', '$user_email', '$review')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>alert('Review submitted successfully!'); window.location.href='product.php?id=$product_id';</script>";
    } else {
        echo "<script>alert('Failed to submit review. Please try again later.'); window.location.href='product.php?id=$product_id';</script>";
    }
}
?>
