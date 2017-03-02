<html>
  <head>
    <title>Email</title>
  </head>
  <body>
    <h1>Thanks for your submission!</h1>
    <?php


    //somehow this code doesn't work but oh well
      echo "Success! Thank for submitting";
      $recipient='jojiinchrist@gmail.com';
      $subject='Form to email message';
      $sender=$_POST["name"];
      $senderEmail=$_POST["email"];
      $message=$_POST["tarea"];
      $headers='Hi!';

      $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

      $retval=mail($recipient, $subject, $mailBody,$headers);
      if($retval==true){
        echo 'Success! Thank for submitting';
      }else{
        echo 'Message could not be sent';
      }

    ?>
  </body>
</html>
