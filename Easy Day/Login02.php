<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Log in</title>
  <link rel="stylesheet" href="Signup02.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <nav>
    <div class="navdiv">
      <div class="logo">
        <a href="Home1.html"><img src="ed LOGO/New folder/logo_new_2ii-removebg-preview.png" /></a>
      </div>

      <ul>
        <li><a href="#">Branches</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#A2" id="A1">About</a></li>
        <button><a href="Signup02.php">Sign Up</a></button>
      </ul>
    </div>
  </nav>
  <div class="form">
    <form action="login02Handler.php" method="post">
      <h1>Log In with Easy Day</h1>
      <input type="text" name="Email" placeholder="Email" required />
      <input type="password" name="password" id="password" placeholder="Password" minlength="8" required />
      <button class="btn1" name="btnSubmit" type="submit">
        <a href="Home1.html"> Log In</a>
      </button>
    </form>
    <p>Forgot password? <a href="#">Change password</a></p>
    <p>Don't have an account? <a href="Signup02.php">Sign Up</a></p>
  </div>
  <br /><br /><br />
  <footer class="footer">
    <div class="container" id="A2">
      <div class="row">
        <div class="footer-col">
          <h4>Company</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Get Help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Upcomeing products</h4>
          <ul>
            <li><a href="#">Easy Day Furniture</a></li>
            <li><a href="#">Easy Day Electronics</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Social Media</h4>
          <div class="social-links">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="up">
      <a href="#A1"><i class="fa fa-angle-double-up"></i></a>
    </div>
  </footer>
</body>

</html>