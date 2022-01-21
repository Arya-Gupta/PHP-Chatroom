<?php

include 'partials/_dbconnect.php';
$message=$_POST['message'];
$room=$_POST['room'];
$username=$_POST['username'];

$sql="INSERT INTO `messages` (`msg`, `roomname`, `name`, `created`) VALUES ('$message', '$room', '$username', current_timestamp())";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);

?>