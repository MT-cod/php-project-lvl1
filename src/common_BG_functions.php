<?php
namespace Projects\lvl1;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function cli\line;
use function cli\prompt;

function check_answer_for_evengame(int $num, string $answer): string
{
    
}


function parity_check(int $num): string
{
    return ($num % 2 == 0) ? 'even' : "odd";
}

function get_rand_num(): int
{
    return random_int(1 , 100);
}