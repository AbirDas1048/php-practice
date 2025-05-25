<?php
require_once("phpmailer/PHPMailer.php");
require_once("phpmailer/Exception.php");
require_once("phpmailer/SMTP.php"); // This is missing in your code

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);

try {
    // 🔐 Enable SMTP
    $pm->isSMTP();
    $pm->Host       = 'smtp.gmail.com';              // Change this to your SMTP server
    $pm->SMTPAuth   = true;
    $pm->Username   = 'abirdas422@gmail.com'; // Your full email address
    $pm->Password   = 'Your app password';           // Your real password or app password
    $pm->SMTPSecure = 'tls';                          // Or 'ssl'
    $pm->Port       = 587;                            // 587 for TLS, 465 for SSL

    // Sender & Receiver
    $pm->setFrom('abirdas422@gmail.com', 'Abir Office');
    $pm->addAddress('abirdas1151@gmail.com');

    // Email content
    $pm->Subject = 'Test Mail';
    $pm->isHTML(true);
    $pm->Body = 'Hi, <strong>This is a test mail</strong>';
    $pm->AltBody = 'This is a test mail';

    $pm->send();
    echo "Mail sent successfully!";
} catch (Exception $e) {
    echo "Failed: {$pm->ErrorInfo}";
}
