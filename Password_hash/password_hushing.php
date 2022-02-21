<?php
   


   $password1 = "Sample password";
   $password2 = "Sample password";

   $passwordH = "$2y$10$672Ek.foWU5PZ4MqTr4Vaub3nM.ijxaDoHD.CEqYtGoY.rfwMnUzS";


   $newpass = password_hash($password1, PASSWORD_DEFAULT);
   echo $newpass;

   echo "<br>";

   $valuepass = password_verify($password2, $passwordH);
   
   
   echo $valuepass;








?>
