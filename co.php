<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Comparison Operators
    - Used To Compare Two Values

    - Part 2
    - >     => Larger Than
    - >=    => Larger Than Or Equal
    - <     => Smaller Than
    - <=    => Smaller Than Or Equal
    - <=>   => Spaceship [Less Than, Equal Or Greater]

    Search
    - How Does PHP Compare Strings With Comparison Operators
  */

  var_dump(100 > 50);
  echo '<br>';
  var_dump(100 > 100);
  echo '<br>';
  var_dump(100 >= 100);
  echo '<br>';
  var_dump(100 >= 110);
  echo '<br>';
  var_dump(100 < 50);
  echo '<br>';
  var_dump(100 <= 50);
  echo '<br>';
  var_dump(100 <=> 200); // -1
  echo '<br>';
  var_dump(100 <=> 100); // 0
  echo '<br>';
  var_dump(100 <=> 50); // 1
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo strcmp("abc" ,"cdf") ; 
  echo '<br>';
  $fname = "ahmedtameeeee"; 
  $lname= "amani tameeeeeeeeeeeeeeeeee" ; 
  if($fname > $lname){
    echo"hello world" ; 
  } 
  else{
    echo "bye world " ; 
  }