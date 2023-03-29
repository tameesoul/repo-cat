<?php 

$day = "sat"; 
switch($day){

    case "sat":
        echo "hello today is $day we are not opening"; 
        break; 
    case "sun":
        echo "hello today is $day we are  opening"; 
        break; 
    case "mon":
        echo "hello today is $day we are not opening"; 
        break; 
        default:
        echo "unknown day );"; 
}

?>