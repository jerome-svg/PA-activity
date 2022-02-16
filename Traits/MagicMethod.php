<?php


/***
 * This is the example of magic Mathod
 * @ __spleep
 * @ __wakeup
 * @ __invoke
 * @ __debugInfo
 * @ __toString
 * @ __set
 * @ __get
 * @ __isset
 * @ __unset
 * @ __call
 * @ __callStatic
 ***/



class sleepWakeup {

    public function __construct() {
        // constructor //
    }

    public function __sleep() {
        echo date('h:i:s') . 'Time to sleep';
        sleep(5);
    }
    

    public function __wakeup() {
        echo date('h:i:s') .'Time to wakeup.';
    }

}

$ob = new sleepWakeup();

// call __sleep method
echo $ob->__sleep();

echo "<br>";


// call __wakeup method
echo $ob->__wakeup();


?>