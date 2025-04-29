<!--<nav class="navbar">
    <div class="logo">radar</div>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li> 
        <li><a href="categories.php">Categories</a></li>
        <li><a href="help.php">Expert Help</a></li>
        <li><a href="login.php">My Account</a></li>
    </ul>
    <div class="search-cart">
        <input type="text" placeholder="Search">
        <a href="cart.php"> 
            <img src= "images/cart.png" class="cart-icon">
        </a>
    </div>
</nav> -->
<!-- Navigation bar start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radar Shop</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color:#00b4d8">
    <div class="container">
        <a href="index.php" class="navbar-brand" style="font-family: 'Delius Swash Caps'">Radar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="mynavbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
                <li class="nav-item"><a href="categories.php" class="nav-link">Categories</a></li>
                <li class="nav-item"><a href="help.php" class="nav-link">Expert Help</a></li>
                <?php if (isset($_SESSION['email'])) { ?>
                    <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['is_expert']) && $_SESSION['is_expert'] == 1) { ?>
                  <li class="nav-item">
                    <a href="expert_panel.php" class="nav-link">Expert Panel</a>
                  </li>
                <?php } ?>
            </ul>

            <div class="d-flex align-items-center ml-3">
              <form class="form-inline" method="GET" action="search.php">
                <div class="input-group">
                  <div class="form-outline" data-mdb-input-init>
                    <input type="search" id="form1" name="query" class="form-control form-control-sm" style="height:30px;">
                  </div>
                  <button type="submit" class="btn btn-primary btn-sm" data-mdb-ripple-init>
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </div>

            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['email'])) { ?>
                    <li class="nav-item">
                        <a href="logout_script.php" class="nav-link">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="account.php" class="nav-link" data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email']; ?>">
                            <i class="fa fa-user-circle"></i>
                        </a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a href="#signup" class="nav-link" data-toggle="modal">
                            <i class="fa fa-user"></i> Sign Up
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#login" class="nav-link" data-toggle="modal">
                            <i class="fa fa-sign-in"></i> Login
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- Navigation bar end -->

    <!--navigation bar end-->
    <!--Login trigger Modal-->
    <div class="modal fade" id="login" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content"style="background-color:rgba(255,255,255,0.95)">

            <div class="modal-header">
              <h5 class="modal-title">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="login_script.php" method="post">
                 <div class="form-group">
                     <label for="email">Email address:</label>
                     <input type="email" class="form-control"  name="lemail" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd"  name="lpassword" placeholder="Password" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input">
                    <label for="checkbox" class="form-check-label">Check me out</label>
                </div>
                <button type="submit" class="btn btn-secondary btn-block" name="Submit">Login</button>
              </form>
              <a href="http://">forgot password ?</a>
            </div>
            <div class="modal-footer">
              <p class="mr-auto">New User? <a href="#signup" data-toggle="modal" data-dismiss="modal" >signup</a></p>
              <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
            </div>
          </div>
        </div>
      </div>
    <!--Login trigger Model ends-->
    <!--Signup model start-->
    <div class="modal fade" id="signup">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">

            <div class="modal-header">
              <h5 class="modal-title">Sign Up</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="signup_script.php" method="post">
                <div class="form-group">
                     <label for="email">Email address:</label>
                     <input type="email" class="form-control"  name="eMail" placeholder="Enter email" required>
                     <?php if(isset($_GET['error'])){ echo "<span class='text-danger'>".$_GET['error']."</span>" ;}  ?>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validation1">First Name</label>
                        <input type="text" class="form-control" id="validation1" name="firstName" placeholder="First Name" required>
                    </div>
                    <div class="form-group col-md -6">
                        <label for="validation2">Last Name</label>
                        <input type="text" class="form-control" id="validation2" name="lastName" placeholder="Last Name">
                    </div>
                </div>
                
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" required>
                    <label for="checkbox" class="form-check-label">Agree terms and Condition</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="Submit">Sign Up</button>
              </form>
            </div>
            <div class="modal-footer">
              <p class="mr-auto">Already Registered?<a href="#login"  data-toggle="modal" data-dismiss="modal">Login</a></p>
              <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
            </div>
          </div>
        </div>
      </div>
      <!--Signup trigger model ends-->


