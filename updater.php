<?php
$conn = new mysqli('localhost', 'root', '', 'nti');

$sql = "TRUNCATE `room1`";
mysqli_query($conn, $sql);


$sql2 = "TRUNCATE `room2`";
mysqli_query($conn, $sql2);


$sql3 = "TRUNCATE `room3`";
mysqli_query($conn, $sql3);


$sql4 = "TRUNCATE `room4`";
mysqli_query($conn, $sql4);

 ?>
