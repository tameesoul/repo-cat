<?php 

// Function Variable And Function Exists

function hello(){
echo "hello world" ;
}
 //hello();




 //$func1 = "hello"; /// function variable /// 
 //hello();

echo '<br>'; 
 ////Function Exists check if the the function is found or not 

 if(function_exists("helloo")){
    echo hello();
 }
 else{
    echo "function is not found" ;
 }


 echo '<br>';
 /// strlen to discoveer the length of char 
  echo strlen("ahmed");
?>