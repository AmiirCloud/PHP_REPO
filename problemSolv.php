<?php

// function bin_to_dec($bin) {
//     $bin = str_split($bin);
//     echo $bin;
//     $bin = array_reverse($bin);


//     $i = 0;
//     $dec = 0;
//     foreach($bin as $values) {
//         $ans = $values * pow(2, $i);
//         $dec += $ans;
//         $i++;
//     }
    
//     return $dec;
// }
// echo bin_to_dec('1101')
$str ='11001';
// $str = '1010';
$ans = 0;
$sumOfOutput = 0 ;
$reversed  = strrev($str);
for($i = 0 ; $i < strlen($reversed);$i++ ){
    $ans = 2**$str[$i];
    $sumOfOutput += $ans;
}
echo " The Binary conversion of $str to decimal is  :".$sumOfOutput;

?>