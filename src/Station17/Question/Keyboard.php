<?php

namespace Src\Station17\Question;
class Keyboard
{
    // const string INSTRUMENT_NAME = "ピアノ";
    function play(SoundInterface $INSTRUMENT,string $scale) :void {
        if (!$INSTRUMENT->isValidatedInput($scale)) { 
            echo  "この音を鳴らすことはできません"; 
            return;
        }

        $returnedString =$INSTRUMENT->sound($scale);
        echo "{$returnedString}を鳴らします";
    }
}