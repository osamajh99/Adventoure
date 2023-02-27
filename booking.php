<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imges/Adventour.png">
    <link rel="stylesheet" href="css/home.css" >
    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>Adventour</title>
</head>
<body>
   <!-- ........................start navebar................... -->
<nav>
    <div class="Adventour">
       <img src="imges/Adventour.png" alt="" id="img-logo">
    </div>
    <ul class="Adventour1">
     <li><a href="home's.html"><i class="fas fa-house-user"></i> Home</a></li>
     <li><a href="CustomBook.php"><i class="fas fa-clipboard-list"></i>Custom Book</a></li>
     <li><a href="home.html" ><i class="fas fa-sign-in-alt"></i> Logout</a></li>
    </ul>
</nav>
<!-- ............................end navebar.......................... -->
<!-- ........................Start vication programe................... -->
<form action="bookingPhp.php" method ="POST" >
    <section class = "booking sec-width" id = "section1">
    <div class = "booking-container">
              <!-- ...............(  1  )......................... -->
        <article class="room">
            <div class = "room-image">
                <img src = "imges/petra1.jpg" alt = "image">
            </div>
            <div class = "room-text">
                <h3>Amman,Petra,WadiRum</h3>
                <ul>
                    <li>
                        <i class="fas fa-map-marker"></i>
                        Destination : Amman,Petra,WadiRum
                    </li>
                    <li>
                        <i class="fas fa-house-user"></i>
                        Hotel : Bubble Camp 
                    </li>
                    <li>
                        <i class="fas fa-car"></i>
                        Transportation : Big bus , Four Wheel Car
                    </li>
                </ul>
                <p>Discover Jordan's natural wonders and ancient history on a two-day tour of Petra and Wadi Rum. Travel from Amman to Petra and Wadi Rum in a state-of-the-art big bus that offers the best in comfort, while exploring the rock-cut architecture of Petra, and off-roading in Wadi Rum. Next, hit the best sights of southern Jordan in two days - perfect for those short on time. Discover Petra, a UNESCO World Heritage Site Discover the Wadi Rum desert and enjoy the view of the night sky. </p>
                <p class = "rate">
                    <span>250.00  <i class="fas fa-hand-holding-usd"></i>/</span> 
                      Selection
                    <input type="checkbox" name="check" value="1"  onclick="onlyOne(this)">
                </p>
                <button type = "button" class = "btn" ><a href="#book-form">book now</a></button>
            </div>
        </article>
               <!-- ..................(  2  )......................... -->
            <article class = "room">
                <div class = "room-image">
                    <img src = "imges/amman1.jpg" alt = " image">
                </div>
                <div class = "room-text">
                    <h3> Amman</h3>
                    <ul>
                        <li>
                        <li>
                        <i class="fas fa-map-marker"></i>
                        Destination : Amman
                    </li>
                    <li>
                        <i class="fas fa-house-user"></i>
                        Hotel : Four Seasons 
                    </li>
                    <li>
                        <i class="fas fa-car"></i>
                        Transportation:Private car with/without driver
                    </li>
                </ul>
                <p> See the highlights of ancient and modern Oman on this one and a half day private city tour.Travel to the local markets and upscale shopping malls in the modern city.</p>
                <p> See the area's top attractions located at the top of the hill.</p>
                <p> To finish off with a lunch of delicious 'mezze' (small plates) or lunch followed by a pampering Turkish bath experience.</p>
                    <p class = "rate">
                        <span>100.00  <i class="fas fa-hand-holding-usd"></i>/</span> Selection
                        <input type="checkbox" name="check" value="2"  onclick="onlyOne(this)">
                    </p>
                    <button type = "button" class = "btn" ><a href="#book-form">book now</a></button>
                </div>
            </article>
<section class = "booking sec-width" id = "section1">
    <div class = "booking-container">
            <!-- .........................(  3  )......................... -->
        <article class = "room">
            <div class = "room-image">
                <img src = "imges/deadsea1.jpg" alt = " image">
            </div>
            <div class = "room-text">          
                <ul>
                    <li>
                    <i class="fas fa-map-marker"></i>
                        Destination : Dead sea
                    </li>
                    <li>
                        <i class="fas fa-house-user"></i>
                        Hotel : Movenpick 
                    </li>
                    <li>
                        <i class="fas fa-car"></i>
                        Transportation: Small Bus
                    </li>
                </ul>
                <p> On this tour, you will be taken to the lowest point on earth, the Dead Sea where you can swim with zero swimming skills by basically floating. After that, return to the hotel and have lunch, and there will be a professional tour guide to take you around the hot water falls. Then your driver will be waiting for you to drive you to the drop off point . </p>
                <p class = "rate">
                    <span>$200.00  <i class="fas fa-hand-holding-usd"></i>/</span> Selection
                    <input type="checkbox" name="check" value ="3"  onclick="onlyOne(this)">
                </p>
                <button type = "button" class = "btn" ><a href="#book-form">book now</a></button>
            </div>
        </article>
           <!-- .........................(  4  )......................... -->
            <article class = "room">
                <div class = "room-image">
                    <img src = "imges/jarash.jpg" alt = " image">
                </div>
                <div class = "room-text">
                    <ul>
                        <li>
                        <i class="fas fa-map-marker"></i>
                        Destination : Jerash , Ajloun , Um qais
                    </li>
                    <li>
                        <i class="fas fa-house-user"></i>
                        Hotel : Marritt 
                    </li>
                    <li>
                        <i class="fas fa-car"></i>
                        Transportation:Private car with/without driver 
                    </li>
                </ul>
                <p> See some of the world's most impressive sights on this private 3-day tour of Jordan. Travel with your own chauffeur, including four nights of accommodation. Visit the ancient Roman ruins of Jerash, and go to the historic Ajloun Castle. , and camping in the woods of Dibeen in Ajloun, enjoying the northern atmosphere along the way.  </p>
                    <p class = "rate">
                        <span>$150.00  <i class="fas fa-hand-holding-usd"></i>/</span> Selection
                        <input type="checkbox" name="check"  value ="4"  onclick="onlyOne(this)">
                    </p>
                    <button type = "button" class = "btn" ><a href="#book-form">book now</a></button>
                </div>
            </article>
            <!-- .........................start form booking......................... -->
       <div class = "book" >
          <div class = "book-form" id="book-form">
          <div class = "form-item">
                <label for = "checkin-date">Check In Date: </label>
            <input id = "chekin-date" type="date" name="checkin-date"  required min="2023-02-12" max="2024-02-12" />
            </div>
            <div class = "form-item">
                <label for = "num_pepole">Number of people: </label>
                <input type = "number" min = "1" value = "1" id = "num_pepole" name = "num_pepole" require>
            </div>
            <div class = "form-item">
                <input type = "submit" class = "btn" value = "Book Now" >
             </div>
          </div>
        </div>
            <!-- .........................End form booking......................... -->
     </div>
</form>
<script> //check just one of the Checkbook 
function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
</script>
</body>
</html>