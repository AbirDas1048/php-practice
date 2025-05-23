<?php

$to = 'abirdas422@gmail.com';
$cc = 'abirdas1151@gmail.com';
$from = 'Abir Office <abir.das@softrobotics.com.bd>';
$subject = 'Test mail';
$message = 'Hi,/n This is an test mail';
$headers = 'From: '.$from."\r\n";
$headers .= "CC: ".$cc."\r\n";
echo mail($to,$subject,$message,$headers);