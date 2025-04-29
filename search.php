<?php
require ("includes/common.php");
session_start();

$search_query = isset($_GET['query']) ? $_GET['query'] : '';
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
    <?php include 'includes/check-if-added.php' ?>

    <div class="container" style="margin-top:80px">
    <h2 class="text-center">Search Results</h2>
    <hr>

    <div class="row text-center">
        <?php
            if ($search_query != '') {
                $search_query = mysqli_real_escape_string($con, $search_query);
                $query = "SELECT * FROM products WHERE name LIKE '%$search_query%'";
                $result = mysqli_query($con, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="col-md-3 col-6 py-2">
                            <div class="card h-100">
                                <a href="product.php?id=<?php echo $row['id']; ?>" style="text-decoration: none; color: inherit;">
                                    <div class="image-container">
                                    <img src="<?php echo htmlspecialchars($row['image_path']); ?>" class="img-fluid pb-1" style="height: 200px; object-fit: contain;" alt="<?php echo htmlspecialchars($row['name']); ?>">
                                    </div>
                                    <div class="figure-caption p-2">
                                        <h6><?php echo htmlspecialchars($row['name']); ?></h6>
                                        <h6>Price: $<?php echo htmlspecialchars($row['price']); ?></h6>
                                    </div>
                                </a>
                                <div class="p-2">
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                        <a href="index.php#login" role="button" class="btn btn-warning text-white btn-block">Add To Cart</a>
                                    <?php } else {
                                        if (check_if_added_to_cart($row['id'])) { ?>
                                            <button class="btn btn-warning text-white btn-block" disabled>Added to cart</button>
                                        <?php } else { ?>
                                            <a href="cart-add.php?id=<?php echo $row['id']; ?>" class="btn btn-warning text-white btn-block">Add to cart</a>
                                        <?php }
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<h4 class='w-100 text-center'>No products found matching your search.</h4>";

                }
            } else {
                echo "<h4 class='w-100 text-center'>Please enter a search term.</h4>";
            }
        ?>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'includes/footer.php' ?>
</body>