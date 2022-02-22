<?php

function checkNum($number) {
  if($number>2) {
    throw new Exception("The input is Error");
  }
  return true;
}


try {
  checkNum(2);
  echo 'You are not Error';
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>