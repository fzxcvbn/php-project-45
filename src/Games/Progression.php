<?php

namespace progression;

use function cli\line;
use function cli\prompt;

function startProgressionGame()
{
    $gamesCount = 3;
    $Answers = [];
    $Questions = [];
    for ($i = 0; $i < $gamesCount; $i++) {
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
        $question = (implode(' ', $progression));
        array_push($Answers, $answer);
        array_push($Questions, $question);
    }
    launch($Answers, $Questions, 'What number is missing in the progression?');
}
