<!DOCTYPE html>

<?php
session_start();



include("connection.php");

if(!isset($_SESSION['user_email'])){
  header("location: signin.php");
}
else {
  ?>
<html>
<head>    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Chat Application using PHP Ajax Jquery</title>  
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
  
</head>
<body>
<div class="col-md-2 col-sm-3">
          <input type="hidden" id="is_active_group_chat_window" value="no" />
          <button type="button" name="group_chat" id="group_chat" class="btn btn-warning btn-xs">Group Chat</button>
        </div>
        <div class="col-md-2 col-sm-3">
          <p align="right">Hi - <?php echo $_SESSION['username']; ?> - <a href="logout.php">Logout</a></p>
        </div>
      </div>
      <div class="table-responsive">
        
        <div id="user_details"></div>
        <div id="user_model_details"></div>
      </div>
      <br />
      <br />
      
    </div>
    
</body>
</html>
<script type="text/javascript">
$('#group_chat_dialog').dialog({
    autoOpen:false,
    width:400
  });

  $('#group_chat').click(function(){
    $('#group_chat_dialog').dialog('open');
    $('#is_active_group_chat_window').val('yes');
    fetch_group_chat_history();
  });

  $('#send_group_chat').click(function(){
    var chat_message = $.trim($('#group_chat_message').html());
    var action = 'insert_data';
    if(chat_message != '')
    {
      $.ajax({
        url:"group_chat.php",
        method:"POST",
        data:{chat_message:chat_message, action:action},
        success:function(data){
          $('#group_chat_message').html('');
          $('#group_chat_history').html(data);
        }
      })
    }
    else
    {
      alert('Type something');
    }
  });

  function fetch_group_chat_history()
  {
    var group_chat_dialog_active = $('#is_active_group_chat_window').val();
    var action = "fetch_data";
    if(group_chat_dialog_active == 'yes')
    {
      $.ajax({
        url:"group_chat.php",
        method:"POST",
        data:{action:action},
        success:function(data)
        {
          $('#group_chat_history').html(data);
        }
      })
    }
  }

  $('#uploadFile').on('change', function(){
    $('#uploadImage').ajaxSubmit({
      target: "#group_chat_message",
      resetForm: true
    });
  });

  $(document).on('click', '.remove_chat', function(){
    var chat_message_id = $(this).attr('id');
    if(confirm("Are you sure you want to remove this chat?"))
    {
      $.ajax({
        url:"remove_chat.php",
        method:"POST",
        data:{chat_message_id:chat_message_id},
        success:function(data)
        {
          update_chat_history_data();
        }
      })
    }
  });
  </script>
  <?php } ?>