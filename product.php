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

	<?php include 'includes/question_bar.php' ?>

    <main>
		<section class="products">
			<div class="container d-flex flex-column align-items-center">

				<?php
					$url = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
					$url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

					$currentID = explode("=", $url);
					$passID = $currentID[1];

					$sql = "SELECT * FROM photos WHERE id = '$passID'";
					$result = $con->query($sql);
					$row = $result->fetch_assoc();
					$photo = $row["photo-name"];

					$sql = "SELECT * FROM products WHERE id = '$passID'";
					$result = $con->query($sql);
					$row = $result->fetch_assoc();
					$name = $row["name"];
					$price = $row["price"];
				?>

				<div class="row align-items-center my-5">
					<div class="col-md-6 text-center">
						<img src="images/<?php echo $photo; ?>" alt="Product Image" class="img-fluid rounded" style="max-height: 400px; object-fit: contain;">
					</div>
					<div class="col-md-6">
						<h2><?php echo htmlspecialchars($name); ?></h2>
						<h4 class="text-muted">$<?php echo htmlspecialchars($price); ?></h4>
					</div>
				</div>

				</div>
				<div class="row my-5">
					<div class="col-md-12">
						<?php
							if (!isset($_SESSION['email'])) {
								echo '
									<a href="index.php#login" class="btn btn-lg btn-warning text-white mr-2">Add to Cart</a>
									<a href="ask_question.php?id=' . $passID . '" class="btn btn-lg btn-info">Product Question?</a>
								';
							} else {
								include_once 'includes/check-if-added.php';
								if (check_if_added_to_cart($row['id'])) {
									echo '
										<a href="#" class="btn btn-lg btn-secondary mr-2" disabled>Added to Cart</a>
										<button class="btn btn-lg btn-info" onclick="toggleQuestionForm()">Ask a question?</button>
									';
								} else {
									echo '
										<a href="cart-add.php?id=' . $row['id'] . '" class="btn btn-lg btn-success mr-2">Add to Cart</a>
										<button class="btn btn-lg btn-info" onclick="toggleQuestionForm()">Ask a question?</button>
									';
								}
							}
						?>
						<div id="question-form" style="display: none;" class="mt-4">
						<form action="submit_request.php" method="POST" class="d-flex flex-column">
							<input type="hidden" name="product_id" value="<?php echo $passID; ?>">
							<textarea name="question" class="form-control mb-2" placeholder="Type your question here..." required></textarea>
							<button type="submit" class="btn btn-primary align-self-start">Submit Question</button>
						</form>
					</div>

						<h4>Leave a Review</h4>
						<form action="submit_review.php" method="POST">
							<textarea name="review" rows="5" class="form-control" placeholder="Write your review here..." required></textarea>
							<div class="mt-3">
								<label for="stars" style="font-weight: bold">Rating:</label><br>
								<input type="radio" name="stars" value="1" required> 1
								<input type="radio" name="stars" value="2"> 2
								<input type="radio" name="stars" value="3"> 3
								<input type="radio" name="stars" value="4"> 4
								<input type="radio" name="stars" value="5"> 5
							</div>
							<input type="hidden" name="product_id" value="<?php echo $passID; ?>">
							<button type="submit" class="btn btn-primary mt-3">Submit Review</button>
						</form>
					</div>
				</div>
			</div>
		</section>
    </main>
    <?php include 'includes/footer.php' ?>
	<script>
	function toggleQuestionForm() {
		const form = document.getElementById('question-form');
		form.style.display = (form.style.display === 'none') ? 'block' : 'none';
	}
	</script>

</body>
</html>
