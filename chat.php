<!DOCTYPE html>
<html lang="en">

<head>
  <title>Chat</title>
  <?php include 'partials/_header.php'; ?>
</head>

<body>
  <?php
  $roomname=$_GET['roomname'];
  include 'partials/_dbconnect.php';
  $sql="SELECT * FROM `rooms` WHERE roomname='$roomname'";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
    if(mysqli_num_rows($result)==0)
    {
      echo '
      <script language="javascript">
          alert("This room does not exist. Try creating a new room!");
          window.location="http://localhost/php-chatroom/index.php";
      </script>
      ';
    }
    else 
    {
      echo '
      <script language="javascript">
        let username = window.prompt("Enter your name:");
      </script>
      ';
    }
  }
  else
  {
    echo 'Error!';
  }
  ?>

  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Chat</h2>
        </div>
      </div>
    </section>

    <section id="testimonials" class="testimonials">
      <div class="container allmsg" style="min-height: 600px;">

      </div>

      <div class="container" style="text-align: center;">
        <form class="mt-5" action="" method="post">
            <input type="text" name="user_msg" id="user_msg" style="width: 80%; border: 1px solid black; border-radius: 5px; height: 40px;">
            <button class="btn btn-danger mb-1" id="submit_msg" style="width: 5%; padding: 8px;">Send</button>
        </form>
      </div>
    </section>

    <?php include 'partials/_footer.php'; ?>
  </main>

  <script>
    //check for new messages every 1 second
    setInterval(runFunction, 1000);
    function runFunction()
    {
      $.post("givemsg.php", {room: '<?php echo $roomname; ?>'},
      function(data, status)
      {
        document.getElementsByClassName("allmsg")[0].innerHTML=data;
      });
    }

    $("#submit_msg").click(function(){
      let msg=$("#user_msg").val(); 
      $.post("postmsg.php", {message: msg, room: '<?php echo $roomname; ?>', username: username},
      function(data,status)
      {
        // document.getElementsByClassName('allmsg')[0].innerHTML=data;
        $("#user_msg").val("");
      });
      return false;});
  </script>

</body>

</html>

