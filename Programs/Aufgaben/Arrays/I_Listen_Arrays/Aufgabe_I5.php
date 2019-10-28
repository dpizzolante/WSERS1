<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 2 - Aufgabe I5</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 30%;
        }


        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <p>
        <?php
            $temperatures = [
                "Montag" => 17.5,
                "Dienstag" => 19.2,
                "Mittwoch" => 21.8
            ];

            /* Hinzufügen neuer Werte */
            $temperatures["Donnerstag"] = 21.6;
            $temperatures["Freitag"] = 17.5;
            $temperatures["Samstag"] = 20.2;
            $temperatures["Sonntag"] = 16.6;

            /* Anzeigen der Temperaturmessungen in einer Tabelle mit 2 Spalten */
            echo "<table>";
            echo "    <tr>";
            echo "        <th>Wochentag</th><th>Temperaturmessung</th>";
            echo "    </tr>";

            foreach($temperatures as $day => $temperature)
            {
                echo "    <tr>";
                echo "        <td>$day</td><td>$temperature</td>";
                echo "    </tr>";
            }

            echo "</table>";

            /* Berechnung und Anzeigen der Durchnittstemperatur */
            $sum = 0;
            foreach($temperatures as $day => $temperature)
                $sum += $temperature;

            echo "<p>Die Durschnittstemperatur der vergangenen Woche war bei " . $sum / count($temperatures) . ".</p>";
        ?>
    </p>
</body>
</html>