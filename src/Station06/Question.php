<?php

namespace Src\Station06;

class Question
{
    public function main(): array
    {
        $array = ['red', 'blue', 'yellow'] ;

        // yellow削除
        array_pop($array);

        // green挿入
        array_splice($array, 1, 0, "green");

        array_unshift($array,'black');

        array_unshift($array,'white');

        return $array;
    }
}
