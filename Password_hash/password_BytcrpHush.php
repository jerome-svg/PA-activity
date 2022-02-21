<?php

    $password = "Jerome";
    $hushpass = password_hash($password, PASSWORD_DEFAULT);
    echo "PASSWORD 1 HUSH: " . $hushpass;

    echo $hashpass;



?>


