$(document).ready(function(){
//   $("#send-btn").on("click", function(){
//       $value = $("#data").val();
//       $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
//       $(".form").append($msg);
//       $("#data").val('');
      
//       // start ajax code
//       $.ajax({
//         //   url: '/final-capstone-prototype/fb_webhook.php',

//           type: 'POST',
//           data: 'message=' + encodeURIComponent($value),
//           success: function(result){
//               console.log(result);
//               $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
//               $(".form").append($replay);
//               // when chat goes down the scroll bar automatically comes to the bottom
//               $(".form").scrollTop($(".form")[0].scrollHeight);
//           },
//           error: function(jqXHR, textStatus, errorThrown) {
//               console.log(textStatus, errorThrown);
//           }
        
//       });
//   });
        // uncomment the line above and comment the line below to use the webhook


    $("#send-btn").on("click", function(){
        $value = $("#data").val();
        $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
        $(".form").append($msg);
        $("#data").val('');
        
        // start ajax code
        $.ajax({
            url: 'message.php',
            type: 'POST',
            data: 'text='+$value,
            success: function(result){
                $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                $(".form").append($replay);
                // when chat goes down the scroll bar automatically comes to the bottom
                $(".form").scrollTop($(".form")[0].scrollHeight);
            }
        });
    });



  
  document.getElementById('data').addEventListener('keydown', function(event) {
  if (event.key === 'Enter') { // 'Enter' is the key for Enter
          event.preventDefault(); // Prevent form submission if the input is inside a form
          document.getElementById('send-btn').click(); // Click the send button
      }
  });

  // CHATBOT  HIDE AND SHOW FUNCTIONALITY
  var botDiv = document.querySelector('.bot');
  var chatBtn = document.querySelector('.chatBtn');
  var closeBtn = document.querySelector('.close-btn');

  // Initially hide the bot div
  botDiv.style.display = 'none';

  // Show the bot div when chatBtn is clicked
  chatBtn.addEventListener('click', function() {
      botDiv.style.display = 'block';
      chatBtn.style.display = 'none';
  });

  // Hide the bot div when closeBtn is clicked
  closeBtn.addEventListener('click', function() {
      botDiv.style.display = 'none';
      chatBtn.style.display = 'block';
  });
});