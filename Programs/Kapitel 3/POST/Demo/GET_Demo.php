<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 3 - GET Demo</title>
</head>
<body>
    <?php

        if(!isset($_GET["greeting"]))
        {
            echo "No greeting for you!";
        }
        else if($_GET["greeting"] == 1)
        {
            echo "Hello!";
        }
        else
        {
            echo "Goodbye!";
        }

    ?>
</body>
</html>