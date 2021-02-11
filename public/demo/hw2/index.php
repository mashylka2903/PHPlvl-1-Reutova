<?php
/*
1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом.
*/

$a = 15;
$b = -7;

if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} elseif ($a < 0 && $b < 0) {
    echo $a * $b;
} else { 
    echo $a + $b;
}

/*3. Реализовать основные 4 арифметические операции в виде функций 
с двумя параметрами. Обязательно использовать оператор return.
*/

function sum ($a, $b) {
    return $a + $b;
}

function diff ($a, $b) {
    return $a - $b;
}

function mult ($a, $b) {
    return $a * $b;
}

function div ($a, $b) {
    return $a / $b;
}

//echo diff (7,5);

/*Реализовать функцию с тремя параметрами: 
function mathOperation($arg1, $arg2, $operation), 
где $arg1, $arg2 – значения аргументов, $operation – 
строка с названием операции. В зависимости от переданного 
значения операции выполнить одну из арифметических операций 
(использовать функции из пункта 3) и вернуть полученное 
значение (использовать switch).
*/
function mathOperation($a, $b, $operation) {
    
    switch ($operation) {
        case 'SUM':
            return sum($a, $b);
            break;
        case 'DIFF':
            return diff($a, $b);
            break;
        case 'MULT':
            return mult($a, $b);
            break;
        case 'DIV':
            return div($a, $b);
            break;
        default :
            break;
    }
}

//echo mathOperation(30,50,'DIFF');

/*5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, 
вывести текущий год в подвале при помощи встроенных функций PHP.
*/

echo "<br> Current year: " . date ( 'Y' ) . "<br>";

/*6. *С помощью рекурсии организовать функцию возведения числа в степень. 
Формат: function power($val, $pow), где $val – заданное число, 
$pow – степень. 3*6 = 3 * 3*5 
*/

function power($val, $pow) {
        if ($pow <= 1) {
            return $pow;
        }
    
        return $val * power ($val, $pow - 1);
    
}

//echo power (3,5);

/*Написать функцию, которая вычисляет текущее время и возвращает 
 * его в формате с правильными склонениями,
 часов минут 0 5-20  // 25-30 35-40 45-50 56-59
 часа минуты 2-4 22-23 // 24 32-34 42-44 52-54
 час минута 1 21 // 31 41 51
 */

 function declension ($hours, $mins) {
     if (($hours < 24) && ($hours >= 0) && ($mins < 60) && ($mins >= 0)){
        if (($hours == 1) || ($hours == 21)) {
            echo $hours . " час";
        }
        elseif (($hours == 0) || (($hours >= 5) && ($hours <=20))) {
            echo $hours . " часов";
        }
        else {
            echo $hours . " часа";
        }
        if (($mins == 1) || ($mins == 21) || ($mins % 10 == 1)) {
            echo $mins . ' минута';
        }
        elseif (($mins == 0) || (($mins >= 5) && ($mins <=20)) || ($mins % 10 == 5) ||
        ($mins % 10 == 6) || ($mins % 10 == 7) || ($mins % 10 == 8) || ($mins % 10 == 9)
        || ($mins % 10 == 0)) {
            echo $mins . " минут";
       }
       else {
        echo $mins . " минуты";
        }       
        
     }

     else {
         echo "Incorrect time format";
     }
 }

 declension (15,43);

?>
