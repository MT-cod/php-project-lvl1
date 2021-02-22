<?php

namespace Projects\lvl1\cli;

use function line;
use function prompt;

function run()
{
line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
}
