<body>
<?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");
 
$to = "送ってほしいメルアド";	
$subject = $_POST['subject'];
$message = $_POST['message'];
 
  if(mb_send_mail($to, $subject, $message))
  {
    //送信が成功した場合の処理
  }
  else
  {
   //送信が失敗した場合の処理
  }
 ?>
</body>