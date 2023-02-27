<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imges/Adventour.png">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Adventour</title>
</head>
<body>
<!-- ........................start navebar................... -->
<nav>
  <input id="nav-toggle" type="checkbox">
  <div class="Adventour"><img src="imges/Adventour.png" alt="" id="img-logo"></div>
  <ul class="Adventour1">
      <li><a href="home.html"> <i class="fas fa-house-user"></i> Home</a></li>
      <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
      <li><a href="About.html"><i class="fas fa-address-card"></i> About us</a></li>
      <li><a href="blog.html"> <i class="fas fa-box"></i> blog</a></li>
      <li><a href="Contact us.html"><i class="fas fa-id-card-alt"></i>Contact us</a></li>
  </ul>
</nav>
<!-- ........................end navebar................... -->
<!-- ....................start login form ................... -->
<br>
<section class="sec-login">
<div class="container">
<div class="row">
<div class="col-lg-12 col-sm-12 col-md-12">
<div class="login">
    <div class="title">
      Login </div>
<form action="SignIn.php"  method="POST">
      <div class="login1">
        <input type="text" name ="email" required>
        <label>Email Address</label>
      </div>
<div class="login1">
       
  <input type="password" name="password" required>
    <label>Password</label>
</div>
<div class="login1">
  <input type="submit" value="Login">
</div>
</form>
</div>
</div>
</div>
<br>
<div class="btn">
        <a href="Signup.php" style="color:#fff" >sign up</a>
      </div>
    </div>
</section>
<!-- ................................... end login form ........................ -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<?php 
session_start();
if(isset($_SESSION["error"])){
  $error = $_SESSION['error'];
  echo "<script>alert('$error');</script>";
  session_unset();
  echo "<html><script> alert($error); </script></html>";
}
?>
</body>
</html>
