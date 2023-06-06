<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
    <style>
        body{
            display: grid;
            /* text-align: center; */
            place-items: center;
            /* height: 100vh; */
            margin: 0;
            font-family: arial;
        }
    </style>
</head>
<body>

        <h1>List of books filtered by author and the released/publised year:</h1>
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

        // Use gogin with an anonymus or a Lambda function

            function filter($items, $fn){
                $filteredItems = [];

                foreach ($items as $item){
                    if ($fn($item)) {
                        $filteredItems[] = $item;
                    }
                }

                return $filteredItems;
            };

            $filteredBooks = filter($allBooks, function ($book){
                return $book['publishedYear'] >= 1990;
            });
        ?>

        <ul>
            <?php foreach ($filteredBooks as $book) : ?>
                <li>
                    <?= $book['title']; ?>
                    <?= ' ' . 'was published in' . ' ' . $book['publishedYear'] . ' ' . 'and written by' . ' ' . $book['author'] . '.'; ?>
                </li>
            <?php endforeach; ?> 
        </ul>   
    </div>

</body>
</html>
