<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 4 - Aufgabe A6</title>
    <style type="text/css">
        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}
    </style>
</head>
<body>
    <?php
        /*
         * Rechnet $inches Zoll in Zentimeter um.
         * Das Resultat der Umrechnung wird zurückgegeben.
         */
        function inchesToCm($inches)
        {
            // Berechnen des Ergebnisses
            $cm = $inches * 2.54;

            // Zurückschicken des Ergebnisses
            return $cm;
        }
    ?>

    <h3>Zoll-Zentimeter Umrechnungstabelle</h3>
    <table>
        <tr><th>Zoll</th><th>Zentimeter</th></tr>
        <?php
            for($i = 1; $i <= 10; $i++)
            {
                $cm = inchesToCm($i);
                echo "<tr><td>$i</td><td>$cm</td></tr>";
            }
        ?>
    </table>

    <?php
        if(isset($_GET["diagonalInInches"]))
        {
            $diagonalInInches = $_GET["diagonalInInches"];
            $diagonalInCm = inchesToCm($diagonalInInches);
            $squareSurfaceInCm = ($diagonalInCm * $diagonalInCm) / 2;

            echo "<p>Die Fläche eines Quadrates mit einer Diagonale von 
                    $diagonalInCm Zentimeter ($diagonalInInches Zoll) ist $squareSurfaceInCm Quadratzentimeter. </p>";


        }
    ?>
</body>
</html>