<?php

namespace Src\Station14\Question;

class Car {
    const DOOR = 5;

    public static $passenger = 0;

    public static function getPassenger() { echo self::$passenger; }

    public static function pickup() {
        self::$passenger += 1;
        self::getPassenger();
    }

    public static function getDoors(){
        echo self::DOOR;
    }

}