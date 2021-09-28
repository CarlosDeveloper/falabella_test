<?php

use PHPUnit\Framework\TestCase;
require_once('src\Messages\Message.php');

class SetMessageTest extends TestCase{
    private $multiple;
    

    public function setUp():void {
        //$this->multiple = new Message(array('01' => 'Falabella', '10' => 'It', '00' => 'Integraciones', '01' => 3));
    }

    public function testWhenSetMessageIsFalabella() {
        $this->multiple = new Message(array('01' => 'Falabella', '10' => 'It', '00' => 'Integraciones', '11' => 3));
        $this->assertEquals(null,$this->multiple->setMessage('01'));
        //$this->assertEquals('Falabella',$this->multiple->getMessage());
    }

    public function testWhenSetMessageIsIt() {
        $this->multiple = new Message(array('01' => 'Falabella', '10' => 'It', '00' => 'Integraciones', '11' => 5));
        $this->assertEquals(null,$this->multiple->setMessage('10'));
        //$this->assertEquals('It',$this->multiple->getMessage());
    }

    public function testWhenSetMessageIsIntegraciones() {
        $this->multiple = new Message(array('01' => 'Falabella', '10' => 'It', '00' => 'Integraciones', '11' => 30));
        $this->assertEquals(null,$this->multiple->setMessage('00'));
        //$this->assertEquals('Integraciones',$this->multiple->getMessage());
    }

    public function testWhenSetMessageIsNull() {
        $this->multiple = new Message(array('01' => 'Falabella', '10' => 'It', '00' => 'Integraciones', '11' => 30));
        $this->assertEquals(null,$this->multiple->setMessage(null));
        //$this->assertEquals(null,$this->multiple->getMessage());
    }

    public function testWhenSetIsString() {
        $this->multiple = new Message(array('01' => 'Falabella', '10' => 'It', '00' => 'Integraciones', '11' => 30));
        $this->assertEquals(null,$this->multiple->setMessage('Hola'));
        //$this->assertEquals(null,$this->multiple->getMessage());
    }

    public function testWhenSetArrayMessageIsNull() {
        $this->multiple = new Message(null);
        $this->assertEquals(null,$this->multiple->setMessage('01'));
       // $this->assertEquals(null,$this->multiple->getMessage());
    }
    

}