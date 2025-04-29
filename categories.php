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

		<?php include 'includes/navbar.php' ?>
    <header class="hero">
         <div class="hero-text">
            <h1 style="color:white;">Product Questions? Ask our Experts!</h1>
            <input type="text" class="question-box" placeholder="Type your question here">
        </div>
    </header>

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

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<?php include('includes/footer.php'); ?>
