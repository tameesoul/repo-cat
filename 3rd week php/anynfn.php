<?php 

/// Anonymous Function 
/// what if you have a tool help you in one place so you can use anonymous function to help y


$saymeo_mewo = function($name){
        return "memo mewo meeo $name"; 
};
echo $saymeo_mewo("ahmed"); 

//// this is anonymous function  

/// there are arraymap the input for this function a function and array and 
// the job this array do is execute every element in the function in the array 

echo "####################33"; 
echo "<br>"; 
$names = ["ahmed", "tamee", "khaled"];
$say_bye = array_map(fn($name)=>  
 "good bye to $name"
, $names);
echo "<pre>"; 
print_r($say_bye);
echo "</pre>"; 
?>
