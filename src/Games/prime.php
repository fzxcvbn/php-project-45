<?php

namespace prime;

use function cli\line;
use function cli\prompt;

function prime_game()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $prime_nums = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
    $count_games = 3;
    for ($i = 0; $i < $count_games; $i++) {
        $num = rand(0, 100);
        line("Question: {$num}");
        foreach ($prime_nums as $index => $prime_num) {
            if ($prime_nums[$index] == $num) {
                $answer = 'yes';
                break;
            } else {
                $answer = 'no';
            }
        }

        $your_answer = prompt('Your answer');
        if ($answer == $your_answer) {
            line('Correct!');
        } else {
            line("{$your_answer} is wrong answer ;(. Correct answer was {$answer}.");
            line("Let's try again, %s!", $name);
            break;
        }
        if ($i == 2) {
            line("Congratulations, %s!", $name);
        }
    }
}
