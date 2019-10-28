<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="author" content="Marco ERNSTER">

        <title> Willkommenstext</title>

    </head>

    <body>

    <?php

        $person=array();
        $person[] = "Knosti";
        $person[] = "Constantin";
        $person[] = "Cosai";

        $nummer=array();
        $nummer[] = "621 123 111";
        $nummer[] = "661 321 111";
        $nummer[] = "621 654 321";

        for($i=0;$i<count($person);$i++) {
            print_r("<li>" . $person[$i] . " = " . $nummer[$i] . "</li>");
        }
    ?>

    </body>

</html>

