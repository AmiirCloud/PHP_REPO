<?php
// declaring a variable 
$number = 1;

function scope(){
    static  $number =0;
    // iif you want to access the global variable you have to utse the keyowrd global 
    // the you canm res assign 
    $number++;
    echo "inside a function calling   count is :  $number";
}
echo $number;
//  a global variable only can be accessed outside of a function \


scope();
scope();
scope();
scope();
scope();
echo "<br> this it \" me  ";
// After a function is executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. To do this, use the static keyword when first declaring the variable.

// \'  for  sngle quote 
// \n  for new line 
//  \" for double quote
// // is replaced by a sngle slash
$name = 'amri mue hassan';
echo strlen($name);
echo str_word_count($name);

// replace method needs three arguments   
//  what to chang e
//  shayga ku badalysid 
// waxa laga badalayo 
$name = "amir muse hassan ";
echo $name;

echo strlen($name) . "<br>";
echo str_word_count($name) . "<br>";
echo str_word_count($name) . "<br>";
$path = 'c://programs/course';
echo str_replace("amir","caamir",$name) . "<br>";
echo str_replace("//","\\",$path). "<br>";

echo $name;
echo strrev($name);

echo "<br>";
$latest  = 'amir muse';
echo $latest[strlen($latest) -2];
$str = 'abc';

var_dump($str['1']);
var_dump(isset($str['a']));


$num = '1001';
// for($i = strlen($num ); $i >= $num[0]; $i++){
//     echo 'prn';

//     $i--;

// }


?>