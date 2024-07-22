<?php

namespace even;

use function cli\line;
use function cli\prompt;

function even_game()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line('Answer "yes" if the number is even, otherwise answer "no".');
    $num = rand(0, 100);
    line("Question: {$num}");
    $answer = prompt('Your answer');
    $count_games = 3;
    for ($i = 1; $i < $count_games; $i++) {
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
