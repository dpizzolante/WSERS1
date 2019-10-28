<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Licina Amar">
    <meta charset="UTF-8">
    <title>Kapitel 2: Arrays Demo 3</title>
</head>
<body>
    <?php
        $europe = [
            "Austria" => "Vienna",
            "Belgium" => "Brussels",
            "Bulgaria" => "Sofia",
            "Croatia" => "Zagreb",
            "Cyprus" => "Nicosia",
            "Czech Republic" => "Prague",
            "Denmark" => "Copenhagen",
            "Estonia" => "Tallinn",
            "Finland" => "Helsinki",
            "France" => "Paris",
            "Germany" =>  "Berlin",
            "Greece" => "Athens",
            "Hungary" => "Budapest",
            "Ireland" =>  "Dublin",
            "Italy" => "Rome",
            "Latvia" => "Riga",
            "Lithuania" => "Vilnius",
            "Luxembourg" => "Luxembourg",
            "Malta" => "Valletta",
            "Netherlands" => "Amsterdam",
            "Poland" => "Warsaw",
            "Portugal" => "Lisbon",
            "Romania" => "Bucharest",
            "Slovakia" =>  "Bratislava",
            "Slovenia" => "Ljubljana",
            "Spain" => "Madrid",
            "Sweden" =>  "Stockholm",
            "UK" =>"London"
        ];

        asort($europe);

        foreach($europe as $i => $i_value) {
            echo "Land=" . $i . ", Hauptstadt=" . $i_value;
            echo "<br>";
        }
    ?>
</body>
</html>