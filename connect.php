<?php
//connect to database
$conn = new mysqli("localhost","root","","Adventour");
if($conn ->connect_error){
    die("error ". $conn ->connect_error) ;
}

?>