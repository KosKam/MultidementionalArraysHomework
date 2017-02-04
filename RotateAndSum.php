<?php

$arrN = [1, 2, 3, 4, 5];
$rotate = 3;

$rotationsArr = [];
// $sum = 0;

for($i = 0; $i < $rotate; $i++){
    
    $removeLastElement = array_pop($arrN);
    
    array_unshift($arrN, $removeLastElement);
    
    $rotationsArr[$i] = $arrN;
}

 for($i = 0; $i < count($arrN); $i++){    
    
    $arrSum = array_column($rotationsArr, $i);
     $sum = array_sum($arrSum);
     echo $sum."<br>";
 }

/* 
  echo '<pre>';
 print_r($rotationsArr);
echo '</pre>';

 echo '<pre>';
 print_r($sum);
echo '</pre>';
 
 */