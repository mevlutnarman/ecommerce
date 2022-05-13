<?php
require_once("include/header.php");
require_once("include/topbar.php");
require_once("application/config/database.php");
require_once("application/config/config.php");

$inActivationCode = Filter($_GET["activationCode"]);
$inEmail = Filter($_GET["email"]);

if ($inActivationCode != "" && $inEmail != "") {

    $activationQuery = $dbConnect->query("SELECT * FROM user WHERE emailAdress = '$inEmail' AND activationCode = '$inActivationCode' AND Status = 0 LIMIT 1");
    $registationCount = $activationQuery->rowCount();
    $registationRecord = $activationQuery->fetch(PDO::FETCH_ASSOC);
    if ($registationCount > 0) {
        if ($inActivationCode == $registationRecord["activationCode"] && $inEmail == $registationRecord["emailAdress"]) {
            $updateRegistation = $dbConnect->query("UPDATE user SET status = 1 WHERE emailAdress = '$inEmail'");
            $updateRegistationCount = $updateRegistation->rowCount();
            if($updateRegistationCount>0){
                echo "Activation succesfully. Complate!";
            }else{
                echo "db not found row";
            }
        }else{
            echo "Record count < 1";
        }
    } else{
        echo "Error query activation.php";
    }
}









$dbConnect = null;
