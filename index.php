<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="icon" href="img/nti.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>Boka Grupprum</title>
  </head>
  <body>

    <div id="succes">

    </div>

<!--FIRST WRAPPER-->
    <div class="wrapper">
      <!--roomOne container-->
      <div id="roomOne">
        <div class="container" align="center">
          <h2 style="text-align:center; padding-top:.5em;">Grupprum 1</h2>
            <div class="booked" id="bookedOne">
              <?php include 'bookings/roomOne.php'; ?>
            </div>
          <button id="room1" class="button" type="button" name="button">BOKA</button>
        </div>
      </div>
      <!--roomTwo container-->
      <div id="roomTwo">
        <div class="container" align="center">
          <h2 style="text-align:center; padding-top:.5em;">Grupprum 2</h2>
            <div class="booked" id="bookedTwo">
              <?php include 'bookings/roomTwo.php'; ?>
            </div>
          <button id="room2" class="button" type="button" name="button">BOKA</button>
        </div>
      </div>
    </div>


<!--SECOND WRAPPER-->
    <div class="wrapper">
      <!--roomThree container-->
      <div id="roomThree">
        <div class="container" align="center">
          <h2 style="text-align:center; padding-top:.5em;">Grupprum 3</h2>
            <div class="booked" id="bookedThree">
              <?php include 'bookings/roomThree.php'; ?>
            </div>
          <button id="room3" class="button" type="button" name="button">BOKA</button>
        </div>
      </div>
      <!--roomFour container-->
      <div id="roomFour">
        <div class="container" align="center">
          <h2 style="text-align:center; padding-top:.5em;">Grupprum 4</h2>
            <div class="booked" id="bookedFour">
              <?php include 'bookings/roomFour.php'; ?>
            </div>
          <button id="room4" class="button" type="button" name="button">BOKA</button>
        </div>
      </div>
    </div>

    <!--TO CREATE NEW ROOM PASTE CODE HERE-->



<!--INVISIBLE CONTAINERS-->
<div class="overlay"></div>

<!--SIDEBAR-->
<div class="slide" align="center">
  <i id="close" class="fas fa-times"></i>
  <div class="card"> <img src="img/card.png" alt=""> </div>
  <div class="slideContent" align="center">
    <h2 id="roomText"></h2>
    <form class="frmBox" action="php/book.php" method="POST">
        <input id="room" type="hidden" name="room" value="">
        <input id="surname" type="text" name="surname" placeholder="Efternamn" required>
      <br><br>
        <input id="sodkod" type="text" name="sodkod" placeholder="SOD4563" required>
      <br><br>
        <select name="time" required>
          <option value="8">8:00 - 9:00</option>
          <option value="9">9:00 - 10:00</option>
          <option value="10">10:00 - 11:00</option>
          <option value="11">11:00 - 12:00</option>
          <option value="12">12:00 - 13:00</option>
          <option value="13">13:00 - 14:00</option>
          <option value="14">14:00 - 15:00</option>
          <option value="15">15:00 - 16:00</option>
          <option value="16">16:00 - 17:00</option>
          <option value="17">17:00 - 18:00</option>
        </select>
      <br><br>
      <input type="submit" name="submit" value="BOKA">
    </form>
    <br>
    <p id="error" style="color:red;"></p>
  </div>
</div>




    <script src="js/book.js" charset="utf-8"></script>
    <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
