<?php

namespace Projects\lvl1;

use function cli\line;
use function cli\prompt;

//Приветствуем игрока и узнаём его имя, запускаем нужную игру со своей логикой
function runGame(string $game_name): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, $name!");
    switch ($game_name) {
        case 'BrainEven':
            line('Answer "yes" if the number is even, otherwise answer "no".');
            break;
        case 'BrainCalc':
            line('What is the result of the expression?');
            break;
        case 'BrainGcd':
            line('Find the greatest common divisor of given numbers.');
            break;
        case 'BrainProgression':
            line('What number is missing in the progression?');
            break;
        case 'BrainPrime':
            line('Answer "yes" if given number is prime. Otherwise answer "no".');
    }
    $game_logic = 'Projects\lvl1\run_' . $game_name . '_logic';
    
    //Цикл-счётчик вопрос-ответ
    for ($i = 0; $i < 3; $i++) {
        [$answer, $right_answer] = $game_logic();
        if ($answer != $right_answer) {
            line("'$answer' is wrong answer ;(. Correct answer was '$right_answer'.");
            line("Let's try again, $name!");
            exit;
        }
        line('Correct!');
    }
    line("Congratulations, $name!");
}

//Вопрос-ответ по логике игры "Проверка на чётность". Возвращает ответ юзера и правльный ответ.
function run_BrainEven_logic(): array
{
    $random_num = getRandNum();
    line("Question: $random_num");
    $answer = prompt('Your answer');
    $right_answer = checkEven($random_num);
    return [$answer, $right_answer];
}

//Вопрос-ответ по логике игры "Калькулятор". Возвращает ответ юзера и правльный ответ.
function run_BrainCalc_logic(): array
{
    $random_num1 = getRandNum();
    $random_num2 = getRandNum();
    $operation = getRandOperationForCalc();
    line("Question: $random_num1 $operation $random_num2");
    $answer = prompt('Your answer');
    $right_answer = eval('return ' . $random_num1 . $operation . $random_num2 . ';');
    return [$answer, $right_answer];
}

//Вопрос-ответ по логике игры "НОД". Возвращает ответ юзера и правльный ответ.
function run_BrainGcd_logic(): array
{
    $random_num1 = getRandNum();
    $random_num2 = getRandNum();
    line("Question: $random_num1 $random_num2");
    $answer = prompt('Your answer');
    $right_answer = getGcd($random_num1, $random_num2);
    return [$answer, $right_answer];
}

//Вопрос-ответ по логике игры "Арифметическая прогрессия". Возвращает ответ юзера и правльный ответ.
function run_BrainProgression_logic(): array
{
    $random_start_num = getRandNum();
    $random_progression_pos_num = random_int(1, 10);
    $random_progressor_val = random_int(1, 10);
    for ($i = 0, $progr_line = ' '; $i < 10; $i++) {
        if ($i == $random_progression_pos_num - 1) {
            $progr_line .= '.. ';
        } else {
            $progr_line .= $random_start_num + $random_progressor_val * $i . ' ';
        }
    }
    line("Question: $progr_line");
    $answer = prompt('Your answer');
    $right_answer = $random_start_num + $random_progressor_val * ($random_progression_pos_num - 1);
    return [$answer, $right_answer];
}

//Вопрос-ответ по логике игры "Простое ли число?". Возвращает ответ юзера и правльный ответ.
function run_BrainPrime_logic(): array
{
    $random_num = getRandNum();
    line("Question: $random_num");
    $answer = prompt('Your answer');
    $right_answer = isPrime($random_num);
    return [$answer, $right_answer];
}

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
function getRandOperationForCalc(): string
{
    $operation_num = random_int(1, 3);
    switch ($operation_num) {
        case 1:
            return '+';
        case 2:
            return '-';
        case 3:
            return '*';
    }
}

//Возвращаем наибольший общий делитель двух чисел
function getGcd(int $a, int $b): int
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
