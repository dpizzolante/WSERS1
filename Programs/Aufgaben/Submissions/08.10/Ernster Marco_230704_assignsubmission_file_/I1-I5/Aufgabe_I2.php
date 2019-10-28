<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="author" content="Marco ERNSTER">

        <title> Willkommenstext</title>

    </head>

    <body>

        <?php

            $zufall = mt_rand(0, 15);

            $egal=array();
            for($i=0;$i<16;$i++) {

                //Die Zufallszahl wird in jede Zeile erstellt und zum Schluss wird die Zufallszahl aus der gewählten Zeile eingefügt

                echo $egal[] = mt_rand(0, 100) . " ";


            }

            echo "<p>" . $egal[$zufall] . "</p>";

        ?>

    </body>

</html>



