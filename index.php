<?php
include __DIR__ . "/config/bd.php";
$pages = include_once ('engine/pages.php');

$page = '1';
if (!empty($_GET['page'])) {
    $page = (int)$_GET['page'];
}

$file = 'main';

if (!empty($pages[$page])) {
    $file = $pages[$page];
}

$file = __DIR__ . '/' . $file . '.php';
if (!file_exists($file)) {
    $file = __DIR__ . '/main.php';
}

ob_start();
include $file;
$content = ob_get_clean();
?>

<ul>
    <li><a href="?page=1">Галерея </a></li>
    <li><a href="?page=3">Калькулятор</a></li>
</ul>
<?= $content ?>























