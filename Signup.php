<?php 
session_start();
if(isset($_SESSION["error"])){//check if error was saved
  $error = $_SESSION['error'];
  echo "<script>alert('$error');</script>";//display dialogue with error Message 
  session_unset(); // delete error message 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imges/Adventour.png">
    <link rel="stylesheet" href="css/Signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Adventour</title>
</head>
<body>
    <section class="sec-Signup">
        <div class="container">
        <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
        <div class="Signup">
            <div class="title">
                Signup </div>
        <form action="Register.php" method="POST">
              <div class="Signup1">
                <input type="email" name="email" required>
                <label>Email Address</label>
              </div>
              <br>
        <div class="Signup1">
                <input type="password" name="password" required>
                <label>Password</label>
              </div>
              <br>
              <div class="Signup1">
                <input type="text"  name="name" required>
                <label>full name </label>
              </div>
              <br>
              <div class="Signup1">
                <input type="number" name="phone" required>
                <label>phone number </label>
              </div>
          <br>
          <label id="label">date of birth</label>
          <div class="Signup1">
          <input type="date" name="checkout-date" placeholder="YYYY-MM-DD " id = "chekout-date" required 
                pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
                title="Enter a date in this format YYYY-MM-DD and The check out date must be after the checkin date"/>
          </div>
        <div class="Signup1">
                <input type="submit" value="Signup">
              </div>

        </form>

        <div class="btn">
                <a href="home.html" style="color:#fff" >Home</a>
              </div>
          <br>
      </div>
        </div>
        </div>
        </section>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
