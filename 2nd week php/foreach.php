<?php 



$country_with_discount =  ["eg"=> 50 , "usa"=> 40 , "bar"=>20 , "bahr"=>20] ; 

// foreach($arrayname as $key => $value);
foreach($country_with_discount as $c_d=>$dis){
    echo "country name is $c_d and discount is $dis"; 
    echo '<br>';
}
?>