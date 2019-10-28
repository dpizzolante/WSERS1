<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="Stamer Tom">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

            $name = "Tom";
            $size = 185;

            if(isset($_GET['name'])){
                $name = $_GET['name'];
            }

            if(isset($_GET['size'])){
                $size = $_GET['size'];
            }

            echo "Mein Name ist " . $name . " und ich bin " . $size . "cm groß";

        ?>
    </body>
</html>
