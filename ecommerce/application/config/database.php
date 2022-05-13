<?php

try{
    $dbConnect = new PDO("mysql:host=localhost;dbname=devmevlu_ecommerce;charset=utf8", "devmevlu_cms", "Mnarman25!x*");
}catch(PDOException $error){
    echo "Cannot database connect!<br>Error Details:" . $error->getMessage();
}
























?>