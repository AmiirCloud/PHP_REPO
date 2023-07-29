<?php
// echo "Hello word in php";
// phpinfo()

$dev1 = 'Miirshe';
$dev2 = 'Amiir';
$dev3  = 'Mohamed';
$teams  = array($dev1,$dev2,$dev3);
print_r($teams);
echo '<br>';
echo nl2br("\n");
var_dump($teams);
$strig  = 'This\r';
echo nl2br($strig)


?>




<!-- 

two ways of line break in php 
 <br> tag 

 nl2br function : takes 
    semicoolo: every statemnt in php should end with a semicolon

    vardum- and 
    print_r are semilar but the difference si 
    print_r is human readable 

    var_dump : displays structured infromation about type and value


echo 

    echo with a single quote will ignore the varaibles
    echo with a double quote will replace the variables with their names
    echo can print multiple string 


print 
    print with  a single quote  will ognore the variables 
    prnt with a do

 -->