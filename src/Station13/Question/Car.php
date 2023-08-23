<?php

namespace Src\Station13\Question;

class Car extends Vehicle{

    public function hazard() { echo "ハザードランプを点灯する";}

    public function run(){
        parent::$maxSpeed = 60;
        parent::run();
    }

    public function back() {
        $this->hazard();
        parent::back();
    }
}