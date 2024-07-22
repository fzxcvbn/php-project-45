<?php

namespace calc;

use function cli\line;
use function cli\prompt;

function calc_game()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $signs = ['+', '-', '*'];
    line('What is the result of the expression?');
    $count_games = 3;
    for ($i = 0; $i < $count_games; $i++) {
        $rand_sign = array_rand($signs);
        $first_num = rand(0, 100);
        $second_num = rand(0, 100);
        $full_question = "{$first_num} {$signs[$rand_sign]} {$second_num}";
        line("Question: {$full_question}");
        switch ($signs[$rand_sign]) {
            case '+':
                $answer = $first_num + $second_num;
                break;
            case '-':
                $answer = $first_num - $second_num;
                break;
            case '*':
                $answer = $first_num * $second_num;
                break;
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
