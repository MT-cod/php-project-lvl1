<?php

namespace Projects\lvl1;

use function cli\line;
use function cli\prompt;

//Если переданное число чётное, то возвращаем'yes', иначе 'no'
function checkEven(int $num): string
{
    return ($num % 2 == 0) ? 'yes' : "no";
}

//Возвращаем случайное число от 1 до 100
function getRandNum(): int
{
    return random_int(1, 100);
}

//Возвращаем случайную операцию для калькулятора
function getRandOperationForCalc(): mixed
{
    $operation_num = random_int(1, 3);
    switch ($operation_num) {
        case 1:
            return "+";
        case 2:
            return "-";
        case 3:
            return "*";
    }
}

//Возвращаем наибольший общий делитель двух чисел
function getGcd(int $a, int $b): mixed
{
    return ($a % $b) ? getGcd($b, $a % $b) : abs($b);
}

//Если переданное число простое, то возвращаем'yes', иначе 'no'
function isPrime(int $num): string
{
    if ($num < 2) {
        return 'no';
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return 'no';
        }
    }
    return 'yes';
}
