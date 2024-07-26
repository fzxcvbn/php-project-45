<?php

namespace welcome;

use function cli\line;
use function cli\prompt;

function askName()
{
    require_once(__DIR__ . '/../vendor/autoload.php');
    
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
