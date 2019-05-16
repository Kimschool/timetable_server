<?php
  $emailTo = "kimschool@www3723.sakura.ne.jp";
  $emailFrom = $_POST["mail"];
  $subject = "メール送信テスト";
  $message = "メール送信成功";
  $fp = fopen($_FILES["file"]["tmp_name"], "r");
  $file = fread($fp, $_FILES["file"]["size"]);
  fclose($fp);
  
  $subject = "=?utf-8?b?".base64_encode($subject)."?=";
  
  $boundary = "----" . uniqid("part");
  
  $header =
    "From: $emailTo\r\nX-Sender: $emailTo\r\n".
    "MIME-Version: 1.0\r\n".
    "Content-Type: Multipart/mixed; boundary=\"$boundary\""; //1
  
  $body =
    "This is a multi-part message in MIME format.\r\n\r\n".
    "--$boundary\r\n".
    "Content-Type: text/html; charset=UTF-8\r\n".
    "Content-Transfer-Encoding: 8bit\r\n\r\n".
    $message."\r\n".
    "--$boundary\r\n"; //2
    
  $body .=
    "Content-Type: application/octet-stream; name=\"".$_FILES["file"]["name"]."\"\r\n".
    "Content-Transfer-Encoding: base64\r\n".
    "Content-Disposition: attachment; filename=\"".$_FILES["file"]["name"]."\"\r\n\r\n".
    base64_encode($file)."\r\n\r\n".
    "--$boundary--"; //3
    
  mail($emailFrom, $subject, $body, $header);

?>
