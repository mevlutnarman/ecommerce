<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("PHPMailer/src/Exception.php");
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");

require_once("include/header.php");
require_once("include/topbar.php");
require_once("application/config/config.php");
require_once("application/config/function.php");

if (isset($_POST["submit"])) {
    $inName = Filter($_POST["name"]);
    $inEmail = Filter($_POST["email"]);
    $inSubject = Filter($_POST["subject"]);
    $inMessage = Filter($_POST["message"]);
}

if ($inName != "" and filter_var($inEmail, FILTER_VALIDATE_EMAIL) != "" and $inSubject != "" and $inMessage != "") {

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 2;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.uzmanposta.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'mevlut@pusuladestek.com';                     //SMTP username
        $mail->Password   = 'q1w2e3R4-';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom($inEmail, $inName);
        $mail->addAddress('sugar@dev.mevlutnarman.com.tr', 'Mevlut Narman');     //Add a recipient
        $mail->addReplyTo('sugar@dev.mevlutnarman.com.tr', 'Mr. Sugar');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $inSubject;
        $mail->Body    = $inMessage;
        $mail->AltBody = 'ReMessage' . $message;

        $mail->send();
        echo 'Mail sending OK!';
    } catch (Exception $e) {
        echo "Mail gönderim hatası. Mail Hatası: {$mail->ErrorInfo}";
    }
} else {
    header("Location:index.php");
    exit();
}
