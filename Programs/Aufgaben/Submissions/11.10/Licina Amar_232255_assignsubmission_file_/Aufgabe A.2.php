<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Licina Amar">
    <meta charset="UTF-8">
    <title>Aufgabe A.2</title>
</head>
<body>
    <?php

        foreach ($_GET as $i => $i_value){
            echo $i = $i_value;
        }

        echo "<pre>". print_r($_GET, true) . "</pre>";


    ?>
</body>
</html>

