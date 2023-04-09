<?php 
///Passing Arguments By Reference And Return Type Declaration

function addfive(&$number){
    echo $number+=5 ; 
}


 ///// output 9 
echo "<br>";
$number = 4 ; 
addfive($number); /// output 9
echo "<br>";
echo $number ; /// output will be 4 because we wont use call be reference so we dont change the unique value from the memory 
/// to do this add & to the parameter 

?>