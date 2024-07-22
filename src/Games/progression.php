<?php

namespace progression;

use function cli\line;
use function cli\prompt;

function progression_game()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $answer = 0;
    line('What number is missing in the progression?');
    $count_games = 3;
    for ($i = 0; $i < $count_games; $i++) {
        $a = rand(0, 50);
        $d = rand(0, 30);
        $elements_progression = rand(5, 15);
        $progression = [$a];
        for ($j = 1; $j < $elements_progression; $j++) {
            $c = $a + $d;
            $progression[] = ($c);
            $a = $c;
        }
        $index = rand(0, $elements_progression - 1);
        $answer = $progression[$index];
        $replacements = array($index => "..");
        $progression = array_replace($progression, $replacements);
        print_r(implode(' ', $progression));
        print_r("\n");
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
