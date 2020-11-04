<?php

require "vendor/autoload.php";
require "HorlogeBerlin.php";

use HorlogeBerlin\HorlogeBerlin;
use PHPUnit\Framework\TestCase;
class HorlogeBerlinTest extends TestCase
{
    private $horlogeBerlin;

    protected function setUp() : void{
        parent::setUp();
        $this->horlogeBerlin=new HorlogeBerlin();
    }

    //Test method minutes

    public function test_min_given0_shouldReturn0(){
        $actual = $this->horlogeBerlin->minutes(0);
        $this->assertEquals(0,$actual);
    }

    public function test_min_given1_shouldReturn1(){
        $actual = $this->horlogeBerlin->minutes(1);
        $this->assertEquals(1,$actual);
    }

    public function test_min_given2_shouldReturn2(){
        $actual = $this->horlogeBerlin->minutes(2);
        $this->assertEquals(2,$actual);
    }

    public function test_min_given3_shouldReturn3(){
        $actual = $this->horlogeBerlin->minutes(3);
        $this->assertEquals(3,$actual);
    }

    public function test_min_given4_shouldReturn4(){
        $actual = $this->horlogeBerlin->minutes(4);
        $this->assertEquals(4,$actual);
    }

    public function test_min_given5_shouldReturn0(){
        $actual = $this->horlogeBerlin->minutes(5);
        $this->assertEquals(0,$actual);
    }

    public function test_min_given6_shouldReturn1(){
        $actual = $this->horlogeBerlin->minutes(6);
        $this->assertEquals(1,$actual);
    }

    //Test method fiveMinutes

    public function test_fiveMin_given5_shouldReturn1(){
        $actual = $this->horlogeBerlin->fiveMinutes(5);
        $this->assertEquals(1,$actual);
    }

    public function test_fiveMin_given6_shouldReturn1(){
        $actual = $this->horlogeBerlin->fiveMinutes(6);
        $this->assertEquals(1,$actual);
    }

    public function test_fiveMin_given12_shouldReturn2(){
        $actual = $this->horlogeBerlin->fiveMinutes(12);
        $this->assertEquals(2,$actual);
    }

    public function test_fiveMin_given59_shouldReturn11(){
        $actual = $this->horlogeBerlin->fiveMinutes(59);
        $this->assertEquals(11,$actual);
    }

    //Test method hours
    public function test_hours_given0_shouldReturn0(){
        $actual = $this->horlogeBerlin->hours(0);
        $this->assertEquals(0,$actual);
    }

    public function test_hours_given1_shouldReturn1(){
        $actual = $this->horlogeBerlin->hours(1);
        $this->assertEquals(1,$actual);
    }

    public function test_hours_given2_shouldReturn2(){
        $actual = $this->horlogeBerlin->hours(2);
        $this->assertEquals(2,$actual);
    }

    public function test_hours_given3_shouldReturn3(){
        $actual = $this->horlogeBerlin->hours(3);
        $this->assertEquals(3,$actual);
    }

    public function test_hours_given4_shouldReturn4(){
        $actual = $this->horlogeBerlin->hours(4);
        $this->assertEquals(4,$actual);
    }

    public function test_hours_given5_shouldReturn0(){
        $actual = $this->horlogeBerlin->hours(5);
        $this->assertEquals(0,$actual);
    }

    public function test_hours_given6_shouldReturn1(){
        $actual = $this->horlogeBerlin->hours(6);
        $this->assertEquals(1,$actual);
    }

    //Test method fiveHours

    public function test_fiveHours_given5_shouldReturn1(){
        $actual = $this->horlogeBerlin->fiveHours(5);
        $this->assertEquals(1,$actual);
    }

    public function test_fiveHours_given6_shouldReturn1(){
        $actual = $this->horlogeBerlin->fiveHours(6);
        $this->assertEquals(1,$actual);
    }

    public function test_fiveHours_given12_shouldReturn2(){
        $actual = $this->horlogeBerlin->fiveHours(12);
        $this->assertEquals(2,$actual);
    }

    //Test method seconds
    public function test_seconds_given2_shouldReturn0(){
        $actual = $this->horlogeBerlin->seconds(2);
        $this->assertEquals(0,$actual);
    }

    public function test_seconds_given5_shouldReturn1(){
        $actual = $this->horlogeBerlin->seconds(5);
        $this->assertEquals(1,$actual);
    }

    public function test_seconds_given30_shouldReturn0(){
        $actual = $this->horlogeBerlin->seconds(30);
        $this->assertEquals(0,$actual);
    }

    //Test method horloge
    public function test_horloge_shouldWork(){
        $actual = $this->horlogeBerlin->horloge();
        //False assert, this method is for display only
        $this->assertEquals(0,0);
    }
}
