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




if (isset($_POST["username"])) {
    $username = Filter($_POST["username"]);
} else {
    $username = "";
}
if (isset($_POST["email"])) {
    $email = Filter($_POST["email"]);
} else {
    $email = "";
}
if (isset($_POST["phone"])) {
    $phone = Filter($_POST["phone"]);
} else {
    $phone = "";
}
if (isset($_POST["pass"])) {
    $pass = Filter($_POST["pass"]);
} else {
    $pass = "";
}
if (isset($_POST["pass-again"])) {
    $passAgain = Filter($_POST["pass-again"]);
} else {
    $pass = "";
}
if (isset($_POST["gender"])) {
    $gender = Filter($_POST["gender"]);
} else {
    $gender = "";
}
if (isset($_POST["contract"])) {
    $contract = Filter($_POST["contract"]);
} else {
    $contract = "";
}

$md5Pass = md5($pass);
$activationCode = CreateActivationCode();

if ($username != "" && $email != "" && $phone != "" && $pass != "" && $gender != "") {
    if ($contract == 0) {
        echo "Please confirmation on checbox contract";
    } else {
        if ($pass != $passAgain) {
            echo "Please enter same password!";
        } else {
            $controlQuery = $dbConnect->query("SELECT * FROM user WHERE emailAdress = '$email' LIMIT 1");
            $controlCount = $controlQuery->rowCount();
            if ($controlCount > 0) {
                echo "This email adress have record db!";
            } else {
                $userQuery = $dbConnect->query("INSERT INTO user(userName, emailAdress, Password, phoneNumber, Gender, Status, transactionDate, transactionIpAdress, activationCode) VALUES ('$username', '$email', '$md5Pass', '$phone', '$gender', 0, '$time', '$ipAdress', '$activationCode')");
                $userCount = $userQuery->rowCount();
                if ($userCount > 0) {

                    echo "Registration Successful";
                    $activationCodeMessage = "Hello" . $username . "<br>" . "Activation for <a href='" . $siteUrl . "/activation.php?activationCode=" . $activationCode . "&email=" . $email . "'>click<a/>" . "<br>" . $siteName;

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
                        $mail->addAddress(UndoConversions($email), UndoConversions($username));     //Add a recipient
                        $mail->addReplyTo(UndoConversions($siteEmail), UndoConversions($siteName));

                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = $siteName . "New Registation!";
                        $mail->Body    = $activationCodeMessage;
                        $mail->AltBody = 'ReMessage' . $activationCodeMessage;

                        $mail->send();
                        echo 'Activation code send mail OK!';
                    } catch (Exception $e) {
                        echo "Mail gönderim hatası. Mail Hatası: {$mail->ErrorInfo}";
                    }
                } else {
                    echo "Registration dont successful";
                }
            }
        }
    }
} else {
    echo "Please don't space area on form.";
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


<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Contact Us</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Contact</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">

    </div>
    <div class="row px-xl-5">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form">
                        <span class="login100-form-title p-b-26">
                            <h2 class="section-title px-5"><span class="px-2">SingUp</span></h2>
                        </span>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="username">
                            <span class="focus-input100" data-placeholder="Username"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                            <input class="input100" type="email" name="email">
                            <span class="focus-input100" data-placeholder="Email"></span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="phone">
                            <span class="focus-input100" data-placeholder="Phone"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="pass">
                            <span class="focus-input100" data-placeholder="Password"></span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <select name="gender" class="input100" id="">
                                <option value="">Enter gender</option>
                                <option value="Man">Man</option>
                                <option value="Women">Woman</option>
                            </select>
                        </div>
                        <div>
                            <input type="checkbox" name="contract" id=""><a href="#">Member</a> contract ok.
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn">
                                    Sing Up
                                </button>
                            </div>
                        </div>

                        <div class="text-center p-t-115">
                            <span class="txt1">
                                Are you have a account?
                            </span>

                            <a class="txt2" href="login.php">
                                Login
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Footer Start -->
<?php
require_once("include/footer.php");
?>
<!-- Footer End -->