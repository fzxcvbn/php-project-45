<?php

namespace calc;

use function cli\line;
use function cli\prompt;

function calcGame()
{
    line('What is the result of the expression?');
    $signs = ['+', '-', '*'];
    $arrayAnswer = [];
    $arrayQuestion = [];
    $countGames = 3;
    for ($i = 0; $i < $countGames; $i++) {
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
        array_push($arrayAnswer, $answer);
        array_push($arrayQuestion, $question);
    }
    engine($arrayAnswer, $arrayQuestion);
}
