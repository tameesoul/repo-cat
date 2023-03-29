<?php 
    //-- Unpacking In Arguments

  //// (... parameter name this is spread syntax ); 
  /// working like a  loops 
  //// it an array ; 



    function get_data($name = "private" , $age= "private" , ...$skills){

        echo "your name is $name , your age is $age " ; 
        echo '<br>'; 
        foreach($skills as $skill ) :
            echo "your skills is $skill <br>"; 

        endforeach; 
    }

    get_data("ahmed" , 20 , "cpp" , "db" , "php"); 

    echo '<br>'; 
    echo "############################################################" ; 
    echo '<br>'; 

    $list_of_items = [ "cola" , "cheese"]; 
    get_data( ...$list_of_items);


?>