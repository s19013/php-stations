<?php

namespace Src\Station15\Question;

class Question
{
    public function main($multiplieds, $multiplier): array
    {
        return (new Calculator)->multiply($multiplieds, $multiplier);
    }
}

