<?php

namespace Src\Station07;

class Question
{
    public function one(): array
    {
        $array1 = ['北海道' => 1, '東京都' => 13, '大阪府' => 'XX'];
        $array2 = ['広島県' => 34, '京都府' => 26];
        $array3 = ['京都府' => 'XX', '大阪府' => 27];


        //最初のうちに'xx'を削除
        foreach ($array1 as $key => $value) {
            if ($value == 'XX') { unset($array1[$key]); }
        }

        foreach ($array2 as $key => $value) {
            if ($value == 'XX') { unset($array2[$key]); }
        }

        foreach ($array3 as $key => $value) {
            if ($value == 'XX') { unset($array3[$key]); }
        }


        $merged = array_merge($array1,$array2,$array3);

        return $merged;
    }

    public function two(): array
    {
        $firstNames = ['太郎', '次郎', '花子'];
        $lastNames = ['山田', '鈴木', '佐藤'];

        $merged = [];

        for ($i=0; $i <=2 ; $i++) { 
            array_push($merged,$lastNames[$i].$firstNames[$i]);
        }

        return $merged;
    }

    public function three(): array
    {
        $array = [
            ['name' => 'apple', 'price' => 140],
            ['name' => 'banana', 'price' => 200],
            ['name' => 'orange', 'price' => 120],
        ];

        return array_column($array,'price','name');
    }
}
