<?php

try {
    $dbConnect = new PDO("mysql:host=localhost;dbname=devmevlu_ecommerce;charset=utf8", "devmevlu_cms", "Mnarman25!x*");
} catch (PDOException $hata) {
    echo "<b>Error Details:<b>" . $hata->getMessage();
    die();
}

$settingsQuery = $dbConnect->query("SELECT * FROM settings LIMIT 1");
$settingCount = $settingsQuery->rowCount();
$settingsRecord = $settingsQuery->fetch(PDO::FETCH_ASSOC);

if ($settingCount > 0) {

    $siteName = $settingsRecord["siteName"];
    $siteTitle = $settingsRecord["siteTitle"];
    $siteDescription = $settingsRecord["siteDescription"];
    $siteKeywords = $settingsRecord["siteKeywords"];
    $siteCopyright = $settingsRecord["siteCopyright"];
    $siteLogo = $settingsRecord["siteLogo"];
    $siteEmail = $settingsRecord["siteEmail"];
    $siteEmailPassword = $settingsRecord["siteEmailPassword"];

} else {
    echo"Web Page setting page error db query";
    die();
}
