<?php

$ipAdress = $_SERVER["REMOTE_ADDR"];
$time = time();
$dateTime = date("d.m.y H:i:s", $time);

function DeleteCharactersExceptNumbers($value){

    $process = preg_replace("'/[^0-9]/'", "", $value); // 0'dan 9'a kadar bir değer gelmiyor ise sil. ikinci metoddaki boşluk işlemi siliyor.
    return $process;
}
function DeleteAllSpace($value){

    $process = preg_replace("'/\s|&nbsps/'", "", $value); // Tüm boşlukları silinmesi
    return $process;
}

function Filter($value){
    $spaceDelete = trim($value); 
    $tagClear = strip_tags($spaceDelete);
    $htmlNone = htmlspecialchars($tagClear, ENT_QUOTES);
    return $htmlNone;
}

function NumberFilter($value){
    $spaceDelete = trim($value); // Boşlukların silinmesi
    $tagClear = strip_tags($spaceDelete); // Tagların silinmesi
    $htmlNone = htmlspecialchars($tagClear, ENT_QUOTES); //html içeriğin silinmesi
    $clear  =   DeleteCharactersExceptNumbers($htmlNone); // rakam harici değerlerin silinmesi
    return $clear;
}

function UndoConversions($value){
    $returnIt = htmlspecialchars_decode($value, ENT_QUOTES); // geriDöndür - 
    return $returnIt;
}

function IbanChange($value){

    $spaceDelete = trim($value);
    $deleteAllSpace = DeleteAllSpace($spaceDelete);
    $firstArea = substr($deleteAllSpace, 0, 4);
    $secondArea = substr($deleteAllSpace, 4, 4);
    $thirdArea = substr($deleteAllSpace, 8, 4);
    $fourthArea = substr($deleteAllSpace, 12, 4);
    $fifthArea = substr($deleteAllSpace, 16, 4);
    $sixthArea = substr($deleteAllSpace, 20, 4);
    $seventhArea = substr($deleteAllSpace, 24, 2);
    $ibanEdit = $firstArea . " " . $secondArea . " " . $thirdArea . " " . $fourthArea . " " . $fifthArea ." " .  $sixthArea . " " . $seventhArea;
    return $ibanEdit;
}

function CreateActivationCode(){
    $first = rand(10000,99999);
    $second = rand(10000,99999);
    $third = rand(10000,99999);
    $code = $first . "-" . $second . "-" . $third;
    return $code;
}










?>