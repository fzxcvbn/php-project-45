<?php

namespace prime;

use function cli\line;
use function cli\prompt;

function primeGame()
{
    global $name;
    global $answer; 
    global $i;
    global $yourAnswer;
    welcome();
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $primeNums = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
    $countGames = 3;
    for ($i = 0; $i < $countGames; $i++) {
        $num = rand(0, 100);
        line("Question: {$num}");
        foreach ($primeNums as $index => $primeNum) {
            if ($primeNums[$index] == $num) {
                $answer = 'yes';
                break;
            } else {
                $answer = 'no';
            }
        }
        yourAnswer(); 
        if ($answer != $yourAnswer) {
            break;
        }
        if ($i == 2) {
            line("Congratulations, %s!", $name);
        }
    }
}
