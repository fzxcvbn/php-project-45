<?php

namespace welcome;

use function cli\line;
use function cli\prompt;

function ask_name()
{
    require_once(__DIR__ . '/../vendor/autoload.php');

    global $name;
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
