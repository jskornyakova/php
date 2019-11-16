<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>

<?php
$mysql = "SELECT * FROM `gallary` ORDER BY `gallary`.`liked` DESC";
$result = mysqli_query($bd, $mysql);
$array ='';
$array .="<div class='container'>";
while ($row = mysqli_fetch_assoc($result)) {

    $array .= "<div class='smallimg'>";
    $array .= "<a href=\"?page=2&id={$row['id']}\" target='_blank'>
                   <img src='{$row['small']}{$row['name']}'></a>";
    $array .= "</div>";

}
$array .= "</div>";
echo $array;
?>

</body>
</html>