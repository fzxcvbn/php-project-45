<?php

namespace calc;

use function cli\line;
use function cli\prompt;
use const gamesCount;

function startCalcGame()
{
    $signs = ['+', '-', '*'];
    $answers = [];
    $questions = [];
    for ($i = 0; $i < gamesCount; $i++) {
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
        array_push($answers, $answer);
        array_push($questions, $question);
    }
    launch($answers, $questions, 'What is the result of the expression?');
}
