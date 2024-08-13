<?php

namespace even;

use function cli\line;
use function cli\prompt;
use const gamesCount;

function startEvenGame()
{
    $answers = [];
    $questions = [];
    for ($i = 0; $i < gamesCount; $i++) {
        $question = rand(0, 100);
        if ($question % 2 == 0) {
            $answer = 'yes';
        } else {
            $answer = 'no';
        }
        array_push($answers, $answer);
        array_push($questions, $question);
    }
    launch($answers, $questions, 'Answer "yes" if the number is even, otherwise answer "no".');
}
