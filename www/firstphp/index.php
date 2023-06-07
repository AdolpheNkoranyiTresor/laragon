<?php
       
$allBooks = [
    [

    // In PHP, the correct syntax for array keys is the => character (equals sign followed by greater-than sign).

        'title' => 'Lion and the Mouse',
        'author' => 'Jerry Pinkney',
        'publishedYear' => 2009,
        'purchaseUrl' => 'https://en.wikipedia.org/wiki/The_Lion_%26_the_Mouse'
    ],
    [
        'title' => 'Are You My Mother?',
        'author' => 'P. D. Eastman',
        'publishedYear' => 1960,
        'purchaseUrl' => 'https://www.goodreads.com/book/show/197084.Are_You_My_Mother_'
    ],
    [
        'title' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'publishedYear' => 2021,
        'purchaseUrl' => 'https://www.amazon.com/Project-Hail-Mary-Andy-Weir/dp/0593135202'  
    ],
    [
        'title' => 'The Martian',
        'author' => 'Andy Weir',
        'publishedYear' => 2011,
        'purchaseUrl' => 'https://www.amazon.com/Martian-Andy-Weir/dp/0553418025'  
    ],
];

// Use a PHP duiltin function called array_filter

$filteredBooks = array_filter($allBooks, function ($book){
    return $book['publishedYear'] >= 1950 && $book['publishedYear'] <= 2020 ;
});

include 'index.view.php';
