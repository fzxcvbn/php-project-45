<?php

use function cli\line;
use function cli\prompt;

const GAMESCOUNT = 3;

/**
*@param array<mixed> $answers;
*@param array<mixed> $questions;
*@param string $welcomeQuestion;
*/

function launch($answers, $questions, $welcomeQuestion)
{
    line($welcomeQuestion);
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    foreach ($questions as $index => $question) {
        line("Question: {$question}");
        $userAnswer = prompt('Your answer');
        if ($answers[$index] == $userAnswer) {
            line('Correct!');
        } else {
            line("{$userAnswer} is wrong answer ;(. Correct answer was {$answers[$index]}.");
            line("Let's try again, %s!", $name);
            exit;
        }
    }
    line("Congratulations, %s!", $name);
}
