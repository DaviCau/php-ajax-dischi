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
        <title>Dischi</title>
    </head>
    <body>
        <div class="container">
            <?php 
                foreach ($discs as $disc) {
                    ?>
                    <div class="single-disc">
                        <img src=<?php echo $disc["poster"] ?> alt=<?php echo $disc["title"]." poster" ?>>
                        <h4><?php echo $disc["title"] ?></h4>
                        <p class="author"><?php echo $disc["author"] ?></p>
                        <p class="year"><?php echo $disc["year"] ?></p>
                    </div>
                    <?php
                }
            ?>
        </div>
    </body>
</html>