<?php

namespace progression;

use function cli\line;
use function cli\prompt;

use const GAMESCOUNT;

function startProgressionGame()
{
    $answers = [];
    $questions = [];
    for ($i = 0; $i < GAMESCOUNT; $i++) {
        $firstElementProgression = rand(0, 50);
        $differenceProgression = rand(0, 30);
        $elementsProgression = rand(5, 15);
        $progression = [$firstElementProgression];
        for ($j = 1; $j < $elementsProgression; $j++) {
            $nextElementProgression = $firstElementProgression + $differenceProgression;
            $progression[] = ($nextElementProgression);
            $firstElementProgression = $nextElementProgression;
        }
        $index = rand(0, $elementsProgression - 1);
        $answer = $progression[$index];
        $replacements = array($index => "..");
        $progression = array_replace($progression, $replacements);
        $question = (implode(' ', $progression));
        array_push($answers, $answer);
        array_push($questions, $question);
    }
    launch($answers, $questions, 'What number is missing in the progression?');
}
