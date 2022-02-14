<?php

namespace Project;

include "app.php";

use App\Table as getdata;

class saple_sum{
    public static function get(){
        echo "Project.sample_sum.get";
    }
}

getdata::get();



?>