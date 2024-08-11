<?php

use function cli\line;
use function cli\prompt;

/**
*@param array<mixed> $Answers;
*@param array<mixed> $Questions;
*@param int $numGame;
*/

function launch($Answers, $Questions, $numGame)
{
    $welcomeQuestion = [
        'What is the result of the expression?',
        'Find the greatest common divisor of given numbers.',
        'Answer "yes" if the number is even, otherwise answer "no".',
        'Answer "yes" if given number is prime. Otherwise answer "no".',
        'What number is missing in the progression?'
    ];
    switch ($numGame) {
        case 1:
            line($welcomeQuestion[0]);
            break;
        case 2:
            line($welcomeQuestion[1]);
            break;
        case 3:
            line($welcomeQuestion[2]);
            break;
        case 4:
            line($welcomeQuestion[3]);
            break;
        case 5:
            line($welcomeQuestion[4]);
            break;
    }
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
