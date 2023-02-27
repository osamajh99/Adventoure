<?php
include 'connect.php'; //connect database

//get data from form
$email  = $_POST['email'];
$name =$_POST['name'];
$phone =$_POST["phone"];
$message =$_POST['message'];

//insert data to database
$sql = "INSERT INTO `Message`(`email`, `name`, `phone`, `message`) VALUES ('$email','$name',$phone,'$message')";
if($conn ->query($sql)== TRUE){
    //if data inserted will show message then back to the same bage
    echo "<script>alert('Thank you for contacting the support team. We will contact you as soon as possible.');window.location.href='Contact us.html';</script>";
 
}else{
    echo "<script>alert('Something worng!.');window.location.href='Contact us.html';</script>";

 
}    

?>