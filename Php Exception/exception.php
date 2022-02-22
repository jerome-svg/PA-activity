<?php

    try{
        processCC();


    }catch(Exception $e){
        echo $e->getMessage();
    }

    function processCC($numb = 12, $zipCode = null){
        if(is_null($numb)){
            throw new Exception('No CC Numbers');
        }
        else{
            echo "No Error";
        }
    }

?>