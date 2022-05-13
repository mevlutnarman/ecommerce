<?php
require_once("include/header.php");
require_once("include/topbar.php");
require_once("application/config/database.php");
require_once("application/config/config.php");


if(isset($_POST["submit"])){

    $inPassword = Filter($_POST["password"]);
    $inTryPassword = Filter($_POST["try-password"]);
    $inID = $_GET["ID"];
}
if($inPassword == $inTryPassword){
    $newPasswordQuery = $dbConnect->query("UPDATE user SET Password = '$inPassword' WHERE id = '$inID'");
    $newPasswordCount= $newPasswordQuery->rowCount();
    if($newPasswordCount>0){
        echo "Change password succesfully";
        header("Location: index.php");
        exit();
    }else{
        echo "Cannot change password";
    }

}else{
    echo "Password not equal";
}

if($inEmail != ""){

}



    $s = $dbConnect->query("SELECT * FROM user WHERE emailAdress = '$inEmail' AND activationCode = '$inActivationCode' AND Status = 0 LIMIT 1");
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










$dbConnect = null;
