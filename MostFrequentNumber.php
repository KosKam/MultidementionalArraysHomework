<?php

$numbers = [7, 7, 7, 0, 2, 2, 2, 0, 10, 10, 10];

$frequentN = array_count_values($numbers);
 
 $maxs = array_keys($frequentN, max($frequentN));

 $maxTimes = max($frequentN); 
 
 echo "The number $maxs[0] is the most frequent (occurs $maxTimes times)";

 
 // echo max($frequentN);
 // echo $maxs[0];
 // var_dump($maxs);
 // print_r($frequentN);
