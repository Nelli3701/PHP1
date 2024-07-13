<?php

/*1. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
Обязательно использовать оператор return.*/

echo "Задание 1.<br>Тут ничего не выводится, только написаны функции";

function sum($arg1, $arg2)
{
    return $arg1 + $arg2;
}

function subtract($arg1, $arg2)
{
    return $arg1 - $arg2;
}

function multiply($arg1, $arg2)
{
    return $arg1 * $arg2;
}

function divide($arg1, $arg2)
{
    if ($arg2 != 0) {
        return $arg1 / $arg2;
    } else {
        return 'Error: Division by zero';
    }
}

/*2. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) 
и вернуть полученное значение (использовать switch).*/

echo "<br>Задание 2.<br>";

function arithmeticOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'add':
            return sum($arg1, $arg2);
        case 'subtract':
            return subtract($arg1, $arg2);
        case 'multiply':
            return multiply($arg1, $arg2);
        case 'divide':
            return divide($arg1, $arg2);
        default:
            return 'Error: Unknown operation';
    }
}

echo arithmeticOperation(2, 0, 'divide');

/*3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, 
а в качестве значений – массивы с названиями городов из соответствующей области. 
Вывести в цикле значения массива, чтобы результат был таким: 
Московская область: Москва, Зеленоград, Клин 
Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт 
Рязанская область … (названия городов можно найти на maps.yandex.ru).*/

echo "<br>Задание 3.<br>";

$cities = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Михайлов', 'Новомичуринск'],
];

foreach ($cities as $region => $cityList) {
    echo "$region: " . implode(', ', $cityList) . ".<br>";
}


/*4. Объявить массив, индексами которого являются буквы русского языка, 
а значениями – соответствующие латинские буквосочетания 
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’). Написать функцию транслитерации строк.*/

echo "<br>Задание 4.<br>";

$translitArray = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
    'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
    'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
    'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
    'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch',
    'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'y', 'ь' => '',
    'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
];

function translitString($string)
{
    global $translitArray;
    $result = '';
    $string = mb_strtolower($string);
    for ($i = 0; $i < mb_strlen($string); $i++) {
        $char = mb_substr($string, $i, 1);
        $result .= isset($translitArray[$char]) ? $translitArray[$char] : $char;
    }
    return $result;
}

echo translitString('Привет всем! Как жизнь? Как дела?');

/*5. *С помощью рекурсии организовать функцию возведения числа в степень. 
Формат: function power($val, $pow), где $val – заданное число, $pow – степень.*/

echo "<br>Задание 5.<br>";

function power($val, $pow)
{
    if ($pow == 0) {
        return 1;
    } else {
        return $val * power($val, $pow - 1);
    }
}

echo power(2, 3);

/*6. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты.*/

echo "<br>Задание 6.<br>";

$current_hour = date("H");
$current_minute = date("i");
function current_time($current_hour, $current_minute)
{
    $minutes = $current_minute % 10;
    $minutes_plural = ($current_minute == 11 || $current_minute == 12 || $current_minute == 13 || $current_minute == 14)
        ? "минут" : ($minutes == 1 ? "минута" : ($minutes >= 2 && $minutes <= 4 ? "минуты" : "минут"));

    $hours = $current_hour % 10;
    $hours_plural = ($current_hour == 11 || $current_hour == 12 || $current_hour == 13 || $current_hour == 14)
        ? "часов" : ($hours == 1 ? "час" : ($hours >= 2 && $hours <= 4 ? "часа" : "часов"));
    return "$current_hour $hours_plural $current_minute $minutes_plural";
}

echo current_time($current_hour, $current_minute);
