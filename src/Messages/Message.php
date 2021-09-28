<?php

class Message{
    private $message;
    private $arrayMessage;
    
    public function __construct($arrayMessage) {
        $this->arrayMessage = $arrayMessage;
    }

    public function setMessage($keyToSearch) {
        try{
            $this->message = $this->arrayMessage[$keyToSearch];
        }
        catch(Exception $e){
            $this->message = null;
        }
        
    }

    public function getMessage() {
        return $this->message;
    }
}