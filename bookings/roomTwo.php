<?php
$conn = new mysqli('localhost', 'root', '', 'nti');
          $sql = "SELECT * FROM room2 ORDER BY startTime ASC";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
            echo '<p>'.$row['name'].' '.$row['bookedTime'].'</p>';
          }
 ?>
