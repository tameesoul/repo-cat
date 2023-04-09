<?php 
 /*
    String Functions
    - lcfirst(String[Required])
    - ucfirst(String[Required])
    - strtolower(String[Required])
    - strtoupper(String[Required])
    - ucwords(String[Required], Delimiters[Optional])
    - str_repeat(String[Required], Count[Required])
  */

  echo lcfirst("Elzero Web School") . "<br>";
  echo ucfirst("elzero web school") . "<br>";
  echo strtolower("ELZERO WEB SCHOOL") . "<br>";
  echo strtoupper("elzero web school") . "<br>";
  echo ucwords("elzero web school") . "<br>";
  echo ucwords("elzero web|school", "|") . "<br>";
  echo str_repeat("Elzero", 3);
  echo "<br>" ; 
 echo "############################################################################";
 
 /*
    String Functions
    - implode(Separator[Optional], Array[Required]) => join() Is Alias
    - explode(Separator[Required], String[Required], Limit[Optional])
    - str_shuffle(String[Required])
    - strrev(String[Required])
    - trim(String[Required], CharsList[Optional])
    - ltrim(String[Required], CharsList[Optional])
    - rtrim(String[Required], CharsList[Optional])
    --- Space ""
    --- Tab \t
    --- New Line \n
    --- Carriage Return \r
    --- Vertical Tab "\x0B"
    --- NULL "\0"
  */
  $names = ["ahmed", "mohamed" , "khaled"]; 
  echo "<br>" ; 
  echo implode(" " ,$names);

  $name = "welcome to rice fileds";
  echo "<pre>";  
  print_r(explode(" " ,$name , "3")); 
  echo "</pre>";
echo "<br>"; 
  echo str_shuffle("tameee"); 
  echo "<br>"; 
  echo rtrim("#@@Elzero@@@###", "#@") . "<br>";
  echo ltrim("#@@Elzero@@@###", "#@") . "<br>";
  echo "<br>"; 

  /*
    String Functions
    - strpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - strrpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - stripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional])
  */

  var_dump(strpos("Hello Hello", "H")); // 0
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", 3)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", 6)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "h")); // False
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -2)); // False
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -5)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -11)); // 0
  echo '<br>';
  var_dump(strrpos("Hello Hello", "H")); // 6
  echo '<br>';
  var_dump(strrpos("Hello Hello", "H", 5)); // 6
  echo '<br>';
  var_dump(stripos("Hello Hello", "h")); // 0
  echo '<br>';
  var_dump(strripos("Hello Hello", "h")); // 6
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He")); // 2
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He", 1)); // 1
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He", 1, 6)); // 0
  echo '<br>';
  var_dump(substr_count("abcdabcda", "abcda")); // 1
  echo "<br>"; 

  /*
    String Functions
    - parse_str(String[Required], Array[Required])
    - quotemeta(String[Required])
    - str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
    --- STR_PAD_BOTH
    --- STR_PAD_LEFT
    --- STR_PAD_RIGHT
    - strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
  */

  parse_str("name=Osama&#038;email=o@nn.sa&#038;os=mac", $query);

  echo '<pre>';
  print_r($query);
  echo '</pre>';

  echo $query["name"] . "<br>";
  echo $query["email"] . "<br>";
  echo $query["os"] . "<br>";

  echo "Hello [] () * + . <br>";
  echo quotemeta("Hello [] () * + . <br>");

  echo str_pad("12", 8, 0, STR_PAD_BOTH) . "<br>";
  echo str_pad("321", 8, 0, STR_PAD_BOTH) . "<br>";
  echo str_pad("1313", 8, 0, STR_PAD_LEFT) . "<br>";
  echo str_pad("15435", 8, 0, STR_PAD_LEFT) . "<br>";
  echo str_pad("500432", 8, 0, STR_PAD_LEFT) . "<br>";

  echo strtr("E@zero Web Schoo@", "@", "l");

  echo "<br>";

  $translation = ["@" => "l", "#" => "o"];

  echo strtr("E@zer# Web Sch##@", $translation);



  /*
    String Functions
    - str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
    --- Its Case-Sensitive
    - str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
  */

  echo str_replace("@", "o", "Elzer@ Web Sch@@l", $r); // Elzero Web School
  echo '<br>';
  echo "Replaces Count Is $r"; // 3
  echo '<br>';
  echo str_replace(["#", "@"], "A", "E#zer@ Web Sch@@#"); // EAzerA Web SchAAA
  echo '<br>';
  echo str_replace(["#", "@"], ["l", "o"], "E#zer@ Web Sch@@#"); // Elzero Web School

  echo '<pre>';
  print_r(str_replace("One", 1, ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

  echo '<pre>';
  print_r(str_replace(["One", "Two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

  echo '<pre>';
  print_r(str_replace(["One", "Two", "Three"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

  echo '<pre>';
  print_r(str_ireplace(["one", "two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

  /*
    String Functions
    - wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
    - ord(String[Required])
    - chr(Int[Required])
    - similar_text(String_One[Required], String_Two[Required], Percent[Optional])
    --- Returns The Number Of Matching Characters
  */

  $str = "Welcome To To To T Elzeroo Web School Website Very_Very_Very_Long";

  echo strlen($str) . "<br>";

  echo wordwrap($str, 8, "<br>", True);

  echo "<br>";

  echo ord("a"); // 97

  echo "<br>";

  echo chr(97); // a

  echo "<br>";

  echo similar_text("Elz@ero", "Elz_eroo");

  echo "<br>";

  echo similar_text("Elzero", "Elzeroo", $perc);

  echo "<br>";

  echo $perc;

  /*
    String Functions
    - strstr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- => Alias [strchr]
    --- Case-Sensitive
    - stristr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- Case-Insensitive
    - number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
  */

  echo strstr("Elzero Web", "W") . "<br>"; // Web
  echo strstr("Elzero Web", "z") . "<br>"; // zero Web
  echo strstr("Elzero Web", "W", True) . "<br>"; // Elzero
  echo strlen(strstr("Elzero Web", "W", True)) . "<br>"; // 7


  echo strstr("Elzero Web", "w") . "<br>"; // False
  var_dump(strstr("Elzero Web", "w"));
  echo '<br>';


  echo stristr("Elzero Web", "w") . "<br>"; // Web
  var_dump(stristr("Elzero Web", "w")); // Web
  echo '<br>';

  echo 10_000_000;
  echo '<br>';

  echo number_format(10000000.156023);
  echo '<br>';
  echo number_format(10000000.156023, 3);
  echo '<br>';
  echo number_format(10000000.156023, 3, "@");
  echo '<br>';
  echo number_format(10000000.156023, 3, "@", "#");
  
?>