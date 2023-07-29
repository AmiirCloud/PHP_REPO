<?php 
// $myArra = array('amir','muse');
// $myArra = array('amir','muse');
// $array  = array_merge($myArra, $myArra );

// $allTeam = array(
//     'dev'=>array('amir','mue','hassan'),

// );



// print_r($array);
// foreach( $myArra as  $key => $value){
//     echo   $key , $value ; 
// };


// $ourTeam = 6;
// while($ourTeam <= 10){
//     $ourTeam+= 2*4;
//     echo "<br> . $ourTeam";
// }
// echo "<br> $ourTeam"

// ;$ourTeam = 0;
// do{
//     echo $ourTeam; 
//     $ourTeam+= 2*4;
// } while($ourTeam <= 10);
// echo $ourTeam
$arrays  = array(
    array(1,2,3),
    array(4,5,6),
//     'm2'=>array(1,2,3,4,5,,6,7,8,9),
);

// $arrays = array(
//     "DEVELOPERS"=>array('amir'=>'none','miirshe'=>'','hanada','ali'),

//    );
$sum_rows = 0 ;
$sum_col = 0 ;
$getAlKeys  = array_keys($arrays);
for($i = 0 ; $i < count($getAlKeys); $i++){
foreach($arrays[$getAlKeys[$i]] as $key => $value){
    $sum_rows  += $value;
    foreach($arrays[$getAlKeys[$i+1]] as $key2 => $value2 ){
      $sum_col = $sum_rows + $value2;
    }
    $sum_col += $getAlKeys[$i+1]  ;
//    if($value %2==0){
//     echo $value  . '  ';
//    };
}
echo "<br>";
}
// echo "<br> sum of rows  is ". $sum_rows;
echo "<br> sum of rows  is ". $sum_col . "    ";

?>