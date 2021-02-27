<?php

namespace Projects\lvl1;

use function cli\line;
use function cli\prompt;

//Вопрос-ответ по логике игры "Простое ли число?". Возвращает ответ юзера и правльный ответ.
function run_BrainPrime_logic(): array
{
    $random_num = getRandNum();
    line("Question: $random_num");
    $answer = prompt('Your answer');
    $right_answer = isPrime($random_num);
    return [$answer, $right_answer];
}
