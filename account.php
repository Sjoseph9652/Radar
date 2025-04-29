<?php
session_start();
require 'includes/common.php';

$email = $_SESSION['email'];
$query = "SELECT first_name, last_name, email_id FROM users WHERE email_id = '$email'";
$result = mysqli_query($con, $query);
$user = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - Radar Shop</title>
    <link rel="stylesheet" href="includes/styles.css?v=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

    <?php include 'includes/question_bar.php';?>

    <div class="container" style="margin-top: 80px;">
        <h2 class="text-center">My Account</h2>
        <hr>

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4>User Information</h4>
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" class="form-control" id="firstName" value="<?php echo htmlspecialchars($user['first_name']); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" class="form-control" id="lastName" value="<?php echo htmlspecialchars($user['last_name']); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control" id="email" value="<?php echo htmlspecialchars($user['email_id']); ?>" readonly>
                </div>
                <div class="text-center">
                    <a href="cart.php" class="btn btn-primary">View Cart</a>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <h4>Responses</h4>
                <?php
                $responseQuery = "SELECT * FROM responses WHERE customer_email = '$email'";
                $responseResult = mysqli_query($con, $responseQuery);

                if (mysqli_num_rows($responseResult) > 0) {
                    while ($response = mysqli_fetch_assoc($responseResult)) {
                        ?>
                        <div class="alert alert-info d-flex justify-content-between align-items-center">
                            <span><?php echo htmlspecialchars($response['response']); ?></span>
                            <div>
                                <form action="remove_question.php" method="POST" style="display:inline;">
                                    <input type="hidden" name="response_id" value="<?php echo $response['response_id']; ?>">
                                    <button type="submit" class="btn btn-success btn-sm">answered</button>
                                </form>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<div class='alert alert-warning'>No responses yet.</div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
<?php include('includes/footer.php'); ?>
</html>
