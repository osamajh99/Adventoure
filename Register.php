<?php
include 'connect.php';//connect to database
session_start();
//get data from form
$email  =  $_POST['email'];
$password =sha1($_POST['password']);//تشفير الباسورد
$name = $_POST['name'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$haveAccount = "SELECT * FROM `User` WHERE email ='$email'" ;//check if user have account
$result = $conn->query($haveAccount);
if($result){
    //back to sign up and save error message is session
    echo  $haveAccount."<br>".$result->num_rows;
    if ($result->num_rows > 0) {
        session_unset();
        $_SESSION["error"] = "This email already have account";
        header("location:Signup.php");  
    }else{
        //user don't have account so will create it
        $sql = "INSERT INTO `User`(`email`, `name`, `phone`, `password`, `dateOfBirth`,`type`) VALUES ('$email','$name',$phone,'$password','$date','user')";
if($conn ->query($sql)== TRUE){
    session_unset();
    $_SESSION["email"] = $email;
    header("location:booking.php"); // go to booking page when the insert Completed
    // echo "inserted";
}else{
    $_SESSION["error"] = "Something wrong ";
  //  header("location:Signup.php");
 echo "Error: ". $sql ."<br>". $conn ->error;
}  
    }
}else{
    echo "error" .  $haveAccount . $conn ->error;
}
?>