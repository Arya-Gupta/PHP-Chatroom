<?php

$roomname=$_POST['roomname'];

if(strlen($roomname)>20 || strlen($roomname)<3 )
{
    echo '
    <script language="javascript">
        alert("Please enter a room name between 3 and 20 characters");
        window.location="http://localhost/php-chatroom/index.php";
    </script>
    ';
}

else if(!ctype_alnum($roomname))
{
    echo '
    <script language="javascript">
        alert("Room name can only be alphanumeric");
        window.location="http://localhost/php-chatroom/index.php";
    </script>
    ';
}

else
{
    include 'partials/_dbconnect.php';
}

$sql="SELECT * FROM `rooms` WHERE roomname='$roomname'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    echo '
    <script language="javascript">
        alert("Room name already exists!");
        window.location="http://localhost/php-chatroom/index.php";
    </script>
    ';
}

else
{
    $sql="INSERT INTO `rooms` (`roomname`, `created`) VALUES ('$roomname', current_timestamp());";
    $result=mysqli_query($conn,$sql);
    echo '
    <script language="javascript">
        window.location="http://localhost/php-chatroom/chat.php?roomname='. $roomname .'";
    </script>
    ';
}

?>
