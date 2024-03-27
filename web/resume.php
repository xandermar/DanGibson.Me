<?php


$hash = '074af0687fd36dcf0bc4486973047a3892ef3ba0cddbf4aea120097cee47d67e'; // resume_for_hire
$e = key($_GET);
$e = base64_decode($e);
$e = explode('&',$e);

foreach($e as $item){
  $item = explode('=',$item);
  $items[][$item[0]] = $item[1];
}

// $do = $items[0]['do'];
// $do == 0 ? header('Location: /?m=2') : false;

$email = $items[1]['email'];
$sent_hash = $items[2]['hash'];
$sent_hash == $hash ? true : header('Location: /?m=2');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to autoload.php of PHPMailer

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 0;                     // Enable verbose debug output (change to 2 for more detailed debug)
    $mail->isSMTP();                          // Set mailer to use SMTP
    $mail->Host       = 'smtp.ionos.com';   // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                 // Enable SMTP authentication
    $mail->Username   = 'communications@xdm.io';   // SMTP username
    $mail->Password   = 'Flightmaster326!';       // SMTP password
    $mail->SMTPSecure = 'tls';                // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                  // TCP port to connect to

    // Sender info
    $mail->setFrom('communications@xdm.io', 'Xandermar Communications');

    // Add a recipient
    $mail->addAddress($email);

    // Attach file
    $mail->addAttachment('/var/www/xandrive/dangibson/Profile.pdf', 'DanGibsonResume.pdf');

    // Email subject and body
    $mail->isHTML(true);                      // Set email format to HTML
    $mail->Subject = "Dan Gibson's Resume";
    $mail->Body    = "<p>Hello!<br></p><p>Someone using this email address recently requested Dan Gibson's resume. Please find the resume attached to this email. Have a nice day!</p><p>Thank you for your interest!<br>Dan Gibson</p>";

    // Send email
    $mail->send();
    // echo 'Message has been sent';
    header('Location: /?m=1');
} catch (Exception $e) {
    header('Location: /?m=2');
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


//resume($_GET) ? header('Location: /?m=1') : header('Location: /?m=2');
