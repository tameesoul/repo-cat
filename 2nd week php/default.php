<?php 

function info_($name = "private name" , $age = "private age" , $address = "private address" ){
   $inf1= "your name is $name , your age is $age , your address is $address" ; 
   return $inf1;   
}


// we dont expect anything from user so default parameter use for this 
info_("ahmed" , 20 , "cairo"); 
?>