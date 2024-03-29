<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to autoload.php of PHPMailer

// Form data
$name = $_POST['first_name'].' '.$_POST['last_name'] ?? '';
$company = $_POST['company'] ?? '';
$email = $_POST['email'] ?? '';
$reason = $_POST['reason'] ?? '';
$other_reason = $_POST['other_reason'] ?? '';

// SMTP Configuration
$smtpHost = 'smtp.ionos.com';
$smtpUsername = 'communications@xdm.io';
$smtpPassword = 'Flightmaster326!';
$smtpPort = 587;
$smtpEncryption = 'tls';

// Sender and recipient
$senderEmail = 'communications@xdm.io';
$recipientEmail = 'daniel.gibson@xandermar.com';

// Email subject
$subject = 'Resume Request from '.$name.' ('.$company.')';

// Email content
$content = "<p>Name: $name</p>";
$content .= "<p>Company: $company</p>";
$content .= "<p>Email: $email</p>";
$content .= "<p>Reason: $reason</p>";

$other_reason != null ? $content .= "<p>Other Reason: $other_reason</p>" : false ;

$content .= '<p class="mb-5"><a class="btn btn-primary" href="https://www.dangibson.me/resume.php?'.base64_encode('do=1&email='.$email.'&hash=074af0687fd36dcf0bc4486973047a3892ef3ba0cddbf4aea120097cee47d67e').'">APPROVE</a></p>';

// for future use?
$deny = '<p class="mb-5"><a class="btn btn-primary" href="https://www.dangibson.me/resume.php?'.base64_encode('do=0&email='.$email.'&hash=074af0687fd36dcf0bc4486973047a3892ef3ba0cddbf4aea120097cee47d67e').'">DENY</a></p>';


// add submit attempt to counter
include('functions/messageSubmitCounter.php');
messageSubmitCounter($ipAddress);


$body = '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="mt-5 mb-4">Resume Request:</h2>
      '.$content.'
    </div>
  </div>
</div>
</body>
</html>
';

// Initialize PHPMailer
$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = $smtpHost;
    $mail->SMTPAuth   = true;
    $mail->Username   = $smtpUsername;
    $mail->Password   = $smtpPassword;
    $mail->SMTPSecure = $smtpEncryption;
    $mail->Port       = $smtpPort;

    // Sender and recipient details
    $mail->setFrom($senderEmail, 'Xandermar Communications');
    // $mail->setFrom($email, $name);
    $mail->addAddress($recipientEmail, 'Xandermar LLC');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $body;

    // Send the email
    $mail->send();
    // echo 'Message has been sent';
    header('Location: /?m=3');
} catch (Exception $e) {
    header('Location: /?m=2');
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

