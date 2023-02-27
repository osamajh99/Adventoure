<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imges/Adventour.png">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/Contact us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
     <title>Adventour</title>
</head>
<body>
   <!-- ........................start navebar................... -->
   <nav>
    <input id="nav-toggle" type="checkbox" >
    <div class="Adventour"><img src="imges/Adventour.png" alt="" id="img-logo"></div>
    <ul class="Adventour1">
      
        <li><a href="AdminDashboard.php"><i class="fas fa-id-card-alt"></i>Booking</a></li>
        <li><a href="home.html"  onclick="<?php
  session_unset();
   ?>"> <i class="fas fa-sign-in-alt"></i> Logout</a></li>  
    </ul>
    <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
</nav>
<!-- ........................end navebar................... -->
   <?php
include 'connect.php';
$sql = "SELECT * FROM `Message` " ;//get all messages from data base
$all ="<div>";

$result = $conn->query($sql);
if($result){
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
          
       $all = $all."<div style='left: 50%;
       transform: translate(50%, 20%);
       width: 90%;
       max-width: 600PX;
       background:   rgba(26, 131, 145, 0.8);
       padding: 50px 50px 50px 50px;
       border-radius: 5px;
       box-shadow: 1px 1px 10px rgba(0,0,0,0.3);
       color: #fff;'>
       <i class='fas fa-envelope-open' style='color:white'> ".$row['email']."</i><br><br>
       <i class='fas fa-user'  style='color:white'> ".$row['name'] ."</i><br><br>
       <i class='fas fa-phone-alt' style='color:white'> ". $row['phone']." </i><br><br>
       <i class='fas fa-comment'  style='color:white'>  ".$row['message'] ."</i> <b> To  </b>   
       </div>
       <br>";    
        }
    }else{
    echo "no data yet";
    }
    echo  $all."</div> " ;//display data
}else{
    echo "error" .  $s1l . $conn ->$error;
}
?>
</body>
</html>
