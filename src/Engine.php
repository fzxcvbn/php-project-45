<?php

use function cli\line;
use function cli\prompt;

/**
*@param array<mixed> $arrayAnswer;
*@param array<mixed> $arrayQuestion;
*/

function engine($arrayAnswer, $arrayQuestion)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $countGames = 3;
    $correctAnswer = 0;
    foreach ($arrayQuestion as $index => $question) {
        line("Question: {$question}");
        $yourAnswer = prompt('Your answer');
        if ($arrayAnswer[$index] == $yourAnswer) {
            line('Correct!');
            $correctAnswer += 1;
        } else {
            line("{$yourAnswer} is wrong answer ;(. Correct answer was {$arrayAnswer[$index]}.");
            line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($correctAnswer == 3) {
        line("Congratulations, %s!", $name);
    }
}
