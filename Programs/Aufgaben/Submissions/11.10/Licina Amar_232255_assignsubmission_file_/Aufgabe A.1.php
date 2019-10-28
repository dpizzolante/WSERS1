<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Licina Amar">
    <meta charset="UTF-8">
    <title>Aufgabe A.1</title>
</head>
<body>
    <?php

        $name = "Amar";
        $size = 180;
        if (isset($_GET['name']))
            $name = $_GET['name'];

        if (isset($_GET['size']))
            $size = $_GET['size'];

        echo "Ich bin " . $name . " und ich bin " . $size . " cm gross";

    ?>
</body>
</html>

