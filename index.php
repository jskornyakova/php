<?php
$a = 5;
$b = '05';
var_dump($a == $b);         // Почему true? 5==5
var_dump((int)'012345');     // Почему 12345? т.к. число
var_dump((float)123.0 === (int)123.0); // Почему false? //разные типы переменных 123.0 и 123
var_dump((int)0 === (int)'hello, world'); // Почему true? 0=0

//способ1
$c = 1;
$d = 2;
echo "<br>c = {$c}";
echo "<br>d = {$d}";
$c = $d ^ $c;
$d = $c ^ $d;
$c = $c ^ $d;
echo "<br>c = {$c}";
echo "<br>d = {$d}";

//способ2
$q = 15;
$w = 20;
echo "<br>w = {$w}";
echo "<br>q = {$q}";
$q = $q + $w;
$w = $q - $w;
$q = $q - $w;
echo "<br>w = {$w}";
echo "<br>q = {$q}";