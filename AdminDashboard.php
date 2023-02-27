<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
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
      
        <li><a href="allMessages.php"><i class="fas fa-id-card-alt"></i>all Messages</a></li>
        <li><a href="home.html"  onclick="<?php session_unset(); ?>"> <i class="fas fa-sign-in-alt"></i> Logout</a></li>
        </ul>
</nav>
<!-- ........................end navebar................... -->
  <?php
  //get all Booking data from database and display them
include 'connect.php';
$sql = "SELECT * FROM `Booking` " ;
$all ="<div>";

$result = $conn->query($sql);
if($result){
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $email = $row['user_email'];
       $all = $all."<div style='left: 50%;
       transform: translate(50%, 20%);
       width: 90%;
       max-width: 600PX;
       background:   rgba(26, 131, 145, 0.8);
       padding: 50px 50px 50px 50px;
       border-radius: 5px;
       box-shadow: 1px 1px 10px rgba(0,0,0,0.3);
       color: #fff;'>
     <form method ='POST' action='process.php'> 
       <i class='fas fa-envelope-open' style='color:white'> ".$row['user_email']."<button type='submit' name='view' value='$email'>View User Data</button></i><br><br>
       <i class='fas fa-map-marker' style='color:white'> ".$row['destination']." </i><br><br>
       <i class='fas fa-calendar-alt'  style='color:white'> ".$row['check_in'] ."</i> <b> To  </b>   
       <i class='fas fa-calendar-day'  style='color:white'> ".$row['check_out'] ."</i><br><br>
       <i class='fas fa-user'  style='color:white'> number of pepole: ".$row['num_pepole'] ."</i><br><br>
       <i class='fas fa-money-bill'  style='color:white'> Total: ".$row['total'] ."$</i><br><br>
       <i   style='color:white'> state: ".$row['state']."<button type='submit' name='edit' value='".$row['id']."'>Edit State</button></i><br><br>
       <i   style='color:white'> Decline Booking<button type='submit' name='delet' value='".$row['id']."'>delet</button></i><br><br>
       <input type='hidden' name='state' value='".$row['state']."'>
       </form>
       </div> <br>";    
        }
       
     
    }else{  
    echo "no data ";

    }
    echo  $all."</div> " ;//display data
}else{
      echo "error" . $s1l . $conn->$error;
}

?>
   


</body>
</html>
