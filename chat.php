<?php 
  session_start();
  include_once "connection.php";
  
  if(!isset($_SESSION['user_email'])){
    header("location: sigin.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 

        $toUser = $_GET["toUser"];
          $sql = mysqli_query($con, "SELECT * FROM users WHERE user_id = $toUser");
          $row = mysqli_fetch_assoc($sql);
        ?>
        <a href="discussion.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="<?php echo $row['user_profile']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['user_name']?></span>
          <p><?php echo $row['log_in']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $toUser; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>

</body>
</html>
