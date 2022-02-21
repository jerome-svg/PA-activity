<?php

    $array = [1, 2, 3, 4, 5, 6];


    $out = array_filter($array, function($item){
        return ($item % 2 == 0);
    });
    
    echo "<pre>";
    print_r($out);
    echo "</pre>";


    echo "<br>";

    echo "<pre>";
    print_r($array);
    echo "</pre>";
?>