<?php

namespace gcd;

use function cli\line;
use function cli\prompt;

function gcdGame()
{
    line('Find the greatest common divisor of given numbers.');
    $countGames = 3;
    $arrayAnswer = [];
    $arrayQuestion = [];
    for ($i = 0; $i < $countGames; $i++) {
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
        array_push($arrayAnswer, $answer);
        array_push($arrayQuestion, $question);
    }
    engine($arrayAnswer, $arrayQuestion);
}
