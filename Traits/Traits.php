<?php

    trait Log
    {
        protected function log($smg){
            echo "{$smg}\n";
        }
    }
    class Table{

        use Log;

        public function save(){
            $this->log("This is sample message");
        }

        
    }
      (new Table())->save();
?>
