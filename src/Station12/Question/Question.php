<?php

namespace Src\Station12\Question;

class Question
{
    public function main(int $originalPrice, $useByDate): int
    {
        return (new Food($originalPrice,$useByDate))->price();
    }
}