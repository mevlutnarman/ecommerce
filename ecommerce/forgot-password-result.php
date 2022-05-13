<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("PHPMailer/src/Exception.php");
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");

require_once("include/header.php");
require_once("include/topbar.php");
require_once("application/config/database.php");
require_once("application/config/config.php");


if (isset($_POST["email"])) {
    $inMail = $_POST["email"];
} else {
    $inMail = "";
}

if ($inMail != "") {
    $passQuery = $dbConnect->query("SELECT * FROM user WHERE emailAdress = '$inMail' LIMIT 1");
    $passCount = $passQuery->rowCount();
    $passRecord = $passQuery->fetch(PDO::FETCH_ASSOC);

    if ($passCount > 0) {



        $passResetMessage = "Hello" . $passRecord["userName"] . "<br>" . "Reset password for <a href='" . $siteUrl . "/new-password.php?activationCode=" . $passRecord["activationCode"] . "&email=" . $passRecord["emailAdress"] . "'>click<a/>" . "<br>" . $siteName;

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.uzmanposta.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'mevlut@pusuladestek.com';                     //SMTP username
            $mail->Password   = 'q1w2e3R4-';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->CharSet = 'UTF-8';

            //Recipients
            $mail->setFrom(UndoConversions($siteEmail), UndoConversions($siteName));
            $mail->addAddress(UndoConversions($inMail));     //Add a recipient
            $mail->addReplyTo(UndoConversions($siteEmail), UndoConversions($siteName));

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $siteName . "Reset Password!";
            $mail->Body    = $passResetMessage;
            $mail->AltBody = 'ReMessage' . $passResetMessage;

            $mail->send();
            echo 'Reset password code send mail OK!';
        } catch (Exception $e) {
            echo "Mail gönderim hatası. Mail Hatası: {$mail->ErrorInfo}";
        }
    } else {
        $errorMessage =  "Dont have a email adress in db";
    }
}



?>

<!-- Navbar Start -->
<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i class="fa fa-angle-down float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            <a href="" class="dropdown-item">Men's Dresses</a>
                            <a href="" class="dropdown-item">Women's Dresses</a>
                            <a href="" class="dropdown-item">Baby's Dresses</a>
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link">Shirts</a>
                    <a href="" class="nav-item nav-link">Jeans</a>
                    <a href="" class="nav-item nav-link">Swimwear</a>
                    <a href="" class="nav-item nav-link">Sleepwear</a>
                    <a href="" class="nav-item nav-link">Sportswear</a>
                    <a href="" class="nav-item nav-link">Jumpsuits</a>
                    <a href="" class="nav-item nav-link">Blazers</a>
                    <a href="" class="nav-item nav-link">Jackets</a>
                    <a href="" class="nav-item nav-link">Shoes</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <?php require_once("include/navbar.php") ?>
        </div>
    </div>
</div>
<!-- Navbar End -->


<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <?php
            // $inUserEmail = Filter($_POST["email"]);
            // if ($inUserEmail != "") {
            //     $passwordQuery = $dbConnect->query("SELECT * FROM user WHERE emailAdress = '$inUserEmail'");
            //     $passwordRecord = $passwordQuery->rowCount();
            //     $passwordRecord = $passwordQuery->fetch(PDO::FETCH_ASSOC);
            //     $passwordRecord;
            // }
            echo $errorMessage;

            ?>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<?php require_once("include/footer.php") ?>

