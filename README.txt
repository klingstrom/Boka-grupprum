USAGE...

ONE DEVICE NEEDS TO BE ACTIVE 24/7 AND RUNNIG PAGE UPDATE.PHP THIS PAGE WILL AUTOMATICALLY
UPDATE AND EMPTY ALL THE BOOKINGS FROM EACH ROOMS DATABSE TABLE AT 00:00 EVERY DAY.

<---------------------------------------------------------------------------------------->


//TO CREATE A NEW WRAPPER WITH TWO NEW ROOMS PASTE THIS CODE IN TO INDEX.PHP
FIND COMMENT (<!--TO CREATE NEW ROOM PASTE CODE HERE-->)

<!--THIRD WRAPPER-->
    <div class="wrapper">
      <!--roomFive container-->
      <div id="roomFive">
        <div class="container" align="center">
          <h2 style="text-align:center; padding-top:.5em;">Grupprum 3</h2>
            <div class="booked" id="bookedFive">
              <?php include 'bookings/roomFive.php'; ?>
            </div>
          <button id="room5" class="button" type="button" name="button">BOKA</button>
        </div>
      </div>
      <!--roomSix container-->
      <div id="roomSix">
        <div class="container" align="center">
          <h2 style="text-align:center; padding-top:.5em;">Grupprum 4</h2>
            <div class="booked" id="bookedSix">
              <?php include 'bookings/roomSix.php'; ?>
            </div>
          <button id="room6" class="button" type="button" name="button">BOKA</button>
        </div>
      </div>
    </div>


<---------------------------------------------------------------------------------------->
PASTE THIS CODE INTO ./css/style.css

PASTE THIS CODE AT COMMENT /*PASTE FIRST CSS CODE HERE*/
#roomFive {
  width: 50%;
  height: 100%;
  background-image: url(IMAGEURL);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  float: left;
  transition: all 1.3s;
  transition-property: all;
}
#roomSix {
  width: 50%;
  height: 100%;
  background-image: url(IMAGEURL);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  float: right;
  transition: all 1.3s;
  transition-property: all;
}



PASTE THIS CODE AT COMMENT /*PASTE SECOND CSS CODE HERE*/
#roomFive {
  width: 100%;
  height: 50%;
  background-image: url(IMAGEURL);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  float: right;
  transition: all 1.3s;
  transition-property: all;
}
#roomSix {
  width: 100%;
  height: 50%;
  background-image: url(IMAGEURL);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  float: left;
  transition: all 1.3s;
  transition-property: all;
}



<----------------------------------------------------------------------------------------->
//NEXT STEP IS TO PASTE THE FOLLOWING CODE IN TO ./js/app.js¨
FIND COMMENT (//PASTE JS CODE FOR NEW ROOMS HERE)

$(document).ready(function(){
  setInterval(function(){
      $("#bookedFive").load('bookings/roomFive.php')
  }, 1000);
});

$(document).ready(function(){
  setInterval(function(){
      $("#bookedSix").load('bookings/roomSix.php')
  }, 1000);
});




<----------------------------------------------------------------------------------------->
//IN THE FOLDER "bookings" CREATE TWO NEW FILES NAMED "roomFive.php" AND "roomSix.php"

!!!ALERT!!! REMEMBER TO CHANGE 'servername', 'username' AND 'password'.

PASTE THIS CODE INTO roomFive.php

<?php
$conn = new mysqli('servername', 'username', 'password', 'nti');
          $sql = "SELECT * FROM room5 ORDER BY startTime ASC";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
            echo '<p>'.$row['name'].' '.$row['bookedTime'].'</p>';
          }
 ?>



PASTE THIS CODE INTO roomSix.php

<?php
$conn = new mysqli('servername', 'username', 'password', 'nti');
          $sql = "SELECT * FROM room6 ORDER BY startTime ASC";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
            echo '<p>'.$row['name'].' '.$row['bookedTime'].'</p>';
          }
 ?>


<----------------------------------------------------------------------------------------->
//THE LAST STEP IS TO CREATE NEW DATABSE TABLES USING THIS SQL COMMAND

CREATE TABLE nti.room5 
(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    bookedTime VARCHAR(100) NOT NULL,
    startTime int(100) NOT NULL,
    todaysDate` varchar(100) NOT NULL
,
PRIMARY KEY (id) 
);



CREATE TABLE nti.room6 
(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    bookedTime VARCHAR(100) NOT NULL,
    startTime int(100) NOT NULL,
    todaysDate` varchar(100) NOT NULL
,
PRIMARY KEY (id) 
);
