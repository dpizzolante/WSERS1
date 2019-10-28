<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="author" content="Marco ERNSTER">

        <title> Willkommenstext</title>

    </head>

    <body>

        <?php

            $zufall = mt_rand(0, 2);

            $wetter=array();
            $wetter[] = "regnerisch";
            $wetter[] = "bewölkt";
            $wetter[] = "sonnig";

            $meinung=array();
            $meinung[] = "Im Bett bleiben!";
            $meinung[] = "Es könnte schlimmer sein!";
            $meinung[] = "Es wird ein wunderschöner Tag!";

            echo "Die heutige Wettervorhersage: " . $wetter[$zufall] . " " . $meinung[$zufall] ;
            //echo "<p>" . $zufall . "</p>";
        ?>

    </body>

</html>


