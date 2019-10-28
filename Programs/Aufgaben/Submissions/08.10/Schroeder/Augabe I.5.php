<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe I.2</title>
</head>
<body>
    <?php
        $temperatures = [
            "Montag" => 17.5,
            "Dienstag" => 19.2,
            "Mittwoch" => 21.8,
            "Donnerstag" => 21.6,
            "Freitag" => 17.5,
            "Samstag" => 20.2,
            "Sonntag" => 16.6
        ];

        $count = 0;
        $sum = 0;
        echo "<table>";
            echo "<tr>";
                echo "<th>Tag</th>";
                echo "<th>Temperatur</th>";
            echo "</tr>";

        foreach ($temperatures as $day => $temperature){
            echo "<tr>";
                echo "<td>$day</td>";
                echo "<td>$temperature</td>";
            echo "</tr>";

            $count++;
            $sum = $sum + $temperature;
        }

            $avarage = $sum/$count;
            echo "<tr>";
                echo "<td>Summe : $sum</td>";
                echo "<td>Durschnitt : $avarage</td>";
            echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>