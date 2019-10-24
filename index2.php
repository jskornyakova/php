<?
//3 способ
$h1 = "Fishnet Chair";
$title = "Home_page";
$year = 2019;

$content = file_get_contents("site.html");
$content = str_replace("{{H1}}", $h1, $content);
$content = str_replace("{{TITLE}}", $title, $content);
$content = str_replace("{{YEAR}}", $year, $content);
echo $content;