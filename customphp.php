<?php
include "connect.php";
session_start();
//get data from booking.php
$email  = $_SESSION['email'];
$checkin = $_POST['checkin-date'];
$checkout = $_POST['checkout-date'];
$num_pepole = $_POST['num_pepole'];
$des =$_POST['des'];
$tr = $_POST['tr'];
$hot = $_POST['hot'];
$priceD =0;
$priceT =0;
$priceH =0;
$destination="";
if(isset($_POST['check'])){ //check if the checkbox was checked
    $Book= $_POST['check'];
 //get data by id 
    $des = $_POST['des'];
    if($des=="Petra")
    {
        $destination ="Petra";
        $priceD =50;  
    }else if($des=="Aqaba"){  
        $destination ="Aqaba";
        $priceD= 60;  
    }else if($des=="Dead sea"){ 
        $destination ="Dead sea";
        $priceD= 70;   
    }
    $tr = $_POST['tr'];
    if($tr=="Bus"){ 
        $priceT= 10;  
    }else if($tr=="Car"){        
        $priceT= 15;    
    }
    $hot = $_POST['hot'];
    if($hot=="Ayla")
    {
        $priceH =50;  
    }else if($hot=="LandMark"){
        $priceH= 70;  
    }else if($hot=="Movenpick"){  
        $priceH= 40;  
    }
    $newDate1 = date("Y-m-d", strtotime($checkin)); //reformat date
    $newDate2 = date("Y-m-d", strtotime($checkout));
    $diff = strtotime($checkout) - strtotime($checkin); //calculate Different Between two date
   
 if($diff<0){//if check out date less than check in date will go back to booking page

   echo "<script>alert('The check out date is not correct it\'s should be greter than checkin date ');window.location.href='custombook.php';</script>";//error 
 }
    $years = floor($diff / (365*60*60*24)); //deferance in years
// To get the month, subtract it with years and
// divide the resultant date into
// total seconds in a month (30*60*60*24)
$months = floor(($diff - $years * 365*60*60*24)
                               / (30*60*60*24)); 
    $days = floor(($diff - $years * 365*60*60*24 - 
             $months*30*60*60*24)/ (60*60*24));
    $total = $days *  $num_pepole * ($priceD + $priceT+$priceH ) ; // get total 
    echo "<script>if(!confirm('The cost of your reservation is ( $total$ ) , the number of days of the reservation ( $days days ) ,Confirm it?'))window.location.href='customBook.php';</script>";//ask user if want to accept the booking after show the total if not will go back to booking page
$sql = " INSERT INTO `Booking`(`user_email`,`destination`,`check_in`,`check_out`,`num_pepole`,`des_value`,`tr_value`,`ht_value`,`total`,`state`) VALUES ('$email','$destination','$newDate1','$newDate2','$num_pepole','$des','$tr','$hot','$total','Processing')";
if($conn ->query($sql)== TRUE){
    //if data inserted will show message then back to the same page
    echo "<script>alert('Your Booking is done');window.location.href='custombook.php';</script>";
}else{
  //  echo "Error: ". $sql ."<br>". $conn ->error;
    echo "<script>alert('Something wrong');window.location.href='custombook.php';</script>";//error with database
} }else{echo "<script>alert('Please check one of the checkbox');window.location.href='custombook.php';</script>";} ?>