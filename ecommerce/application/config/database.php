<?php

try{
    $dbConnect = new PDO("mysql:host=localhost;dbname=!;charset=utf8", "!", "!");
}catch(PDOException $error){
    echo "Cannot database connect!<br>Error Details:" . $error->getMessage();
}
























?>
