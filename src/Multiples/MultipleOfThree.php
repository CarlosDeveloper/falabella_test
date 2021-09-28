<?php
require_once('src/Interfaces/IMultiple.php');

use IMultiples\IMultiple;

class MultipleOfThree implements IMultiple {

    protected $multipleOf = 3;

    public function getMultiple($numberToEvaluate){
        try
        {
            return $numberToEvaluate % $this->multipleOf;
        }
        catch(Exception $e){
            return 'require number';
        }
        
    }
}