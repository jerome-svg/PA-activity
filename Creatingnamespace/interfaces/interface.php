<?php

    interface SampleInterface{
        public function save(array $data);
    }

    class sample implements  SampleInterface{
        public function save(array $data){

            $data = [
                "name" => "Jerome",
                "Age" => 25,
                "gender" => "Male"
            ];



            return $data;
        }
    }

    print_r((new sample())->save([]));


?>