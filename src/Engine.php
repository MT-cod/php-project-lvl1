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
