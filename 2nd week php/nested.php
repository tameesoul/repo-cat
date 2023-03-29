<?php 

//nested if advanced ex 
$name = "ahmed"; 
$country = "egypt"; 
$country_discount = 10; 
$is_student = true; 
$student_discount = 35; 
$is_orphan = false ; 
 $orphan_discount = 40; 

 if($country=="egypt"&& $is_student== true && $is_orphan == true){
    echo "hello $name";
    echo '<br>'; 
    echo "your discount is" .$country_discount-$student_discount- $orphan_discount;
 }
 elseif($country=="egypt"&& $is_student== true){
    echo "hello $name";
    echo '<br>'; 
    echo "your discount is" .$country_discount-$student_discount;
 }

 else if ($country=="egypt"){
    echo "hello $name";
    echo '<br>'; 
    echo "your discount is" .$country_discount;
 }
 else {
    echo "hello $name"; 
    echo '<br>'; 
    echo "your country dosent have this offer"; 
 }