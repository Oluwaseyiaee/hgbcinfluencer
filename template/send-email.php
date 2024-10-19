<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$subject = $_POST['subject'];
$message = $_POST['message'];

require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    //$mail->Port = 587;
    //  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  // Use SSL encryption
    $mail->Port = 465;                                // SSL uses port 465


    // Authentication
    $mail->Username = "hgbcworkforce@gmail.com";
    $mail->Password = "zunmdeuxadupylvq"; // Use the app password here

    // Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress("hgbcworkforce@gmail.com", "Higher Ground Baptist Church");

    // Content
    $mail->Subject = $subject;
    $mail->Body    = $message;

    // Send email
    $mail->send();
    // If the email is sent successfully
    echo "<script>alert('Message sent successfully!'); window.location.href = 'your-form-page.php';</script>";
} catch (Exception $e) {
    // If there is an error
    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}'); window.location.href = 'your-form-page.php';</script>";
}
