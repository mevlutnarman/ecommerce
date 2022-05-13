<?php
require_once("include/header.php");
require_once("include/topbar.php");
require_once("application/config/database.php");
require_once("application/config/function.php");



if (isset($_POST["submit"])) {
    $cargoNumber =  NumberFilter(Filter($_POST["cargoNumber"]));
}
if ($cargoNumber != "") {

    $konak  = $_SERVER['HTTP_HOST'];
    $yol   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $ek = 'https://yurticikargo.com/tr/online-servisler/gonderi-sorgula?code='.$cargoNumber;
    var_dump($ek);
    die();
    header("Location:$ek");
} else {
    header("Location:bank.php");
    exit();
}
