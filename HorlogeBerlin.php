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

        //We set the right geographical timezone
        date_default_timezone_set('Europe/Brussels');

        $seconds = array(false);
        $minutes = array(false,false,false,false);
        $fiveMinutes = array(false,false,false,false,false,false,false,false,false,false,false);
        $hours = array(false,false,false,false);
        $fiveHours = array(false,false,false,false);

        if($this->seconds(date('s')) === 0){
            $seconds[0] = true;
        }

        for($i=0; $i<$this->minutes(date('i')); $i++ ){
            $minutes[$i] = true;
        }

        for($i=0; $i<$this->fiveMinutes(date('i')); $i++ ){
            $fiveMinutes[$i] = true;
        }

        for($i=0; $i<$this->hours(date('H')); $i++ ){
            $hours[$i] = true;
        }

        for($i=0; $i<$this->fiveHours(date('H')); $i++ ){
            $fiveHours[$i] = true;
        }

        $horloge = array($seconds,$fiveHours,$hours,$fiveMinutes,$minutes);

        print_r($horloge);

        return $horloge;
}

}