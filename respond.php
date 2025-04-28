<?php
require("includes/common.php");
session_start();

if (!isset($_SESSION['email']) || $_SESSION['is_expert'] != 1) {
    header('Location: index.php'); 
    exit();
}

$request_id = $_GET['id'];

$query = "SELECT * FROM requests WHERE id = $request_id";
$result = mysqli_query($con, $query);
$request = mysqli_fetch_array($result);

if (!$request) {
    echo "Request not found!";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $response = mysqli_real_escape_string($con, $_POST['response']);
    $update_query = "UPDATE requests SET response = '$response', responded = 1 WHERE id = $request_id";
    if (mysqli_query($con, $update_query)) {
        echo "<p>Response submitted successfully!</p>";
    } else {
        echo "<p>Failed to submit response. Please try again later.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radar Shop</title>
    <link rel="stylesheet" href="includes/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planet Shopify | Online Shopping Site for Men</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
</head>
<body>
    
<h1>Respond to Request</h1>
<p><strong>Customer Email:</strong> <?php echo htmlspecialchars($request['customer_email']); ?></p>
<p><strong>Question:</strong> <?php echo htmlspecialchars($request['question']); ?></p>
<p><strong>Category:</strong> <?php echo htmlspecialchars($request['category']); ?></p>

<form action="respond.php?id=<?php echo $request_id; ?>" method="post">
    <div class="form-group">
        <label for="response">Your Response:</label>
        <textarea name="response" id="response" class="form-control" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit Response</button>
</form>
