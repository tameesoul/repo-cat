<?php 

/////Function Variable Arguments List
/*
    Function
    - Variable Arguments List
    --- func_num_args()
    --- func_get_arg(index)
    --- func_get_args()
    what if we want to insert a 10000 parameter to the function it will be hard to code so 
    there are bulid in function help us to do it 
  */


  function calc(...$nums){
  //echo "Number Of Arguments: " . func_num_args() . "<br>";
    //echo "Argument Index Number 3 Is " . func_get_arg(3). "<br>";
    //func_num_args(); 
    $result= 0 ; 

   foreach($nums as $args ):
    $result += $args; 
   endforeach; 

   return $result; 
  }


 echo calc(2,3,5,63,55,44) 


////note    
//// ...... her role to unpacking any group of items or array ; 


?>