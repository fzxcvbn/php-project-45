<?php

namespace gcd;

use function cli\line;
use function cli\prompt;

function gcd_game()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $answer = 0;
    line('Find the greatest common divisor of given numbers.');
    $count_games = 3;
    for ($i = 0; $i < $count_games; $i++) {
        $first_num = rand(0, 100);
        $second_num = rand(0, 100);
        $full_question = "{$first_num} {$second_num}";
        line("Question: {$full_question}");
        while (($first_num != 0) && ($second_num != 0)) {
            if ($first_num > $second_num) {
                $first_num = $first_num % $second_num;
            } else {
                $second_num = $second_num % $first_num;
            }
        }
        $answer = $first_num + $second_num;
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
