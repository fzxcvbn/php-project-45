<?php

use function cli\line;
use function cli\prompt;

/**
*@param array<mixed> $Answers;
*@param array<mixed> $Questions;
*@param string $welcomeQuestion;
*/

function launch($Answers, $Questions, $welcomeQuestion)
{
    line($welcomeQuestion);
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    foreach ($Questions as $index => $question) {
        line("Question: {$question}");
        $yourAnswer = prompt('Your answer');
        if ($Answers[$index] == $yourAnswer) {
            line('Correct!');
        } else {
            line("{$yourAnswer} is wrong answer ;(. Correct answer was {$Answers[$index]}.");
            line("Let's try again, %s!", $name);
            exit;
        }
    }
    line("Congratulations, %s!", $name);
}
