<?php
 include 'auth/connection.php';
 $conn= connect();


$name = $_GET['name'];
// echo $name;

$result = mysqli_query($conn, "DELETE FROM registration WHERE name='$name'");


header("Location:index.php");
?>