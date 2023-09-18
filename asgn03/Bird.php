<?php

class Bird {
    var $habitat;
    var $food;
    var $nesting = "tree";
    var $conservation;
    var $song = "chirp";
    var $flying = "yes";
    static instance_count;
    static egg_num = 0;

    function can_fly() {
      if ( static::$flying == "yes" ) {
        $flying_string = "bird can fly";
        } else {
        $flying_string = " cannot fly and it stuck on the ground";
        }
        return $flying_string;
    }

    static function create() {

    }
}

static egg_num = "3-4, sometimes 5.";

class YellowBelliedFlyCatcher extends Bird {
    var $name = "yellow-bellied flycatcher";
    var $diet = "mostly insects.";
    var $song = "flat chilk";
}

class Kiwi extends Bird {
    var $name = "kiwi";
    var $diet = "omnivorous";
    var $flying = "no";
}
