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
    <div>    
        <h1>List of books filtered by author and the released/publised year:</h1>

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