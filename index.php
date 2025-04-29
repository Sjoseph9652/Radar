<?php
session_start();
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

    <?php include 'includes/question_bar.php' ?>
    <div class="hero">
        <div class="hero-text">
            <h1>Summer Collection 2025</h1>
            <p>The hottest products for the best price!</p>
            <button class="deals-button" onclick="window.location.href='shop.php';">Shop Now</button>
        </div>
    </div>

    <section class="categories py-5">
        <div class="container text-center">
            <h2>Shop by Category</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="fashion.php" class="text-decoration-none text-dark">
                        <div class="product">
                            <img src="images/fashion.jpg" alt="Fashion" class="img-fluid">
                            <h3>Fashion</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="electronics.php" class="text-decoration-none text-dark">
                        <div class="product">
                            <img src="images/electronics.jpg" alt="Electronics" class="img-fluid">
                            <h3>Electronics</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="home.php" class="text-decoration-none text-dark">
                        <div class="product">
                            <img src="images/home.jpg" alt="Home" class="img-fluid">
                            <h3>Home</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="filter">
        <h2>Featured Products</h2>
    </section>

    <section class="products">
        <div class="product">
            <a href="product.php?id=17">
                <img src="images/headphones.png" alt="Wireless Headphones">
                <h4>Wireless Headphones</h4>
                <p>Premium sound quality</p>
                <strong>$299</strong>
            </a>
        </div>
        <div class="product">
            <a href="product.php?id=37">
                <img src="images/watch.png" alt="Smart Watch">
                <h4>Watch</h4>
                <p>Fitness tracking</p>
                <strong>$99</strong>
            </a>
        </div>
        <div class="product">
            <a href="product.php?id=34">
                <img src="images/shoes.png" alt="Running Shoes">
                <h4>Running Shoes</h4>
                <p>Lightweight comfort</p>
                <strong>$150</strong>
            </a>
        </div>
        <div class="product">
            <a href="product.php?id=24">
                <img src="images/camera.png" alt="Camera Lens">
                <h4>Camera Lens</h4>
                <p>Professional grade</p>
                <strong>$649</strong>
            </a>
        </div>
    </section>
</body>

<?php include('includes/footer.php'); ?>
