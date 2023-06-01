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
<!-- Variables -->

    <!-- <h1>
      <?php 
        $greeting = "Hey";
        echo $greeting . " " . "Universe! <br/><br/>";
        echo "$greeting World!";
      ?>
    </h1> --> 
<!-- Conditionals and booleans  -->

    <?php
        $name ="Dark Matter";
        $read = false;

    if($read){
        $message = "Yes, I have read $name";
    } else {
        $message = "No, I have NOT read $name";
    }

    ?>

    <h1>
        <?php echo $message; ?>
        <!-- This is another way of writting the above php code
        the less that symbol followed by the ?, php then echo,
        is equal to less that followed by ? and then the equal sign).
            <?= $message; ?> -->
    </h1>
    <div>

<!-- arrays -->

        <h1>Recommended Books</h1>

        <?php
            $books = [
                "Do Android Dream of Electronic Sheep",
                "The Lions and the mouse",
                "Hail Mary"
            ];
        ?>

        <ul>

        <!-- Render/ Loop over the "books" array -->
            <!-- Use concatination -->
            <?php foreach ($books as $book){
                echo "<li>" . $book . "</li>";
            }
            ?> <br/>
            <!-- Inline the array in one go -->
            <?php foreach ($books as $book){
                echo "<li>$book</li>";
            }

            ?>
        </ul>

        <!-- Short hand to use the foreach sentax to loop over each item  -->
        <ol>
            <?php foreach ($books as $book) : ?>
                <li><?= $book?></li>
            <?php endforeach; ?>
        </ol> <br/>

    <!-- Associative Arrays (Interact with individual items within an array) -->
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

        ?>

        <ul>
            <?php foreach ($allBooks as $allBook) : ?>
                <?php if ($allBook['author'] == 'Andy Weir') : ?>
                    <li>
                        <a href="<?= $allBook['purchaseUrl'] ?>">
                            <?= $allBook['title']; ?>
                        </a>
                        <?= ' ' . 'was published in' . ' ' . $allBook['publishedYear'] . ' ' . 'and written by' . ' ' . $allBook['author'] . '.'; ?>
                    </li> 
                <?php endif; ?>
            <?php endforeach; ?> 
        </ul>   
    </div>

</body>
</html>
