<?php

namespace Projects\lvl1;

use function cli\line;
use function cli\prompt;

//Приветствуем игрока и узнаём его имя, запускаем нужную игру со своей логикой
function runGame($gameName): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, $name!");
    
    switch ($operation_num) 
    {
        case 'brain-even':
            line('Answer "yes" if the number is even, otherwise answer "no".');
        case 'brain-calc':
            line('What is the result of the expression?');
    }
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
    switch ($operation_num) 
    {
        case 1: return '+';
        case 2: return '-';
        case 3: return '/';
    }
}

//Играем в "Проверка на чётность"
function runBrainEvenGame(): void
{
    $name = promptUserNameAndGreetig();
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $random_num = getRandNum();
        $isEvenOrNo = checkEven($random_num);
        line("Question: $random_num");
        $answer = prompt('Your answer');
        if ($answer !== $isEvenOrNo) {
            line("'$answer' is wrong answer ;(. Correct answer was '$isEvenOrNo'.");
            line("Let's try again, $name!");
            exit;
        }
        line('Correct!');
    }
    line("Congratulations, $name!");
}

//Играем в "Калькулятор"
function runCalculaterGame(): void
{
    $name = promptUserNameAndGreetig();
    line('What is the result of the expression?');
}
