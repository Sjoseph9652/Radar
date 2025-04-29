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


    <main>

        <section class="products">
            <div class="product">
                    <img src="images/shirt1.png" alt="White and Blue Cat T-shirt">
                    <h3>Name of product (price)</h3>
                    <p>Brief blurb here </p>
            </div>

		   <div> </div>

        </section>
    </main>
    <?php include 'includes/footer.php' ?>
</body>
</html>
