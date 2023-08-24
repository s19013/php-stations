<?php

namespace Src\Station17\Question;

class Question
{
    public function main(): void
    {
        $pianoSound = new PianoSound();
        $guitarSound = new GuitarSound();
        $keyboard = new Keyboard();

        echo $keyboard->play($pianoSound,"ド");
        echo $keyboard->play($guitarSound,"C");
    }
}
