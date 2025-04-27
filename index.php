<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radar Shop</title>
    <link rel="stylesheet" href="includes/styles.css">
</head>
<body>

    <header class="header">
        <?php include 'includes/navbar.php' ?>
        <div class="hero-text">
            <h1>Product Questions? Ask our Experts!</h1>
            <input type="text" class="question-box" placeholder="Type your question here">
        </div>
    </header>

<div class="hero">
    <div class="hero-text">
        <h1>Summer Collection 2025</h1>
        <p>The hottest products for the best price!</p>
        <button class="deals-button" onclick="window.location.href='deals.php';">Shop Now</button>
    </div>
</div>

<section class="categories">
    <h2>Shop by Category</h2>
</section>

<section class="products">
    <div class="product">
        <img src="images/fashion.jpg" alt="Fashion">
        <h3>Fashion</h3>
    </div>
    <div class="product">
        <img src="images/electronics.jpg" alt="Electronics">
        <h3>Electronics</h3>
    </div>
    <div class="product">
        <img src="images/home.jpg" alt="Home">
        <h3>Home</h3>
    </div>
</section>

<section class="filter">
    <h2>Featured Products</h2>
</section>

<section class="products">
    <div class="product">
        <img src="images/headphones.png" alt="Wireless Headphones">
        <h4>Wireless Headphones</h4>
        <p>Premium sound quality</p>
        <strong>$109.99</strong>
    </div>
    <div class="product">
        <img src="images/smartwatch.png" alt="Smart Watch">
        <h4>Smart Watch</h4>
        <p>Fitness tracking</p>
        <strong>$299.99</strong>
    </div>
    <div class="product">
        <img src="images/shoes.png" alt="Running Shoes">
        <h4>Running Shoes</h4>
        <p>Lightweight comfort</p>
        <strong>$89.99</strong>
    </div>
    <div class="product">
        <img src="images/camera.png" alt="Camera Lens">
        <h4>Camera Lens</h4>
        <p>Professional grade</p>
        <strong>$599.99</strong>
    </div>
</section>

<?php include('includes/footer.php'); ?>
