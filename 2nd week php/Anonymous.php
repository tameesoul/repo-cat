<?php 

/*
    Function
    - Anonymous Function
    --- When We Create A Function We Give It A Name So We Can Call It Later With That Name
    --- Sometimes We Need To Create A Function For Specific Task <= This Is Not Against DRY

    - Variable Inherit From Parent Scope
    - Variable Inherit By Reference From Parent Scope
    - Anonymous Function Can Be Passed To A Function
    - Anonymous Function Can Be Return From A Function
  */


  function say_hi($name){
    return "hi $name"; 
  }

  echo say_hi("ahmed"); 
///// normal function by user define function . 
 echo '<br>'; 
 echo "####################################################"; 
 echo '<br>'; 


   // Anonymous Function In Variable with parameter 
 
 $say_bye = function($name){
    return "bye $name"; 
 };

 echo $say_bye("tamee"); 
 echo '<br>'; 
 echo "####################################################"; 
 echo '<br>';

    // Inherit Variable From Parent Scope

    $cat ="bs bs im need dryfood"; 

    $meow_analysis = function($catmewo) use($cat){
        return "$cat"; 
    };
    echo $meow_analysis("mewo mewo");
    
echo '<br>'; 
 echo "####################################################"; 
 echo '<br>';

   // Pass Anonymous Function To Function => array_map

   $nums = [1,2,3,4,5]; 
   function items($number){
    return $number+=5; 
   }
   $nums_plus_five = array_map("items",$nums); //function items loops in array items and do the operator she did in it  
   echo '<pre>';
  print_r($nums_plus_five);
  echo '</pre>';
  echo '<br>'; 
 echo "####################################################"; 
 echo '<br>';

 $anonymous_five_plus = array_map(fn($five)=> $five+=5, $nums);//arrow function only use in anonymous function
 echo '<pre>';
 print_r($anonymous_five_plus);
 echo '</pre>';
?>