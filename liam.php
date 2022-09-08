<?php
error_reporting(E_ALL); ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["validated"])) {

    // require '../utils/vendor/autoload.php';

    // $mail = new PHPMailer(true);

    // try {

    //     $website = 'getyummy.app';
    //     $message = nl2br($_POST['message']);
        
    //     $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    //     $mail->isSMTP();                                         
    //     $mail->Host       = "smtp.zoho.eu";                    
    //     $mail->SMTPAuth   = true;                                
    //     $mail->Username   = 'info@ensili.co';
    //     $mail->Password   = 'QQY0Rz25iAFR';
    //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    //     $mail->Port       = 587;

    //     $mail->setFrom("info@ensili.co", "SUPPORT");
    //     $mail->addReplyTo($_POST['email'], $_POST['name']);
    //     $mail->addAddress('info@ensili.co', 'enSili.co');

    //     $mail->isHTML(true);
    //     $mail->Subject = "[SUPPORT] ". $_POST['subject'];
    //     $mail->Body    = "<b>Website:</b><br>{$website}<br><br><b>Subject:</b><br>{$_POST['subject']}<br><br><b>Message:</b><br>{$message}";

    //     $mail->send();
    //     echo 'OK';
    // } catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }
}
else {
    echo 'BLOCKED';
}
?>