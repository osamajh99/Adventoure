<?php
include 'connect.php';
if(isset($_POST['view'])){ // view user
    $email = $_POST['view'];
    $user = "SELECT * FROM `User` WHERE email ='$email'" ;
    $result = $conn->query($user);
    if($result){
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $name = $row['name'];
                $phone = $row['phone'];
                $date = $row['dateOfBirth'];
                //Dialogue display user data then back to Admin Dashboard 
                echo "<script>alert('name: $name - email :$email - phone: $phone - date of birth: $date ');window.location.href='AdminDashboard.php';</script>";
          } }else{
             echo "<script>if(!confirm(' Sorry , user not found'));window.location.href='AdminDashboard.php';</script>";
        } }else{
        echo "error" .  $user . $conn ->$error;
    } }
if(isset($_POST['edit'])){// edit state 
    $id = $_POST['edit'];//id of booking
    $state = $_POST['state']; // state of booking
    $newState = ""; //new state
    if($state == "Processing"){ //accepetd the change
        echo "<script>if(!confirm('Do you wont to change stete from Processing to Accepted?'))window.location.href='AdminDashboard.php';</script>";
        $newState ="Accepted";
    }else{
        echo "<script>if(!confirm('Do you wont to change stete from Accepted to Processing ?'))window.location.href='AdminDashboard.php';</script>";
        $newState ="Processing";
    }
    $sql= "UPDATE `Booking` SET `state`='$newState' WHERE `id`= $id";
if ($conn->query($sql) === TRUE) {//update the data
    echo "<script>alert('The state updated successfully');window.location.href='AdminDashboard.php';</script>";
  } else {
    echo "Error updating record: " . $conn->$error;
  }}
 $id = $_POST['delet'];//id of booking
 $delet= "DELETE FROM booking WHERE `booking`.`id` = $id";
if ($conn->query($delet) === TRUE) {//update the data
    echo "<script>alert('The reservation has been successfully deleted');window.location.href='AdminDashboard.php';</script>";
  } else {echo "Error updating record: " . $conn->$error;}?>