<?php

namespace HorlogeBerlin;
class HorlogeBerlin
{
    public function minutes (int $minutes) : int {
        return $minutes%5;
    }

    public function fiveMinutes (int $minutes) : int {
        return floor($minutes/5);
    }

    public function hours (int $hours) : int {
        return $hours%5;
    }

    public function fiveHours (int $hours) : int {
        return floor($hours/5);
    }

    public function seconds (int $seconds) : int {
        return $seconds%2;
    }
    public function horloge() : array {
        $seconds = array(false);
        $minutes = array(false,false,false,false);
        $fiveMinutes = array(false,false,false,false,false,false,false,false,false,false,false);
        $hours = array(false,false,false,false);
        $fiveHours = array(false,false,false,false);
        $horloge = array($seconds,$fiveHours,$hours,$fiveMinutes,$minutes);

}

}