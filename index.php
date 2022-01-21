<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Chatroom</title>
  <?php include 'partials/_header.php'; ?>
</head>

<body>
  <section id="hero">
    <div>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url(https://wallpaper.dog/large/5486500.png); filter: brightness(150%);">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown text-dark">Welcome to <span>PHP Chatroom</span></h2>
              <p class="animate__animated animate__fadeInUp text-dark">Enjoy our free chatting service, 24x7! Create a room and start chatting with your friends now.</p>
              <form action="claim.php" class="animate__animated animate__fadeInUp scrollto" method="post">
                <span class="text-dark">php-chatroom.com/</span>
                <input type="text" name="roomname" id="roomname">
                <button  class="btn btn-danger text-dark btn-sm" style="filter: brightness(70%);">Create Room</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include 'partials/_footer.php'; ?>
</body>
</html>