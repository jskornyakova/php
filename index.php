<?php

function galary($size) {
    $dirgalary = scandir(__DIR__ . "/gallery_img/$size/");
    $dirgalary = array_slice($dirgalary, 2);
    return $dirgalary;
}

$dirsmall = galary('small');
$dirbig = galary('big');

function img($arr){
    $array ='';
    $array .="<div class='container'>";
        foreach ($arr as $key => $value) {
            $array .= "<div class='smallimg'>";
            $array .= "<a href='gallery_img/big/$value' target='_blank'>
                       <img src='gallery_img/small/$value'></a>";
            $array .= "</div>";

        };
    $array .= "</div>";
    return $array;
}
$result = "";
$result .= img($dirsmall);

//Добавляет актуальную дату при обновлении страницы
$file = 'log.txt';
$text = PHP_EOL . date('Y-m-d H:i:s') . PHP_EOL;
$fOpen = fopen($file,'a');
fwrite($fOpen, $text);
fclose($fOpen);




include "main.html";