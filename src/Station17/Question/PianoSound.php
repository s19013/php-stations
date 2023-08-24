<?php

namespace Src\Station17\Question;
class PianoSound implements SoundInterface
{
    const  INSTRUMENT_NAME = "ピアノ";
    public function isValidatedInput(string $scale) : bool {
        $code = ["ド","レ","ミ","ファ","ソ","ラ","シ"];

        return in_array($scale,$code);
    }

    public function sound(string $scale) : string {
        return self::INSTRUMENT_NAME."の{$scale}";
    }
}
