<?php

namespace HorlogeBerlin;
class HorlogeBerlin
{
    public function minutes (int $int) : int {
        return $int%5;
    }

    public function fiveMinutes (int $int) : int {
        return floor($int/5);
    }

    public function hours (int $int) : int {
        return $int%5;
    }

    public function fiveHours (int $int) : int {
        return floor($int/5);
    }

}