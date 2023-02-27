<?php 
include "connect.php";
session_start();
//get data from booking.php
$email  = $_SESSION['email'];
$program_id="";
$checkin = $_POST['checkin-date'];
$num_pepole = $_POST['num_pepole'];
$price =0;
$destination="";
if(isset($_POST['check'])){ //check if the checkbox was checked
    $program_id= $_POST['check'];
 //get data by id 
    if($program_id=="1"){

        $destination ="Petra , WadiRum";
        $price =250;
     
        
    }else if($program_id=="2"){
        
        $destination ="Amman";
        $price= 100;
        
    }else if($program_id=="3"){
        
        $destination ="Dead sea";
        $price= 200;
        
    }else if($program_id=="4"){
        
        $destination ="Jerash , Ajloun , Um qais";
        $price= 150;
       
    }
    $newDate1 = date("Y-m-d", strtotime($checkin)); //reformat date
    
    $total =  $price  * $num_pepole; // get total 
    
    echo "<script>if(!confirm('The cost of your reservation is ( $total$ ) , the number of pepole ( $num_pepole pepoles ) ,Confirm it?'))window.location.href='booking.php';</script>";//ask user if want to accept the booking after show the total if not will go back to booking page

$sql = "INSERT INTO `Booking`( `user_email`, `destination`,`check_in`, `num_pepole`, `total`,`state`) VALUES ('$email','$destination','$newDate1',$num_pepole,$total,'Processing')";
if($conn ->query($sql)== TRUE){
    //if data inserted will show message then back to the same page
    echo "<script>alert('Your Booking is done');window.location.href='booking.php';</script>";
 
}else{
  //  echo "Error: ". $sql ."<br>". $conn ->error;
    echo "<script>alert('Something wrong');window.location.href='booking.php';</script>";//error with database

 
}
     
}else{
    echo "<script>alert('Please check one of the checkbox');window.location.href='booking.php';</script>";

}
