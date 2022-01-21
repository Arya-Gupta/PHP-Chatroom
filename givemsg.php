<?php

include 'partials/_dbconnect.php';
$room=$_POST['room'];
$sql="SELECT * FROM `messages` WHERE roomname='$room'";
$result=mysqli_query($conn,$sql);
// echo mysqli_error($conn);
$chatmsg="";

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        $chatmsg.='
            <div class="testimonial-item mt-4">
              <h3>'. $row['name'] .'</h3>
              <h4>'. substr($row['created'],11) .'</h4>
              <p>'. $row['msg'] .'</p>
            </div>
        ';
    }
    echo $chatmsg;
}

?>