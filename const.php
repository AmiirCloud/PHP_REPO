<?php

// const is a vairiable the doesnt change its value 
// it has the same rules as variables  but its uppercase

// two ways to declare constants in php  
//  define and const keyword  are used to declare a constant value in php
const FIRST_NAME = "amir";
define("SECOND_NAME"," Muse");

// the define keyword takes tow argument  one is the name of the cont second is the value of  const 

echo "My Name is  ".FIRST_NAME,  SECOND_NAME;
?>