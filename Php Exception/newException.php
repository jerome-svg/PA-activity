<?php


    try{
        processCC();
    }catch(Exception $e){
        echo $e->getMessage();
        echo "<br>";
        echo $e->getPrevious()->getMessage();
    }
    
    
    function processCC($numb = null, $zipCode = null){
        try{
            validate($numb, $zipCode);
        }
        catch(Exception $e){
            throw new Exception('Ivalid Input', null, $e);
        }echo "Process";
    }

    function validate($numb, $zipCode){
        if(is_null($numb)){
            throw new Exception('No CC Numbers');
        }
        
    }




?>