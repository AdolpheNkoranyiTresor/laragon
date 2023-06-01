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

    <!-- Associative Arrays (Interact with individual items within an array) -->
        <h1>List of books filtered by author:</h1>
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
            function filterByAuthor($allBooks, $author){
                $filteredBooks = [];

                foreach ($allBooks as $allBook){
                    if ($allBook['author'] === $author) {
                        $filteredBooks[] = $allBook;
                    }
                }

                return $filteredBooks;
            }
        ?>

        <ul>
            <?php foreach (filterByAuthor($allBooks, 'Andy Weir') as $allBook) : ?>
                <li>
                    <?= $allBook['title']; ?>
                    <?= ' ' . 'was published in' . ' ' . $allBook['publishedYear'] . ' ' . 'and written by' . ' ' . $allBook['author'] . '.'; ?>
                </li>
            <?php endforeach; ?> 
        </ul>   
    </div>
    
<!-- ASSIGNMENT: list of favorites movies, filtered by Released Year >= to 2000 -->

    <div>
        <?php
            $favoriteMovies = [
                [
                    'title' => 'Inception',
                    'releasedYear' => 2010,
                    'writer' => 'Christopher Nolan'
                ],
                [
                    'title' => 'The Dark Knight',
                    'releasedYear' => 2008,
                    'writer' => 'Christopher Nolan'
                ],
                [
                    'title' => 'Pulp Fiction',
                    'releasedYear' => 1994,
                    'writer' => 'Quentin Tarantino'
                ],
                [
                    'title' => 'The Shawshank Redemption',
                    'releasedYear' => 1994,
                    'writer' => 'Frank Darabont'
                ],
                [
                    'title' => 'The Matrix',
                    'releasedYear' => 1999,
                    'writer' => 'Lana Wachowski'
                ],
                [
                    'title' => 'The Social Network',
                    'releasedYear' => 2010,
                    'writer' => 'Aaron Sorkin'
                ],
            ];

            function filterMoviesByYear($favoriteMovies, $releasedYear){
                $filteredMovies = [];

                foreach ($favoriteMovies as $fMovies){
                    if ($fMovies['releasedYear'] >= $releasedYear) {
                        $filteredMovies[] = $fMovies;
                    }
                }

                return $filteredMovies;
            }
            
            $filteredMovies = filterMoviesByYear($favoriteMovies, 2000);
        ?>

        
        <h2>List of my Favorites Movies:</h2>
        <ul>
            <?php foreach ($filteredMovies as $fMovies) : ?>
                <li>
                    <?= 'In ' . $fMovies['releasedYear'] . ' ' . $fMovies['title'] . ' ' . 'was written by' . ' ' . $fMovies['writer'] . '.'; ?>
                </li> 
            <?php endforeach; ?> 
        </ul>  
    </div>


</body>
</html>
