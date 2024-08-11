<?php

namespace calc;

use function cli\line;
use function cli\prompt;

function startCalcGame()
{
    $signs = ['+', '-', '*'];
    $Answers = [];
    $Questions = [];
    $gamesCount = 3;
    for ($i = 0; $i < $gamesCount; $i++) {
        $randSign = array_rand($signs);
        $firstNum = rand(0, 100);
        $secondNum = rand(0, 100);
        $question = "{$firstNum} {$signs[$randSign]} {$secondNum}";
        switch ($signs[$randSign]) {
            case '+':
                $answer = $firstNum + $secondNum;
                break;
            case '-':
                $answer = $firstNum - $secondNum;
                break;
            case '*':
                $answer = $firstNum * $secondNum;
                break;
        }
        array_push($Answers, $answer);
        array_push($Questions, $question);
    }
    $numGame = 1;
    launch($Answers, $Questions, $numGame);
}
