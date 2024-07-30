<?php

namespace calc;

use function cli\line;
use function cli\prompt;
    
function calcGame()
{
    global $name;
    global $answer; 
    global $i;
    global $yourAnswer;
    welcome();
    $signs = ['+', '-', '*'];
    line('What is the result of the expression?');
    $countGames = 3;
    for ($i = 0; $i < $countGames; $i++) {
        $randSign = array_rand($signs);
        $firstNum = rand(0, 100);
        $secondNum = rand(0, 100);
        $fullQuestion = "{$firstNum} {$signs[$randSign]} {$secondNum}";
        line("Question: {$fullQuestion}");
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
        yourAnswer();
        if ($answer != $yourAnswer) {
            break;
        }
    }
}
