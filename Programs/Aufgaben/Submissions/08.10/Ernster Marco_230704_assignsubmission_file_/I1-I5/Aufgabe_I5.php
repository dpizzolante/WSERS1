<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="author" content="Marco ERNSTER">

        <title> Willkommenstext</title>

    </head>

    <body>

        <?php

            $temperature= [
                "Montag" => 17.5,
                "Dienstag" => 19.2,
                "Mittwoch" => 21.8,
                "Donnerstag" => 21.6,
                "Freitag" => 17.5,
                "Samstag" => 20.2,
                "Sonntag" => 16.6
            ];

            echo "<table>";
              $rechnung=0;
            foreach($temperature as $tag=>$grad)
            {
                echo "<tr>" . "<td>" . $tag . "</td>" . "<td>" . $grad . "</td> " . "</tr>";

            };

            echo "</table>";


           /* for($i=0;$i<count($temperature);$i++){

                $rechnung + $temperature[$i];


            }*/

            echo $rechnung;

        ?>

    </body>

</html>


