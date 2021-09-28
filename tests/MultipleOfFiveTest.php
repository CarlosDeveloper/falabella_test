<?php

use PHPUnit\Framework\TestCase;
require_once('src\Multiples\MultipleOfFive.php');

class MultipleOfFiveTest extends TestCase{
    private $multiple;

    public function setUp():void {
        $this->multiple = new MultipleOfFive();
    }

    public function testWHenIsMultipleOfFive() {
        $this->assertEquals(0,$this->multiple->getMultiple(5));
    }

    public function testWhenModuleIsOne() {
        $this->assertEquals(1,$this->multiple->getMultiple(41));
    }

    public function testWhenModuleIsTwo() {
        $this->assertEquals(2,$this->multiple->getMultiple(67));
    }

    public function testWhenMultipleIsNull() {
        $this->assertEquals(0,$this->multiple->getMultiple(null));
    }

    public function testWhenItemisNull() {
        $this->assertEquals('require number',$this->multiple->getMultiple("sdsd"));
    }
}