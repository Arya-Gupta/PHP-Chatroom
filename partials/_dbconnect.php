<?php
$servername="localhost";
$username="root";
$password="";
$database="php-chatroom";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    echo 'We are experiencing some difficulties. Please try again later.';
}
?>
