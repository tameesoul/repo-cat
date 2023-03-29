<?php 

//control error 

// @ operator do this 

//ex 

$fname = "ahmed" ; 
$lname = @$fname or die("variable is not found"); 
echo $lname;
echo '<br>'; 
$f =  @file("catt.txt") or die("file is not found"); 
print_r($f); 

?>