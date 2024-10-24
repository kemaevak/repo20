<?php
// Уровень 1: Легкий

// 1. Конкатенация строк
$str1 = "Hello";
$str2 = "World";
$result = $str1 . " " . $str2;
echo $result; // Вывод: Hello World

// 2. Изменение регистра
$str = "Hello World";
echo strtoupper($str); // Вывод: HELLO WORLD
echo strtolower($str); // Вывод: hello world

// 3. Сравнение строк
$str1 = "Hello";
$str2 = "hello";
echo $str1 == $str2 ? "Строки равны" : "Строки не равны"; // Сравнение с учетом регистра
echo strcasecmp($str1, $str2) == 0 ? "Строки равны" : "Строки не равны"; // Сравнение без учета регистра

// 4. Поиск подстроки
$str = "Hello World";
$pos = strpos($str, "World");
echo $pos !== false ? "Подстрока найдена на позиции $pos" : "Подстрока не найдена";

// 5. Замена подстроки
$str = "Hello World";
$result = str_replace("World", "PHP", $str);
echo $result; // Вывод: Hello PHP

// 6. Форматирование строки
$name = "John";
$age = 25;
$result = sprintf("Имя: %s, Возраст: %d", $name, $age);
echo $result; // Вывод: Имя: John, Возраст: 25

// 7. Разделение строки
$str = "apple,banana,orange";
$array = explode(",", $str);
$result = implode(" | ", $array);
echo $result; // Вывод: apple | banana | orange

// 8. Работа с многострочным текстом
$text = "Hello\\nWorld\\nThis is PHP";
echo nl2br($text); // Преобразование новой строки в <br>

// Уровень 2: Усложненный

// 1. Сложная конкатенация строк
$name = "John";
$greeting = "Hello";
$age = 25;
$result = $greeting . ", " . $name . "! You are " . $age . " years old.";
echo $result; // Вывод: Hello, John! You are 25 years old.

// 2. Изменение регистра с условиями
$str = "hello world, welcome to php";
$result = ucwords(strtolower($str));
echo $result; // Вывод: Hello World, Welcome To Php

// 3. Сравнение строк с учётом регистра и без
$str1 = "Hello";
$str2 = "hello";
echo $str1 === $str2 ? "Полное совпадение" : "Не совпадают";
echo strcasecmp($str1, $str2) == 0 ? "Совпадают без учёта регистра" : "Не совпадают без учёта регистра";

// 4. Замена подстроки с использованием массива
$str = "The quick brown fox jumps over the lazy dog";
$search = ["quick", "brown", "lazy"];
$replace = ["slow", "black", "active"];
$result = str_replace($search, $replace, $str);
echo $result; // Вывод: The slow black fox jumps over the active dog

// 5. Форматирование строки с числом
$product = "Laptop";
$price = 1500;
$result = sprintf("The price of %s is $%d.", $product, $price);
echo $result; // Вывод: The price of Laptop is $1500.

// 6. Разделение и объединение сложной строки
$str = "10,20,30,40";
$array = explode(",", $str);
$sum = array_sum($array);
echo "Сумма: $sum"; // Вывод: Сумма: 100

// 7. Создание случайной строки
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
echo generateRandomString(); // Пример вывода: A1B2C3D4E5

// 8. Проверка строки на палиндром
function isPalindrome($str) {
    $cleanedStr = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $str));
    return $cleanedStr === strrev($cleanedStr);
}
echo isPalindrome("A man a plan a canal Panama") ? "Палиндром" : "Не палиндром"; // Вывод: Палиндром
?>
