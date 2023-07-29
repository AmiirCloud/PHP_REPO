<?php

$team = array(
 "DEVELOPERS"=>array('amir'=>'none','miirshe'=>'','hanada','ali'),
 'DESIGNERS'=>array('amir','miirshe'),
 'DEPLOYMEANT'=>array('ismail','ahmed'),
 'PROJECT MANAGERS' =>array('mohamed','zaki','ali')
);
// echo "MY TEAM</br>  ==============================</br> ";
// echo $team['DEVELOPERS'][1] . '     '. $team["DEVELOPERS"][0] ," </br>";
// echo $team['DESIGNERS'][1] . '     '. $team["DESIGNERS"][0] ," </br>";
// echo $team['PROJECT MANAGERS'][0] . '     '. $team["PROJECT MANAGERS"][0]
// ;
echo "<.br>";
$keys  =  array_keys($team);
echo {$team['$keys']};

or($i = 0 ; $i<count($keys);$i++){
    echo $keys[$i] . "</br>";
    foreach($team[$keys[$i]] as $key => $value){
        echo  $key . "  " . $value .  '</br>';
    }

};
echo $keys[0]
// foreach($team as $key => $value ){
//     echo  $team[$key][$value];

// }



// to print the multi array use the arrayname 
// followed by the bracket and specify in the brackets
// the key   then tell what you want to the tha tarray 


?>