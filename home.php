<?php
session_start();
require 'includes/common.php'; 
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

    <div class="container" style="margin-top: 80px;">
        <h2 class="text-center">Home Products</h2>
        <hr>

        <div class="row text-center">
            <?php
            $query = "SELECT * FROM products WHERE category = 'home'";
            $result = mysqli_query($con, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-md-3 col-6 py-2">
                        <div class="card position-relative">
                            <a href="product.php?id=<?php echo $row['id']; ?>" class="stretched-link text-decoration-none text-dark">
                                <img src="<?php echo htmlspecialchars($row['image_path']); ?>" class="img-fluid pb-1" style="height: 200px; object-fit: contain;" alt="<?php echo htmlspecialchars($row['name']); ?>">
                                <div class="figure-caption">
                                    <h6><?php echo htmlspecialchars($row['name']); ?></h6>
                                    <h6>Price: $<?php echo htmlspecialchars($row['price']); ?></h6>
                                </div>
                            </a>
                            <div class="card-footer bg-white border-0">
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <a href="index.php#login" role="button" class="btn btn-warning text-white">Add To Cart</a>
                                    <?php
                                } else {
                                    include_once 'includes/check-if-added.php';
                                    if (check_if_added_to_cart($row['id'])) {
                                        echo '<a href="#" class="btn btn-warning text-white" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=<?php echo $row['id']; ?>" name="add" value="add" class="btn btn-warning text-white">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<h4 class='text-center w-100'>No fashion products available right now.</h4>";
            }
            ?>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
