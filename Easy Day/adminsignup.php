<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Admin Sign Up</title>
  <link rel="stylesheet" href="Signup02.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <div class="form">
    <form action="adminsignuphandler.php" method="post">
      <h1>Admin Sign Up</h1>
      <input type="text" name="name" placeholder="Name" required />
      <input type="text" name="email" placeholder="Email" required />
      <input type="password" name="password" id="password" placeholder="Password" minlength="8" required />
      <input type="password" name=" " id="Cpassword" placeholder="Confrim Password" minlength="8" required />
      <button class="btn1" name="btnSubmit" type="submit">Sign Up</button>
    </form>
    <p>Already have an admin account? <a href="adminlogin.php">Log in</a></p>
  </div>
</body>

</html>