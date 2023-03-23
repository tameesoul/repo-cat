<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

 /* $book = "darkmatter"; 
$readthebook = true ; 
if($readthebook ==true){
    echo "you read" . " ". "$book" ; 
}
else{
    echo "your aint read . $book yet" ; 
}
*/
/*
$book = "the mountinue is you ";  
$read = true ; 

if($read==false){
    $messsage="you have been read the $book" ; 
}
else {
    $messsage =  "you havent read the $book yet"; 
}
?>
*/

//$names =  [

   // "ahmed" , "tamee" , "mostafa" , "abderlahman" , "khaled"
//];

 //foreach($names as $name){
   // echo " $name"; 
//} ;

$books = [
    [
        'name' => 'safari', 
        'release year' => 1996, 
        'author' => 'ahmed khaled tawfik'
    ], 
    [
        'name' => 'fantasia', 
        'release year' => 1995, 
        'author' => 'ahmed khaled tawfik'
    ], 
    [
        'name' => 'awlad haretna', 
        'release year' => 1959, 
        'author' => 'najeeb mahfoudh'
    ]
];  


/// this is a normal function , but what if we  want to filter year release we will duplicate so we will use lambada function
function filter_books_by_author($items , $key , $value) {
    $filtered_books = [];
    foreach($items as $item) {
        if($items[$key] === $value) {
            $filtered_books[] = $item; 
        }
    }
    return $filtered_books; 
}
$filtered_books = filter_books_by_author($books,'author','najeeb mahfoudh');
?>

<ul>
    <?php foreach($filtered_books as $book): ?>
        <li>



            <?= $book['name']; ?>,
            <?= $book['author']; ?>,
            <?= $book['release year']; ?>,


             
    
        </li>
       <?php endforeach?>

    </ul>

</body>
</html>