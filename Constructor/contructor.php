<?php



     class database{


        public $name;
        public $age;
        public $gender;
        public $status;
        

        public function __construct($name, $age, $gender, $status){
             echo $this->name = $name;
             echo $this->age = $age;
             echo $this->gender = $gender;
             echo $this->status = $status;
        }
        public function __disctruct(){

            echo "This is Distruct the constactor";

        }
     
     }

    $ojb = new database("Jerome", 23, "Male", "Single");



    









?>