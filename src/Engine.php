<?php

use function cli\line;
use function cli\prompt;

/**
*@param array<mixed> $aAnswer;
*@param array<mixed> $aQuestion;
*/

function launch($aAnswer, $aQuestion)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    foreach ($aQuestion as $index => $question) {
        line("Question: {$question}");
        $yourAnswer = prompt('Your answer');
        if ($aAnswer[$index] == $yourAnswer) {
            line('Correct!');
        } else {
            line("{$yourAnswer} is wrong answer ;(. Correct answer was {$aAnswer[$index]}.");
            line("Let's try again, %s!", $name);
            exit;
        }
    }
    line("Congratulations, %s!", $name);
}

function askAQuetionCalc()
{
    line('What is the result of the expression?');
}

function askAQuetionGcd()
{
    line('Find the greatest common divisor of given numbers.');
}

function askAQuetionEven()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
}

function askAQuetionPrime()
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
}

function askAQuetionProgression()
{
    line('What number is missing in the progression?');
}
