<?php
$word = strtolower(trim(fgets(STDIN)));
//$word = strtolower("softuni");
$wordLenght = strlen($word);

$alphabet = [a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z];
$lemghtAlphabet = count($alphabet);

$arr =[];

for($k = 0; $k < $wordLenght; $k++){
    
    for($i = 0; $i < $lemghtAlphabet; $i++){
    
        if ($word[$k] == $alphabet[$i]) {
            $arr[$alphabet[$i]] = $i;
        }
    }
} 

echo '<pre>';
 print_r($arr); 
echo '</pre>';