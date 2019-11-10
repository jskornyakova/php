<?php
$bd = mysqli_connect('localhost', 'root', '', 'gallary');


$mysql = "SELECT * FROM `gallary` ORDER BY `gallary`.`liked` DESC";
$result = mysqli_query($bd, $mysql);
$array ='';
$array .="<div class='container'>";
while ($row = mysqli_fetch_assoc($result)) {

        $array .= "<div class='smallimg'>";
        $array .= "<a href=\"?name={$row['name']}\" target='_blank'>
                   <img src='{$row['small']}{$row['name']}'></a>";
        $array .= "</div>";

}
$array .= "</div>";


if(!empty($_GET['name'])){

    $sql = "SELECT * FROM `gallary` WHERE `name`=\"{$_GET['name']}\"";
    $result1 = mysqli_query($bd, $sql);
    $row1 = mysqli_fetch_assoc($result1);
    $array1 = '';
    $array1 .= "<div class='bigimg'>";
    $array1 .= "<img src='{$row1['big']}{$row1['name']}'>";
    $array1 .= "<p><a href='index.php'> Back </a></p>";
    $array1 .= "</div>";
    include "main2.php";
    exit;

}


include "main.php";

