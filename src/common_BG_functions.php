<?php

namespace Projects\lvl1;

use function cli\line;
use function cli\prompt;

//Приветствуем игрока и узнаём его имя
function getUserNameAndGreetig(): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, $name!");
    return $name;
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

//Играем в "Проверка на чётность"
function runBrainEvenGame()
{
    $name = getUserNameAndGreetig();
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
