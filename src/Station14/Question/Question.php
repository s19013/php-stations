<?php

namespace Src\Station14\Question;

class Question
{
    public function main(): void
    {
        Car::pickup();
        Car::getDoors();
    }
}
