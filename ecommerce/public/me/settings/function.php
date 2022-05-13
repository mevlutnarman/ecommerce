<?php

$ipAdress = $_SERVER["REMOTE_ADDR"];
$time = time();
$dateTime = date("d.m.y H:i:s", $time);

function DeleteCharactersExceptNumbers($value){

    $process = preg_replace("'/[^0-9]/'", "", $value); // 0'dan 9'a kadar bir değer gelmiyor ise sil. ikinci metoddaki boşluk işlemi siliyor.
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
}









?>