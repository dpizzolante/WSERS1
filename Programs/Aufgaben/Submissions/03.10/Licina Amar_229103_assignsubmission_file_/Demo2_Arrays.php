<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Licina Amar">
    <meta charset="UTF-8">
    <title>Kapitel 2: Arrays Demo2</title>
</head>
<body>
    <?php
        $countries = ["Austria", "Belgium", "Bulgaria", "Croatia", "Cyprus", "Czech Republic", "Denmark", "Estonia", "Finland", "France", "Germany", "Greece", "Hungary", "Ireland", "Italy", "Latvia", "Lithuania", "Luxembourg", "Malta", "Netherlands", "Poland", "Portugal", "Romania", "Slovakia", "Slovenia", "Spain", "Sweden", "UK"];
        $capitals = ["Vienna", "Brussels", "Sofia", "Zagreb", "Nicosia", "Prague", "Copenhagen", "Tallinn", "Helsinki", "Paris", "Berlin", "Athens", "Budapest", "Dublin", "Rome", "Riga", "Vilnius", "Luxembourg", "Valletta", "Amsterdam", "Warsaw", "Lisbon", "Bucharest", "Bratislava", "Ljubljana", "Madrid", "Stockholm", "London"];

        $arrlength1 = count($countries);
        $arrlength2 = count($capitals);

        for($i = 0; $i < $arrlength1; $i++) {
            echo $countries[$i] . ", " . $capitals[$i];
            echo "<br>";
        }
    ?>
</body>
</html>