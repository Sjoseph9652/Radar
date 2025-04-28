
<?php
require("includes/common.php");
session_start();

if (!isset($_SESSION['email']) || $_SESSION['is_expert'] != 1) {
    header('Location: index.php'); // needed?
    exit();
}

$query = "SELECT id, customer_email, question, category, responded FROM requests WHERE responded = 0 ORDER BY id DESC";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) 
{
    echo "<div class='expert-pannel-body'>";
    echo "<h1 style='padding-top: 100px; text-align: center'>Unanswered Requests</h1>";
    echo "<table class='table'>";
    echo "<thead><tr><th>Customer Email</th><th>Question</th><th>Category</th><th>Action</th></tr></thead>";
    echo "<tbody>";

    while ($row = mysqli_fetch_array($result)) 
    {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['customer_email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['question']) . "</td>";
        echo "<td>" . htmlspecialchars($row['category']) . "</td>";
        echo "<td><a href='respond.php?id=" . $row['id'] . "' class='btn btn-primary'>Respond</a></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
} else 
{
    echo "<p>No new requests at the moment.</p>";
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
<?php include 'includes/navbar.php' ?>
<?php include 'includes/footer.php' ?>
</html>

