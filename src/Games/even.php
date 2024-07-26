<?php

namespace even;

use function cli\line;
use function cli\prompt;

function evenGame()
{
    global $name;
    welcome();
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $num = rand(0, 100);
    line("Question: {$num}");
    $answer = prompt('Your answer');
    $countGames = 3;
    for ($i = 1; $i < $countGames; $i++) {
        if ((($num % 2 == 0) && ($answer == 'yes')) || (($num % 2 != 0) && ($answer == 'no'))) {
            line('Correct!');
            $num = rand(0, 100);
            line("Question: {$num}");
            $answer = prompt('Your answer');
        }
        if (($num % 2 != 0) && ($answer == 'yes')) {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.");
            line("Let's try again, %s!", $name);
            break;
        }
        if (($num % 2 == 0) && ($answer == 'no')) {
            line("'no' is wrong answer ;(. Correct answer was 'yes'.");
            line("Let's try again, %s!", $name);
            break;
        }
        if ($i >= 2) {
            line('Correct!');
            line("Congratulations, %s!", $name);
        }
    }
}
