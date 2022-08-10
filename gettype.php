<?php
 $str ="文字列です";//strは文字列型
 $int_number = 4; // $int_numverは整数型
 $bool = true;
 $arr = array(1,2,3,4);//$arrは配列型
 $null = NULL;
  
 echo gettype($str) . PHP_EOL;
 echo gettype($int_number) . PHP_EOL;
 echo gettype($bool) . PHP_EOL;
 echo gettype($arr) . PHP_EOL;
 echo gettype($null) . PHP_EOL;
?>
   