<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body{
            display: grid;
            text-align: center;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: arial;
        }
    </style>
</head>
<body>
    <!-- <h1>
      <?php 
        $greeting = "Hey";
        echo $greeting . " " . "Universe! <br/><br/>";
        echo "$greeting World!";
      ?>
    </h1> -->

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
</body>
</html>
