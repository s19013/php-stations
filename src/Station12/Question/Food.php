<?php

namespace Src\Station12\Question;

use Carbon\Carbon;
class Food extends Product
{
    // property はアクセス修飾子・型定義不問、 __construct での定義でなくとも良い
    public $useByDate;

    public function __construct($originalPrice,$useByDate) {
        parent::__construct($originalPrice);

        $this->useByDate = $useByDate;
    }

    public function price() {
        // 全部分にして計算 まあ､dateで計算してタイムスタンプをだす感じ?
        // 秒でやってもいいけどどのみち分に治すから
        $diffInSeconds = $this->useByDate->diffInSeconds(Carbon::now());

        // 5時間ちょうどが17999
        // 強引だけど以下の方法を取るか｡｡｡

        // 5時間未満
        if ($diffInSeconds < 17999) {
            return floor($this->originalPrice / 2);
        }

        return $this->originalPrice;
    }
}
