<?php

namespace gcd;

use function cli\line;
use function cli\prompt;

function startGcdGame()
{
    askAQuetionGcd();
    $gamesCount = 3;
    $aAnswer = [];
    $aQuestion = [];
    for ($i = 0; $i < $gamesCount; $i++) {
        $firstNum = rand(0, 100);
        $secondNum = rand(0, 100);
        $question = "{$firstNum} {$secondNum}";
        while (($firstNum != 0) && ($secondNum != 0)) {
            if ($firstNum > $secondNum) {
                $firstNum = $firstNum % $secondNum;
            } else {
                $secondNum = $secondNum % $firstNum;
            }
        }
        $answer = $firstNum + $secondNum;
        array_push($aAnswer, $answer);
        array_push($aQuestion, $question);
    }
    launch($aAnswer, $aQuestion);
}
