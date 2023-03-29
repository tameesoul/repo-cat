<?php 
//Operator Precedence
// || ---- or =====> || greater than or 
// meaning if we have a variable like this 

$number = 10 || false ; 

echo $number;  /// it will be 1  because || operator combine between two conditions and select the true value and return it . 
// $number = (10 || false) == 1 ; 
$num = 10 or false ; 
echo '<br>' ; 
echo $num; // it will be 10 because or dose not have Precedence to do this not like || 
  

?>