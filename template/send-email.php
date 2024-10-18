<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$subject = $_POST['subject'];
$message = $_POST['message'];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Authentication
    $mail->Username = "oluwaseyiae@gmail.com";
    $mail->Password = "GEORGIA20"; // Use the app password here

    // Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress("hgbcworkforce@gmail.com", "Higher Ground Baptist Church");

    // Content
    $mail->Subject = $subject;
    $mail->Body    = $message;

    // Send email
    $mail->send();
    echo "Email sent successfully";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
