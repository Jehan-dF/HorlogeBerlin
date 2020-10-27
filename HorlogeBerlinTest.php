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
    public function test_min_given1_shouldReturn1(){
        $actual = $this->horlogeBerlin->minutes(1);
        $this->assertEquals(1,$actual);
    }
}
