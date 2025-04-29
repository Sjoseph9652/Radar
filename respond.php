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
    $response_text = mysqli_real_escape_string($con, $_POST['response']);
    $customer_email = $request['customer_email'];
    $expert_email = $_SESSION['email'];

    $insert_query = "INSERT INTO responses (question_id, customer_email, expert_email, response)
    VALUES ($request_id, '$customer_email', '$expert_email', '$response_text')";

    if (mysqli_query($con, $insert_query)) {
        $update_request = "UPDATE requests SET responded = 1 WHERE id = $request_id";
        mysqli_query($con, $update_request);

        header("location: expert_panel.php?id=$request_id&Successful=yes");
        exit();

    } else {
        echo "<p>Failed to submit response</p>";
    }
}

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
    <title>Radar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
</head>

<body>
<?php include 'includes/navbar.php' ?>
<div class="respond-header">
    <h1>Respond to Request</h1>
    <p><strong>Customer Email:</strong> <?php echo htmlspecialchars($request['customer_email']); ?></p>
    <p><strong>Question:</strong> <?php echo htmlspecialchars($request['question']); ?></p>
</div>

<form action="respond.php?id=<?php echo $request_id; ?>" method="post">
    <div class="respond-form">
        <label for="response">Your Response:</label>
        <textarea name="response" id="response" class="form-control" rows="5" required></textarea>
        <button type="submit" class="btn btn-success">Submit Response</button>
    </div>
</form>

<?php include 'includes/footer.php' ?>    


</body>
