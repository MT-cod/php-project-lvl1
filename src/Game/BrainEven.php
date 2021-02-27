<?php

namespace Projects\lvl1;

use function cli\line;
use function cli\prompt;

//Вопрос-ответ по логике игры "Проверка на чётность". Возвращает ответ юзера и правльный ответ.
function run_BrainEven_logic(): array
{
    $random_num = getRandNum();
    line("Question: $random_num");
    $answer = prompt('Your answer');
    $right_answer = checkEven($random_num);
    return [$answer, $right_answer];
}
