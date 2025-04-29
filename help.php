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
    <title>Planet Shopify | Online Shopping Site for Men</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
</head>
<body>
<?php include 'includes/question_bar.php' ?>

<body>
    <?php if (isset($_GET["Successful"])): ?>
        <div class="container mt-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Question Sent!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    <?php endif; ?>

  <section class="section">
    <h2>Why Choose Radar?</h2>
    <div class="features">
      <div class="section">
        <img class="help-images" src="images/support-icon.jpg" alt="24/7 Support">
        <h3>24/7 Support</h3>
        <p>We're here whenever you need us.</p>
      </div>
      <div class="section">
        <img class="help-images" src="images/tablet.jpg" alt="Expert Team">
        <h3>Expert Team</h3>
        <p>Certified professionals, right where you need them.</p>
      </div>
      <div class="section">
        <img class="help-images" src="images/meeting.jpg" alt="meeting">
        <h3>Quick Resolution</h3>
        <p>Problems solved, without the wait.</p>
      </div>
    </div>
  </section>

  <section class="section" style="background-color: #f1f3f5;">
    <h2>How It Works</h2>
    <div class="steps">
      <div class="step">
        <span>1</span>
        <h3>Connect With Us</h3>
        <p>Reach out through our platform or call us at (800) 555-1214.</p>
      </div>
      <div class="step">
        <span>2</span>
        <h3>Explain Your Issue</h3>
        <p>We can help with product or order issues, and even product support.</p>
      </div>
      <div class="step">
        <span>3</span>
        <h3>Get Solution</h3>
        <p>Get solutions tailored to you.</p>
      </div>
    </div>
  </section>
<?php include 'includes/footer.php' ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>