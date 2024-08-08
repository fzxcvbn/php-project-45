<?php

namespace even;

use function cli\line;
use function cli\prompt;

function startEvenGame()
{
    askAQuetionEven();
    $gamesCount = 3;
    $aAnswer = [];
    $aQuestion = [];
    for ($i = 0; $i < $gamesCount; $i++) {
        $question = rand(0, 100);
        if ($question % 2 == 0) {
            $answer = 'yes';
        } else {
            $answer = 'no';
        }
        array_push($aAnswer, $answer);
        array_push($aQuestion, $question);
    }
    launch($aAnswer, $aQuestion);
}
