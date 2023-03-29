<?php 

//Passing Arguments By Reference And Return Type Declaration

///like any function 

function plus_five(&$num){
    return $num+=5; 
}
  $num = 5; 
  echo plus_five($num);
  echo '<br>';
  echo $num;  /// 5 because we print  variable value 
?>
<?php 
echo '<br>';
echo"#####################################";
echo '<br>';
function sum_num($num1  ,$num2):int{
    return $num1+$num2;  
}
 echo sum_num(12.4 ,13);
 echo '<br>';
 echo gettype(sum_num(12.4 ,13)); /// type is float but we can control the return type by doing this
?>