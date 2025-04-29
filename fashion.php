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
    <header class="hero">
         <div class="hero-text">
            <h1 style="color:white;">Product Questions? Ask our Experts!</h1>
            <input type="text" class="question-box" placeholder="Type your question here">
        </div>
    </header>


    <main>
        <section class="filter">
            <button>☰ Filter</button>
        </section>

        <section class="products">
                    <div class="product">
                        <a href="product.php?id=18">
                            <img src="images/shirt1.png" alt="White and Blue Cat T-shirt">
                            <h3>White and Blue Cat T-shirt ($20)</h3>
                            <p>T-shirt Co.</p>
                        </a>
                    </div>

                    <div class="product">
                        <a href="product.php?id=19">
                            <img src="images/jeans.png" alt="Blue Jeans">
                            <h3>Blue Jeans ($40)</h3>
                            <p>Levi Strauss & Co.</p>
                        </a>
                    </div>

                    <div class="product">
                        <a href="product.php?id=20">
                            <img src="images/hat.png" alt="Plain White Baseball Hat">
                            <h3>Plain White Baseball Hat ($15)</h3>
                            <p>Hat Co.</p>
                        </a>
                    </div>

                    <div class="product">
                        <a href="product.php?id=17">
                            <img src="images/sunglasses.png" alt="Sunglasses">
                            <h3>Sunglasses ($60)</h3>
                            <p>Sunglasses Co.</p>
                        </a>
                    </div>

                    <div class="product">
                        <a href="product.php?id=21">
                            <img src="images/blackshirt1.png" alt="Black 705 T-Shirt">
                            <h3>Black 705 T-Shirt ($15)</h3>
                            <p>Custom Ink</p>
                        </a>
                    </div>

                    <div class="product">
                        <a href="product.php?id=22">
                            <img src="images/blackshirt2.png" alt="Crew Neck Black T-Shirt">
                            <h3>Crew Neck Black T-Shirt ($30)</h3>
                            <p>True Classic</p>
                        </a>
                    </div>
        </section>
    </main>
    <?php include 'includes/footer.php' ?>
</body>
</html>