<?php

namespace gcd;

use function cli\line;
use function cli\prompt;

function gcdGame()
{
    global $name; $answer; $i; $yourAnswer;
    welcome();
    $answer = 0;
    line('Find the greatest common divisor of given numbers.');
    $countGames = 3;
    for ($i = 0; $i < $countGames; $i++) {
        $firstNum = rand(0, 100);
        $secondNum = rand(0, 100);
        $fullQuestion = "{$firstNum} {$secondNum}";
        line("Question: {$fullQuestion}");
        while (($firstNum != 0) && ($secondNum != 0)) {
            if ($firstNum > $secondNum) {
                $firstNum = $firstNum % $secondNum;
            } else {
                $secondNum = $secondNum % $firstNum;
            }
        }
        $answer = $firstNum + $secondNum;
        yourAnswer();
    }
}
