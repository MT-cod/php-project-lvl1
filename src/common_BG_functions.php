<?php

namespace Projects\lvl1;

//Если переданное число чётное, то возвращаем'yes', иначе 'no'
function even_check(int $num): string
{
    return ($num % 2 == 0) ? 'yes' : "no";
}

//Возвращаем случайное число от 1 до 100
function get_rand_num(): int
{
    return random_int(1, 100);
}
