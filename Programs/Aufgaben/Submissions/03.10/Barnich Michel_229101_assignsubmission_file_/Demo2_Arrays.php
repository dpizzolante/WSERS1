<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 2: Arrays Demo2</title>
</head>
<body>
    <?php
        $countries = ["Austria", "Belgium", "Bulgaria", "Croatia", "Cyprus", "Czech Republic", "Denmark", "Estonia", "Finland", "France", "Germany", "Greece", "Hungary", "Ireland", "Italy", "Latvia", "Lithuania", "Luxembourg", "Malta", "Netherlands", "Poland", "Portugal", "Romania", "Slovakia", "Slovenia", "Spain", "Sweden", "UK"];
        $capitals = ["Vienna", "Brussels", "Sofia", "Zagreb", "Nicosia", "Prague", "Copenhagen", "Tallinn", "Helsinki", "Paris", "Berlin", "Athens", "Budapest", "Dublin", "Rome", "Riga", "Vilnius", "Luxembourg", "Valletta", "Amsterdam", "Warsaw", "Lisbon", "Bucharest", "Bratislava", "Ljubljana", "Madrid", "Stockholm", "London"];
        $numOfCountries = count($countries);

        echo "<table border='1'><tr><th>Land</th><th>Hauptstadt</th></tr>";

        for ($i = 0; $i < $numOfCountries; $i++) {
            echo "<tr><td>" . $countries[$i] . "</td><td>" . $capitals[$i] . "</td></tr>";
        }

        echo "<tr><td>Total:</td><td>" . $numOfCountries . " Laender/Staedte</td></tr>";
        echo "</table>";

    ?>
</body>
</html>