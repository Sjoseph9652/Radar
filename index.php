<?php
session_start();
include 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radar Shop</title>
    <link rel="stylesheet" href="includes/styles.css?v=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
</head>
<body>

	<?php include 'includes/navbar.php' ?>
    <div class="hero">
        <div class="hero-text">
            <h1 style="color:white;">Summer Collection 2025</h1>
            <p style="color:white;">The hottest products for the best price!</p>
            <button class="deals-button" onclick="window.location.href='shop.php';">Shop Now</button>
        </div>
    </div>

    <section class="categories py-5">
        <div class="container text-center">
            <h2>Popular Categories</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="product">
						<a href="fashion.php">
                        <img src="images/fashion.jpg" alt="Fashion" class="img-fluid">
                        <h3>Fashion</h3>
						</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="product">
					<a href="electronics.php">
                        <img src="images/electronics.jpg" alt="Electronics" class="img-fluid">
                        <h3>Electronics</h3>
						</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="product">
						<a href="home.php">
                        <img src="images/home.jpg" alt="Home" class="img-fluid">
                        <h3>Home</h3>
						</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="filter">
        <h2>Featured Products</h2>
    </section>

    <section class="products">
            <div class="product">
    			<a href="product.php?id=23">
                <img src="images/headphones.png" alt="Wireless Headphones">
                <h4>Wireless Headphones</h4>
                <p>Premium sound quality</p>
                <strong>$109.99</strong>
    			</a>
            </div>
            <div class="product">
    			<a href="product.php?id=24">
                <img src="images/smartwatch.png" alt="Smart Watch">
                <h4>Smart Watch</h4>
                <p>Fitness tracking</p>
                <strong>$299.99</strong>
    			</a>
            </div>
            <div class="product">
    			<a href="product.php?id=25">
                <img src="images/shoes.png" alt="Running Shoes">
                <h4>Running Shoes</h4>
                <p>Lightweight comfort</p>
                <strong>$89.99</strong>
    			</a>
            </div>
            <div class="product">
    			<a href="product.php?id=26">
                <img src="images/camera.png" alt="Camera Lens">
                <h4>Camera Lens</h4>
                <p>Professional grade</p>
                <strong>$599.99</strong>
    			</a>
            </div>
        </section>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<?php include('includes/footer.php'); ?>
