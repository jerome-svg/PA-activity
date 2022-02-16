<?php

    interface SampleInterface{
        public function save(array $data);
    }
    interface LogInterface{
        public function log($message);
    }

    
    
    class sample implements  SampleInterface, LogInterface{
        public function save(array $data){
            
            $data = [
                "name" => "Jerome",
                "Age" => 25,
                "gender" => "Male"
            ];

            return $data;
        }
        public function log($message){
            return $message;
        }
    }
    print_r((new sample())->save([]));
    echo (new sample())->log('This is sample interface Extent');


?>