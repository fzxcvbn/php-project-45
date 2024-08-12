<?php

namespace gcd;

use function cli\line;
use function cli\prompt;

function startGcdGame()
{
    $gamesCount = 3;
    $Answers = [];
    $Questions = [];
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
        array_push($Answers, $answer);
        array_push($Questions, $question);
    }
    launch($Answers, $Questions, 'Find the greatest common divisor of given numbers.');
}
