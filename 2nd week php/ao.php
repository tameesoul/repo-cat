<?php 
//array operator 
/*
    Operators
    - Used To Perform Operations On Values.

    Array Operators
    - Deal With Arrays

    +     => Union
    ==    => Equal => Same Key And Value
    !=    => Not Equal
    <>    => Not Equal
    ===   => Identical => Same Key And Value, Same Order, Same Type
    !==   => Not Identical
  */

 // $arr1 = [1=>"100" , 2=>"200"] ; 
  //$arr2 = [1=>100 , 2=>"300" , 3=>400] ;
  //print_r($arr1 +$arr2) ;

  $arr1 = [1=>200 , 2=>400] ; 
  $arr2 = [1=>"200" , 2=>"400"] ; 

  var_dump($arr1 == $arr2) ; //true == didnt care bout data type  
  echo '<br>';
  var_dump($arr1 != $arr2) ; //false
  echo '<br>';
  var_dump($arr1 === $arr2) ; //false must be same data type and same key  
  echo '<br>';
  var_dump($arr1 !==$arr2) ; 

  echo '<br>';
  echo '<br>';


