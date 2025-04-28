<?php
require("includes/common.php");
session_start();

if (!isset($_SESSION['email']) || $_SESSION['is_expert'] != 1) {
    header('Location: index.php');
    exit();
}

$query = "SELECT id, customer_email, question, category, responded FROM requests WHERE responded = 0 ORDER BY id DESC";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radar Shop</title>
    <link rel="stylesheet" href="includes/styles.css?v=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
</head>

<body>

<?php include 'includes/navbar.php'; ?>

<div class="container" style="min-height: 600px; padding-top: 100px;">

    <h1 class="text-center mb-4">Unanswered Requests</h1>

    <?php if (mysqli_num_rows($result) > 0): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Customer Email</th>
                    <th>Question</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['customer_email']); ?></td>
                        <td><?php echo htmlspecialchars($row['question']); ?></td>
                        <td><?php echo htmlspecialchars($row['category']); ?></td>
                        <td><a href="respond.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Respond</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="text-center" style="margin-top: 50px; font-size: larger;">No new requests at the moment.</p>
    <?php endif; ?>
</div>

<?php if (isset($_GET["Successful"])): ?>
<div class="container mt-4">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Response Sent!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
