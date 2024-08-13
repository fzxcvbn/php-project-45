<?php

namespace prime;

use function cli\line;
use function cli\prompt;
use const gamesCount;

function startPrimeGame()
{
    $answer = '';
    $answers = [];
    $questions = [];
    for ($i = 0; $i < gamesCount; $i++) {
        $question = rand(0, 100);
        for ($j = 2; $j < $question; $j++) {
            if ($question % $j === 0) {
                $answer = 'no';
                break;
            } else {
                $answer = 'yes';
                break;
            }
        }
        array_push($answers, $answer);
        array_push($questions, $question);
    }
    launch($answers, $questions, 'Answer "yes" if given number is prime. Otherwise answer "no".');
}
