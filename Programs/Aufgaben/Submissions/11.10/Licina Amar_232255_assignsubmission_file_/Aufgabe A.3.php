<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Licina Amar">
    <meta charset="UTF-8">
    <title>Aufgabe A.3</title>
</head>
<body>
    <?php

        $name = "Willkommen";
        $loops = 13;

        if (isset($_GET['name']))

        $name = $_GET['name'];


        echo $name;



        echo "<pre>". print_r($_GET, true) . "</pre>";


    ?>
</body>
</html>