<?php 
// continue and break with foreach 


$country = ["egypt" , "usa","qatar" , "southafrica" , "india" , "pakistan"] ; 

foreach($country as $country){


    if($country=="southafrica"){
        break ;
    }
    else{

        echo "there are $country" ;
        echo '<br>' ;
    }
   
}

echo "################################################################";
echo '<br>' ;
?>
<?php 
$country = ["egypt" , "usa","qatar" , "southafrica" , "india" , "pakistan"] ; 

foreach($country as $country){


    if($country=="southafrica"){
        continue ;
    }
    else{

        echo "there are $country" ;
        echo '<br>' ;
    }

   
}
?>