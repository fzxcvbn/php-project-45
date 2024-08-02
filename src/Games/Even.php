<?php

namespace even;

use function cli\line;
use function cli\prompt;

function evenGame()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $countGames = 3;
    $arrayAnswer = [];
    $arrayQuestion = [];
    for ($i = 0; $i < $countGames; $i++) {
        $question = rand(0, 100);
        if ($question % 2 == 0) {
            $answer = 'yes';
        } else {
            $answer = 'no';
        }
        array_push($arrayAnswer, $answer);
        array_push($arrayQuestion, $question);
    }
    engine($arrayAnswer, $arrayQuestion);
}
