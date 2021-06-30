<?php

include __DIR__ . '/db/database.php';

// var_dump($discs);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>Dischi</title>
    </head>
    <body>

        <?php include __DIR__ . "/partials/header.php" ?>
        

        <main>
            <div class="container">
                <?php 
                    foreach ($discs as $disc) {
                        ?>
                        <div class="single-disc">
                            <img class="poster" src=<?php echo $disc["poster"] ?> alt=<?php echo $disc["title"]." poster" ?>>
                            <h3 class="title"><?php echo $disc["title"] ?></h3>
                            <p class="author"><?php echo $disc["author"] ?></p>
                            <p class="year"><?php echo $disc["year"] ?></p>
                        </div>
                        <?php
                    }
                ?>
            </div>    
        </main>
    </body>
</html>