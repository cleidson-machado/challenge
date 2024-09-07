
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chat GPT Laravel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <!-- End JavaScript -->

  <!-- CSS -->
  <link rel="stylesheet" href="/styles-chatboot.css">
  <!-- End CSS -->
</head>
<body>
    <div class="chat">
        <!-- Header -->
        <div class="top">
            <div>
              <p>Study by Cleidson Machado</p>
              <small>Online</small>
            </div>
          </div>
           <!-- End Header -->
           <!-- Chat -->
      <div class="messages">
        <div class="left message">
          <img src="https://blog.emojipedia.org/content/images/2015/10/robot.png" alt="Avatar">
          <p>Start chatting with Chat GPT AI below!!</p>
        </div>
      </div>
      <!-- End Chat -->
      
      <!-- Footer -->
      <div class="bottom">
        <form>
          <input type="text" id="message" name="message" placeholder="Enter message..." autocomplete="off">
          <button type="submit"></button>
        </form>
      </div>
      <!-- End Footer -->
      </div>
</body>
<script>
    //Broadcast messages
    $("form").submit(function (event) {
      event.preventDefault();
  
      //Stop empty messages
      if ($("form #message").val().trim() === '') {
        return;
      }
  
      //Disable form
      $("form #message").prop('disabled', true);
      $("form button").prop('disabled', true);
  
      $.ajax({
        url: "/chat",
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': "{{csrf_token()}}"
        },
        data: {
          "model": "gpt-3.5-turbo",
          "content": $("form #message").val()
        }
      }).done(function (res) {
  
        //Populate sending message
        $(".messages > .message").last().after('<div class="right message">' +
          '<p>' + $("form #message").val() + '</p>' +
          '<img src="https://easy-peasy.ai/cdn-cgi/image/quality=80,format=auto,width=700/https://fdczvxmwwjwpwbeeqcth.supabase.co/storage/v1/object/public/images/c55a0816-325f-4d8e-9c0d-a44a6e4c8e9f/9a03d7da-7086-409e-9ece-5d29843b5745.png" alt="Avatar">' +
          '</div>');
  
        //Populate receiving message
        $(".messages > .message").last().after('<div class="left message">' +
          '<img src="https://blog.emojipedia.org/content/images/2015/10/robot.png" alt="Avatar">' +
          '<p>' + res + '</p>' +
          '</div>');
  
        //Cleanup
        $("form #message").val('');
        $(document).scrollTop($(document).height());
  
        //Enable form
        $("form #message").prop('disabled', false);
        $("form button").prop('disabled', false);
      });
    });
  
  </script>
</html>