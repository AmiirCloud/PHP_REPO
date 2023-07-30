<?php
$x=  10;
function passByValue($x){
    echo "X:  $x  <br>" ;
    $x+= 5;
    echo "After Increment of x ".$x ."<br>";

}
function passByRef(&$x){
    echo "X:  $x  <br>" ;
    $x+= 5;
    echo "After Increment of x ".$x."<br>";
}
//call the fucntions
passByValue($x);
echo "The Value of x  Outside Of a function :".$x . "<br>";

passByRef($x);
echo "The Value of x  Outside Of A fucntion :".$x;

?>