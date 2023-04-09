<?php 
 /*
    String
    - Access Elements
    --- String Is Array Of Characters
    --- Access Elements By Index "Zero Based Indexing"
    --- Negative Index Are Allowed
    - Update Elements
    --- Update Current Elements
    --- Add New Elements

    Search
    - Single-Byte and Multi-Byte
  */

  $name = "catmewomewo"; 

  /// there are a difference between length and size of array 
  /// the lenght of this items is 13 
  //// the size of this index in the memory is 12 
  echo "the position of $name[1]"; //// a not c 
  echo "<br>";
  echo "the length for the letter is".strlen($name); //// 11 
  echo "<br>";
  echo "last letter is".$name[-1];/// nagitave value from back to the front -2 is w 
  echo "<br>";
   echo $name[3]="o"; 
   echo "<br>";
   echo $name;

?>