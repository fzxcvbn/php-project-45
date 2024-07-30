<?php

namespace progression;

use function cli\line;
use function cli\prompt;

function progressionGame()
{
    global $name;
    global $answer;
    global $i;
    global $yourAnswer;
    welcome();
    $answer = 0;
    line('What number is missing in the progression?');
    $countGames = 3;
    for ($i = 0; $i < $countGames; $i++) {
        $a = rand(0, 50);
        $d = rand(0, 30);
        $elementsProgression = rand(5, 15);
        $progression = [$a];
        for ($j = 1; $j < $elementsProgression; $j++) {
            $c = $a + $d;
            $progression[] = ($c);
            $a = $c;
        }
        $index = rand(0, $elementsProgression - 1);
        $answer = $progression[$index];
        $replacements = array($index => "..");
        $progression = array_replace($progression, $replacements);
        print_r("Question: ");
        print_r(implode(' ', $progression));
        print_r("\n");
        yourAnswer();
        if ($answer != $yourAnswer) {
            break;
        }
        if ($i == 2) {
            line("Congratulations, %s!", $name);
        }
    }
}
