<?php

$input = "12 12 34 84 66 12";

$reverse = strrev($input);

$digits = explode(" ", $reverse);

$sum = 0;

foreach ($digits as $v){
    
    $sum += $v;
}

echo $sum;

/*
echo '<pre>';
 print_r($sum);
echo '</pre>';

 */