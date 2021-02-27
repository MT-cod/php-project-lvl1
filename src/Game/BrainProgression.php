<?php

namespace Projects\lvl1;

use function cli\line;
use function cli\prompt;

//Вопрос-ответ по логике игры "Арифметическая прогрессия". Возвращает ответ юзера и правльный ответ.
function run_BrainProgression_logic(): array
{
    $random_start_num = getRandNum();
    $random_progression_pos_num = random_int(1, 10);
    $random_progressor_val = random_int(1, 10);
    $progress_line = [];
    for ($i = 0; $i < 10; $i++) {
        if ($i == $random_progression_pos_num - 1) {
            $progress_line[] = '..';
        } else {
            $progress_line[] = $random_start_num + $random_progressor_val * $i;
        }
    }
    $progress_line = implode(' ', $progress_line);
    line("Question: $progress_line");
    $answer = prompt('Your answer');
    $right_answer = $random_start_num + $random_progressor_val * ($random_progression_pos_num - 1);
    return [$answer, $right_answer];
}
