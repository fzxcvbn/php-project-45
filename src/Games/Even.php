<?php

namespace even;

use function cli\line;
use function cli\prompt;

function startEvenGame()
{
    $gamesCount = 3;
    $Answers = [];
    $Questions = [];
    for ($i = 0; $i < $gamesCount; $i++) {
        $question = rand(0, 100);
        if ($question % 2 == 0) {
            $answer = 'yes';
        } else {
            $answer = 'no';
        }
        array_push($Answers, $answer);
        array_push($Questions, $question);
    }
    $numGame = 3;
    launch($Answers, $Questions, $numGame);
}
