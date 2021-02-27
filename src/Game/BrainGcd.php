<?php

namespace Projects\lvl1;

use function cli\line;
use function cli\prompt;

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
