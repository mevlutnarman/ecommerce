<?php
require_once("database.php");


$settingsQuery = $dbConnect->query("SELECT * FROM settings LIMIT 1");
$settingsCount = $settingsQuery->rowCount();
$settingsRecord = $settingsQuery->fetch(PDO::FETCH_ASSOC);
if($settingsCount>0){

    $siteName = $settingsRecord["siteName"];
    $siteTitle = $settingsRecord["siteTitle"];
    $siteDescription = $settingsRecord["siteDescription"];
    $siteKeywords = $settingsRecord["siteKeywords"];
    $siteCopyright = $settingsRecord["siteCopyright"];
    $siteLogo = $settingsRecord["siteLogo"];
    $siteUrl = $settingsRecord["siteUrl"];
    $siteEmail = $settingsRecord["siteEmail"];
    $siteEmailPassword = $settingsRecord["siteEmailPassword"];
    $siteEmailHost = $settingsRecord["siteEmailHost"];
    $siteHostPort = $settingsRecord["siteHostPort"];
    $mediaFacebook = $settingsRecord["mediaFacebook"];
    $mediaTwitter = $settingsRecord["mediaTwitter"];
    $mediaLinkedin = $settingsRecord["mediaLinkedin"];
    $mediaInstagram = $settingsRecord["mediaInstagram"];
    $mediaPinterest = $settingsRecord["mediaPinterest"];
    $mediaYoutube = $settingsRecord["mediaYoutube"];
}else{
    echo "Setting page error db query";
    die();
}

    $aboutQuery = $dbConnect->query("SELECT * FROM pageText LIMIT 1");
    $aboutCount = $aboutQuery->rowCount();
    $aboutRecord = $aboutQuery->fetch(PDO::FETCH_ASSOC);

    if($aboutCount > 0 ){
    $aboutText = $aboutRecord["aboutText"];
    $refundText = $aboutRecord["refundText"];
    $deliveryText = $aboutRecord["deliveryText"];
    $sssText = $aboutRecord["sssText"];
    $privacyText = $aboutRecord["privacyText"];
    $personalDataText = $aboutRecord["personalDataText"];
    $membershipText = $aboutRecord["membershipText"];
    $distanceSellingText = $aboutRecord["distanceSellingText"];
}else{
    echo "Page text error db query";
    die();
}

if(isset($_SESSION["user"])){
    $userQuery = $dbConnect->query("SELECT * FROM user emailAdress=".$_SESSION["user"]."LIMIT 1");
    $userCount = $userQuery->rowCount();
    $userRecord = $userQuery->fetch(PDO::FETCH_ASSOC);
    if($userQuery>0){
        $Id = $userRecord["id"];
        $userName = $userRecord["userName"];
        $emailAdress = $userRecord["emailAdress"];
        $phoneNumber = $userRecord["phoneNumber"];
        $gender = $userRecord["gender"];
        $status = $userRecord["status"];
        $transactionDate = $userRecord["transactionDate"];
        $transactionIpAdress = $userRecord["transactionIpAdress"];
        $activationCode = $userRecord["activationCode"];
    }else{
        echo "User page error db query";
        die();
    }

}

