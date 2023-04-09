<?php 

$books = [ 

    [
        "author"=> "ahmed khaled twfik",  
        "bookname"=> "fantasia" ,
        "yearreleased"=> "1995"
    ] , 
    [
        "author"=> "ahmed khaled twfik",  
        "bookname"=> "ma waraa al tabiaa" ,
        "yearreleased"=> "1997"
    ], 
    [
        "author"=> "najeeb mahfouz",  
        "bookname"=> "awld 7artna" ,
        "yearreleased"=> "1959"
    ]
     
    ];

      function filter_by_author($items ,$fn){
    $filter=[]; 

    foreach($items as $item){
        if($fn($item)){
            $filter[]= $item; 
        }
    }
    return $filter; 
};

$filter = filter_by_author($books,function($book){
    return $book["yearreleased"] < 2000; 
}); 

require("function.view.php");
