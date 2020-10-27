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
}
