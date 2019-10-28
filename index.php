<?
$a = -10;
$b = 2;
if ($a >= 0 && $b >= 0) {
    $c = $a - $b;
} elseif ($a < 0 && $b < 0) {
    $c = $a * $b;
} else {
    $c = $a + $b;
}
echo "$c<br>";

$a = rand(0, 15);
switch ($a) {
    case 0:
        echo 0;
    case 1:
        echo 1;
    case 2:
        echo 2;
    case 3:
        echo 3;
    case 4:
        echo 4;
    case 5:
        echo 5;
    case 6:
        echo 6;
    case 7:
        echo 7;
    case 8:
        echo 8;
    case 9:
        echo 9;
    case 10:
        echo 10;
    case 11:
        echo 11;
    case 12:
        echo 12;
    case 13:
        echo 13;
    case 14:
        echo 14;
    case 15:
        echo 15 . "<br>";
        break;
    default:
        echo "Ошибка, число не в массиве от 0 до 15";
        break;
}

function sum($arg1, $arg2)
{
    return $arg1 + $arg2;
}

function dif($arg1, $arg2)
{
    return $arg1 - $arg2;
}

function div($arg1, $arg2)
{
    return $arg1 / $arg2;
}

function mul($arg1, $arg2)
{
    return $arg1 * $arg2;
}

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case sum:
            return sum($arg1, $arg2);
            break;
        case dif:
            return dif($arg1, $arg2);
            break;
        case div:
            return div($arg1, $arg2);
            break;
        case mul:
            return mul($arg1, $arg2);
            break;
        default:
            return "error";
            break;
    }
}

$sum = mathOperation(1, 2, sum);
$dif = mathOperation(1, 2, dif);
$div = mathOperation(1, 2, div);
$mul = mathOperation(1, 2, mul);
$er = mathOperation(1, 2, ft);

echo "Сложение $sum <br>";
echo "Разность $dif<br>";
echo "Деление $div<br>";
echo "Умножение $mul<br>";
echo "Ошибочный вариант $er<br>";

