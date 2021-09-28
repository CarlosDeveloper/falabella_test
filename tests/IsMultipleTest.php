<?php

use PHPUnit\Framework\TestCase;
require_once('src\ValidateMultiples\ValidateIsMultiple.php');

class IsMultipleTest extends TestCase{
    private $multiple;

    public function setUp():void {
        $this->multiple = new ValidateIsMultiple();
    }

    public function testWhenIsMultiple() {
        $this->assertEquals(0,$this->multiple->isMultiple(0));
    }

    public function testWhenIsNotMultiple() {
        $this->assertEquals(1,$this->multiple->isMultiple(1));
    }

    public function testWhenIsNull() {
        $this->assertEquals(null,$this->multiple->isMultiple(null));
    }

}