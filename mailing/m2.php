<?php

$to = 'abirdas422@gmail.com';
$from = 'Abir Office <abir.das@softrobotics.com.bd>';
$subject = 'Test mail - HTML';
$message = "<strong>Hi</strong><br/>This is an test mail<br/>";
$message .= "<h1>This is HTML message</h1><br/>";
$message .= "<img src='https://www.facebook.com/photo/?fbid=2013447635510511&set=a.104320206423273' >";
$headers = "MIME-Version: 1.0 \r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";
$headers .= "From: {$from}\r\n";

echo mail($to,$subject,$message,$headers);