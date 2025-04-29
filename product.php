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

        <section class="products">
                    <div class="product">
        			<?php
        				$url =  isset($_SERVER['HTTPS']) &&
                				$_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
                			$url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

                			$currentID = (explode("=",$url));
                			$passID =$currentID[1];
                			$sql = "SELECT * FROM photos WHERE id = '$passID'";

        				$result = $con->query($sql);
        				$row = $result->fetch_assoc();
        				$photo = $row["photo-name"];

        				echo "
        				 <div class='product'>
                            	<img src=images/$photo alt='Image'>";

        				$sql = "SELECT * FROM products WHERE id = '$passID'";

        				$result = $con->query($sql);
        				$row = $result->fetch_assoc();
        				$name = $row["name"];

        				echo "
                            <h3>$name ($)</h3>
        				 </div>	";
        			?>

        		   <div> </div>

                </section>
    </main>
    <?php include 'includes/footer.php' ?>
</body>
</html>
