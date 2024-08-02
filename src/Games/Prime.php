<?php

namespace prime;

use function cli\line;
use function cli\prompt;

function primeGame()
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $primeNums = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
    $countGames = 3;
    $answer = '';
    $arrayAnswer = [];
    $arrayQuestion = [];
    for ($i = 0; $i < $countGames; $i++) {
        $question = rand(0, 100);
        foreach ($primeNums as $primeNum) {
            if ($primeNum == $question) {
                $answer = 'yes';
                break;
            } else {
                $answer = 'no';
            }
        }
        array_push($arrayAnswer, $answer);
        array_push($arrayQuestion, $question);
    }
    engine($arrayAnswer, $arrayQuestion);
}
