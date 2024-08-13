<?php

namespace gcd;

use function cli\line;
use function cli\prompt;
use const gamesCount;

function startGcdGame()
{
    $answers = [];
    $questions = [];
    for ($i = 0; $i < gamesCount; $i++) {
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
        array_push($answers, $answer);
        array_push($questions, $question);
    }
    launch($answers, $questions, 'Find the greatest common divisor of given numbers.');
}
