<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 4 - Aufgabe A5</title>
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
         * Die Zoll- und Zentimeterwerte werden als Tabellenzeile ausgegeben.
         */
        function inchesToCm($inches)
        {
            // Berechnen des Ergebnisses
            $cm = $inches * 2.54;

            // Ausgabe der Tabellenzeile
            echo "<tr><td>$inches</td><td>$cm</td></tr>";
        }
    ?>

    <h3>Zoll-Zentimeter Umrechnungstabelle</h3>
    <table>
        <tr><th>Zoll</th><th>Zentimeter</th></tr>
        <?php
            for($i = 1; $i <= 10; $i++)
            {
                inchesToCm($i);
            }
        ?>
    </table>
</body>
</html>