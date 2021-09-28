<?php

use PHPUnit\Framework\TestCase;
require_once('src\Messages\Message.php');

class GetMessageTest extends TestCase{
    private $multiple;
    

    public function setUp():void {
        //$this->multiple = new Message(array('01' => 'Falabella', '10' => 'It', '00' => 'Integraciones', '01' => 3));
    }

    public function testWhenGetMessageIsFalabella() {
        $this->multiple = new Message(array('01' => 'Falabella', '10' => 'It', '00' => 'Integraciones', '11' => 3));
        $this->multiple->setMessage('01');
        $this->assertEquals('Falabella',$this->multiple->getMessage());
    }

    public function testWhenGetMessageIsIt() {
        $this->multiple = new Message(array('01' => 'Falabella', '10' => 'It', '00' => 'Integraciones', '11' => 5));
        $this->multiple->setMessage('10');
        $this->assertEquals('It',$this->multiple->getMessage());
    }

    public function testWhenGetMessageIsIntegraciones() {
        $this->multiple = new Message(array('01' => 'Falabella', '10' => 'It', '00' => 'Integraciones', '11' => 30));
        $this->multiple->setMessage('00');
        $this->assertEquals('Integraciones',$this->multiple->getMessage());
    }

    public function testWhenGetMessageIsNull() {
        $this->multiple = new Message(array('01' => 'Falabella', '10' => 'It', '00' => 'Integraciones', '11' => 30));
        $this->multiple->setMessage(null);
        $this->assertEquals(null,$this->multiple->getMessage());
    }

    public function testWhenGetIsString() {
        $this->multiple = new Message(array('01' => 'Falabella', '10' => 'It', '00' => 'Integraciones', '11' => 30));
        $this->multiple->setMessage('Hola');
        $this->assertEquals(null,$this->multiple->getMessage());
    }

    public function testWhenGetArrayMessageIsNull() {
        $this->multiple = new Message(null);
        $this->multiple->setMessage('01');
        $this->assertEquals(null,$this->multiple->getMessage());
    }
    

}