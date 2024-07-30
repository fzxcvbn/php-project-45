<?php

use function cli\line;
use function cli\prompt;

function welcome()
{
    global $name;
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
function yourAnswer()
{
    global $name;
    global $answer;
    global $yourAnswer;
    for ($g = 0; $g < 1; $g++) {
        $yourAnswer = prompt('Your answer');
        if ($answer == $yourAnswer) {
            line('Correct!');
        } else {
            line("{$yourAnswer} is wrong answer ;(. Correct answer was {$answer}.");
            line("Let's try again, %s!", $name);
        }
    }
}
