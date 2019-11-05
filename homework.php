<?
//задание№1
$a = 0;
while ($a <= 100) {
    if ($a % 3 == 0) echo $a . " ";
    $a++;
}
echo "<hr>";

//задание №2
$b = 0;
do {
    if ($b === 0) {
        echo $b . " - ноль<br>";
    } elseif ($b % 2 == 0) {
        echo $b . " - четное<br>";
    } else {
        echo $b . " - нечетное<br>";
    }
    $b++;
} while ($b <= 10);
echo "<hr>";

//задание №3
$array = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Рязань", "Михайлов", "Касимов"],
];

foreach ($array as $key => $value) {
    if (is_array($value)) {
        {
            echo $key . ": <br>" . implode(', ', $value) . "<br>";
        }
    }
};
echo "<hr>";

//задание №4

function alftranslate($string)
{
    $alfavit = [
        'а' => 'a', 'б' => 'b', 'в' => 'v',
        'г' => 'g', 'д' => 'd', 'е' => 'e',
        'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
        'и' => 'i', 'й' => 'y', 'к' => 'k',
        'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r',
        'с' => 's', 'т' => 't', 'у' => 'u',
        'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
        'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
    ];
    return strtr($string, $alfavit);
}

;
function translate($str)
{
    $str = mb_strtolower($str);
    $str = alftranslate($str);
    return $str;
}

;
$str = "Написать функцию, которая заменяет в строке пробелы";
echo translate($str);
echo "<hr>";

//задание №5
$str = "Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.";
function change_str($str)
{
    $str = str_replace(" ", "_", $str);
    return $str;
}

echo change_str($str);
echo "<hr>";

//задание №7
for ($i = 0; $i <= 9; print $i++ . PHP_EOL) {
};
echo "<hr>";


//задание №8
foreach ($array as $key => $value) {
    foreach ($value as $city){
    $pos = strpos($city, "К");
    if ($pos !== false) {
        echo $city . "<br>";
    }
    }

};
echo "<hr>";

//задание №9
$str = "Написать функцию, которая заменяет в строке пробелы";
echo translate(change_str($str));