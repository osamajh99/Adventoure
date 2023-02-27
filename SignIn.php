<?php
include 'connect.php';//connect to database
session_start();
$email  =  $_POST['email'];
$password =sha1($_POST['password']);//تشفير الباسورد
$haveAccount = "SELECT * FROM `User` WHERE email ='$email' AND password ='$password' " ;//get user data from data base


$result = $conn->query($haveAccount);
if($result){
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
           
            session_unset();
            $_SESSION["email"] = $email;
            if($row["type"] == "user"){//check user type is admin or not
                header("location:home's.html");//user
            }else{
                header("location:AdminDashboard.php");//admin
            }
           
          
        }
        
    }else{
        
        $_SESSION["error"] = "Email or password is not correct";//save error message in session 
 
    header("location:login.php");//go back to log in 
    
    }
}else{
    echo "error" .  $haveAccount . $conn ->$error;//error in data base 
}
?>