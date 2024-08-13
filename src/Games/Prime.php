<?php

namespace prime;

use function cli\line;
use function cli\prompt;

use const GAMESCOUNT;

function startPrimeGame()
{
    $answer = '';
    $answers = [];
    $questions = [];
    for ($i = 0; $i < GAMESCOUNT; $i++) {
        $question = rand(0, 100);
        if ($question <= 1) {
            $answer = 'no';
        }
        for ($j = 2; $j < $question; $j++) {
            if ($question % $j === 0) {
                $answer = 'no';
                break;
            }
            $answer = 'yes';
        }
        array_push($answers, $answer);
        array_push($questions, $question);
    }
    launch($answers, $questions, 'Answer "yes" if given number is prime. Otherwise answer "no".');
}
