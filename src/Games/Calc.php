<?php

namespace calc;

use function cli\line;
use function cli\prompt;

function startCalcGame()
{
    askAQuetionCalc();
    $signs = ['+', '-', '*'];
    $aAnswer = [];
    $aQuestion = [];
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
        array_push($aAnswer, $answer);
        array_push($aQuestion, $question);
    }
    launch($aAnswer, $aQuestion);
}
