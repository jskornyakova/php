<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="arg1">
    <input type="number" name="arg2">
    <br>
    <input type="radio" name="operation" value="sum"> Сложение<Br>
    <input type="radio" name="operation" value="dif"> Разность<Br>
    <input type="radio" name="operation" value="div"> Деление<Br>
    <input type="radio" name="operation" value="mul"> Умножение<Br>
    <input type="submit" name="sent" value="Выполнить операцию">
</form>

</body>
</html>
<?php

if(isset($_POST['sent']))
{
    $arg1 = (int)$_POST['arg1'];
    $arg2 = (int)$_POST['arg2'];
    $operation = $_POST['operation'];
    $result = mathOperation($arg1, $arg2, $operation);
    echo "<h2>Результат: " . $result . "</h2>";
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
    if (!$arg2 === 0){
        return $arg1 / $arg2;
    } else {
        return "На ноль делить нельзя";
    }
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
            return "Введите значения";
            break;
    }
}

