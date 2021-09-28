<?php

use PHPUnit\Framework\TestCase;
require_once('src\Multiples\MultipleOfThree.php');
require_once('src\Multiples\MultipleOfFive.php');

class MultipleOfThreeTest extends TestCase{
    private $multiple;

    public function setUp():void {
        $this->multiple = new MultipleOfThree();
    }

    public function testWHenIsMultipleOfthree() {
        $this->assertEquals(0,$this->multiple->getMultiple(3));
    }

    public function testWhenModuleIsOne() {
        $this->assertEquals(1,$this->multiple->getMultiple(16));
    }

    public function testWhenModuleIsTwo() {
        $this->assertEquals(2,$this->multiple->getMultiple(38));
    }

    public function testWhenMultipleIsNull() {
        $this->assertEquals(0,$this->multiple->getMultiple(null));
    }
    
    public function testWhenItemisString() {
        $this->assertEquals('require number',$this->multiple->getMultiple("sdsd"));
    }
}