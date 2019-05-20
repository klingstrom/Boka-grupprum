<?php
header('Content-type: text/plain; charset=utf-8');
session_start();
$_SESSION['message'] = "";
$conn = new mysqli('localhost', 'root', '', 'nti');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $surname = mysqli_real_escape_string($conn, $_POST['surname']);
  $sodkod = mysqli_real_escape_string($conn, $_POST['sodkod']);
  $room = mysqli_real_escape_string($conn, $_POST['room']);
  $startTime = mysqli_real_escape_string($conn, $_POST['time']);


  $sql = "SELECT * FROM users WHERE sodkod='$sodkod' && surname='$surname'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck < 1) {
    echo "1001";
  }//IF USER DONT EXIST
   else {
        if ($row = mysqli_fetch_assoc($result)) {
      if ($sodkod !== $row['sodkod']) {
        echo "1001";
      }//IF WRONG SODKOD
       elseif ($sodkod == $row['sodkod']) {
        $date = date("Y/m/d");
        $week = date('W');
        $sodkod = $row['sodkod'];
        $name = $row['firstname'];


        if ($week !== $row['week']) {
            $sql = "UPDATE users SET oneDayDate='$date', week='$week', onedayBookings='0', weekBookings='0' WHERE sodkod='$sodkod'";
            mysqli_query($conn, $sql);//ändrar till nuvarande vecka om en ny vecka har påbörjats
            mysqli_close($conn);
          }
          elseif ($date !== $row['oneDayDate']) {
            $sql = "UPDATE users SET oneDayDate='$date', onedayBookings='0' WHERE sodkod='$sodkod'";
            mysqli_query($conn, $sql);//ändrar till nuvarande dag om en ny dag har påbörjats
            mysqli_close($conn);
          }





$conn = new mysqli('localhost', 'root', '', 'nti');

  $selectSql = "SELECT * FROM users WHERE sodkod='$sodkod' && surname='$surname'";
  $selectResult = mysqli_query($conn, $selectSql);
  $selectRow = mysqli_fetch_assoc($selectResult);

  $weekBookings = $selectRow['weekBookings'];
  $dayBookings = $selectRow['onedayBookings'];


  $sqlTime = "SELECT * FROM $room WHERE startTime='$startTime'";
  $r = mysqli_query($conn, $sqlTime);
  $resultTime = mysqli_num_rows($r);

  if ($resultTime > 0) {
    echo "1002";
  } else {
    if ($weekBookings == 5) {
      echo "1003";
    } elseif ($dayBookings == 2) {
      echo "1004";
    } else {
      $timeAdd = $startTime + 1;
      $oneDayCalc = $dayBookings + 1;
      $weekCalc = $weekBookings + 1;

      $timeCalc = "$startTime:00 - $timeAdd:00";
      $sqlInsert = "INSERT INTO $room (name, bookedTime, startTime, todaysDate) VALUES ('$name', '$timeCalc', '$startTime', '$date');";
      mysqli_query($conn, $sqlInsert);
      $sqlUpdate = "UPDATE users SET onedayBookings='$oneDayCalc', weekBookings='$weekCalc' WHERE sodkod='$sodkod'";
      mysqli_query($conn, $sqlUpdate);
      echo "1000";
    }
  }



      }//elseif
    }//FETCHING ROWS
  }//ELSE

}//SERVER REQUEST
 ?>
