<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imges/Adventour.png">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/custombook.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Adventour</title>
</head>
<body>
<nav>
    <input id="nav-toggle" type="checkbox">
    <div class="Adventour"><img src="imges/Adventour.png" alt="" id="img-logo" style="width:180px;height:120px;"></div>
    <ul class="Adventour1">
        <li><a href="home's.html"> <i class="fas fa-house-user"></i> Home</a></li>
        <li><a href="booking.php"><i class="fas fa-border-all"></i>Vacation programs</a></li>
        <li><a href="Contact us.html"><i class="fas fa-id-card-alt"></i>Contact us</a></li> 
        <li><a href="home.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>            
    </ul>    
</nav>
              <!-- ------------------------Drop Down List---------------------------------- -->        
<form  action="customphp.php" name="form1" id="form1" method ="POST" >
<h1 id="h" >Custom Book</h1>
<br><br>  
<h3 id="hdes" >Destination:</h3>
 <select name="des" id="ddl"  required >
<option value=""> select Destination</option>
<option value="1" name="check"  > Petra : 50$ </option>
<option value="2" name="check"  > Aqaba : 60$</option>
<option value="3" name="check"  > Dead sea : 70$</option>
 </select>
<h3 id="htr" >Transportation: </h3> 
<select name="tr" id="ddl" required >
   <option value="" name="check" >Select Transportation</option> 
   <option value="4" name="check" > Bus : 10$</option>
   <option value="5" name="check" > Car : 15$</option>
</select>
<h3 id="hhot" >Hotel :</h3>
<select name="hot" id="ddl" required >
 <option value="" > select Hotel</option>
 <option value="6" name="check" > Ayla :     50$</option>
 <option value="7" name="check" > LandMark : 70$</option>
 <option value="8" name="check" >Movenpick : 40$ </option>
  </select>
  <br><br>
</form>
           <!-------------------------Bottom Page ------------------------->
<form  action="customphp.php" name="form1"  method ="POST">
    <div class="bottom">
         <label for = "checkin-date" id="in-date">Check In Date: </label>
            <input id = "chekin-date" type="date" name="checkin-date"  required min="2023-02-12" max="2024-02-12" />
                <label for = "checkout-date" id="lbl" >Check Out Date: </label> 
            <input id = "checkin-date1" type="date" name="checkout-date"  required min="2023-02-13" max="2024-03-12"/>
                <label for = "num_pepole" id="lbl" >Number of people: </label>
                <input type = "number" min = "1" value = "1" id = "num_pepole" name = "num_pepole" require>
     </div>
           <div>
                <input  type="submit" value="Book" name="check" id="submit" action="customphp.php"  >
           </div>
            
</form>
</body>
</html>