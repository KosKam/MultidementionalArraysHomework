<?php

$numbers = [2, 1, 1, 2, 3, 3, 2, 2, 2, 1];

$lenghtArr = count($numbers);
$start = $numbers[0];
$arrNum = [];

for($i = 1; $i < $lenghtArr; $i++){
    
    if ($start == $numbers[$i]) {
        $arrNum[$numbers[$i]]++; 
        $start = $numbers[$i];              
        
    }
    else {
        // $arrNum["n".$i] = 1;
        $start = $numbers[$i];
    }
}


echo $start;

// var_dump($arrNum);
 
 
$array = array(2, 1, 1, 2, 3, 3, 2, 2, 2, 1);
$prev = '';
$sequences = array();

// group them
foreach($array as $value) {
    if(!isset($sequences[$value])) {
        $sequences[$value][] = 0;
        $prev = $value;
    }

    if($prev == $value) {
        $val = array_pop($sequences[$value]) + 1;
        $sequences[$value][] = $val;
    } else {
        $prev = $value;
        $sequences[$value][] = 1;
    }

}

echo '<pre>';
 print_r($sequences); 
echo '</pre>';