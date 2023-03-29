<?php 
//include &&require 


include('test.php') ; /// if there are any error in include the compiler will continue execute  the next line 
echo $number ;
echo '<br>';
echo "hello world";
?>
<?php 
echo '<br>';
echo "###############################";

echo '<br>';
//include &&require 
require('test.php') ; /// if there are any error in require the compiler will stop execute the next line 
echo $number ;
echo '<br>';
echo "hello world";
?>


<?php 
echo '<br>';
echo "########################################" ; 

include_once('test.php');  /// will execute the new value of the variable 
echo '<br>';
$number = 5 ; 
echo $number ;

?>