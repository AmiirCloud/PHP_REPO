<?php

// sessions are useful for sensitive informatin like storinghte username of the user 
session_start();

$_SESSION["username"] =  'amir';

echo $_SESSION["username"];// sessions will be destroyed when ever thw browser you clos it 

session_destroy()
?>