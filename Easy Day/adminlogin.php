<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Admin Log in</title>
  <link rel="stylesheet" href="Signup02.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <div class="form">
    <form action="adminloginhandler.php" method="post">
      <h1>Admin Log In</h1>
      <input type="text" name="Email" placeholder="Email" required />
      <input type="password" name="password" id="password" placeholder="Password" minlength="8" required />
      <button class="btn1" name="btnSubmit" type="submit">
        <a href="Admin.php">Log In</a>
      </button>
    </form>
    <p>Forgot password? <a href="#">Change password</a></p>
  </div>
</body>

</html>