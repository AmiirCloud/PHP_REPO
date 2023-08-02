<?php

// working with array  buil in 
$name  = array("amir"=>10,"muse"=>12);
$num =  array(3,2,1,4,5);


$my = array_search(1,$num);  // takes two argument  1 what you are searching in the array  2 array name
// array_pop($num); // removes the last element in the array
// array_push($num,10); // adds an specified element in to the latest of an array
// array_shift($num); // removes first element
// array_unshift($num,12); // adds  element in the starting posesion
// array_sum($num ); // sums The elements of an array 
$num = array_fill(0,3,0);
print_r(count($num));
// print_r(array_keys($name)); // gives you the keys of an array
print_r($num);
function sum($num){
    return $num + $num;
}
print_r(array_map("sum",$num));
?>