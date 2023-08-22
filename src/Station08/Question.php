<?php

namespace Src\Station08;

class Question
{
    public function main(): array
    {
        $twoDimensionalArray = [
            ["アザラシ","アライグマ"],
            ['ウサギ','ウシ','ウマ'],
            ['オオカミ','オットセイ']
        ];

        // なんか入れ直せってさ
        $twoDimensionalArray[1][0] = 'イヌ';
        $twoDimensionalArray[1][1] = 'イルカ';
        $twoDimensionalArray[2][0] = 'ウサギ';
        $twoDimensionalArray[2][1] = 'ウシ';
        $twoDimensionalArray[2][2] = 'ウマ';

        unset($twoDimensionalArray[1][2]);

        return $twoDimensionalArray;

    }
}
