<?php
    
    require_once('src/Multiples/MultipleOfThree.php');
    require_once('src/Multiples/MultipleOfFive.php');
    require_once('src/ValidateMultiples/ValidateIsMultiple.php');
    require_once('src/Messages/Message.php');

    $getMultipleOfThree = new MultipleOfThree();
    $getMultipleOfFive = new MultipleOfFive();
    $validateIsMultiple = new ValidateIsMultiple();
    

    for($x = 1; $x <= 100; $x++){
         
        $multipleOfThree = $getMultipleOfThree->getMultiple($x);
        $multipleOfFive = $getMultipleOfFive->getMultiple($x);

        //Validate if $multipleOfThree or $multipleOfFive is multiple of 3 or 5
        $falabella = $validateIsMultiple->isMultiple($multipleOfThree);
        $it = $validateIsMultiple->isMultiple($multipleOfFive);

        $keyToSearch = $falabella . $it;
        $message = new Message(
            array('01' => 'Falabella', '10' => 'It', '00' => 'Integraciones', '11' => $x)
        );
        $message->setMessage($keyToSearch);
        echo $message->getMessage()."<br>";
    }