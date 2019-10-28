<html>
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
<?php

    // Mit numerischen Schlüsseln Methode 1
    $cars = array("Volvo", "BMW,", "Audi");

    echo "First element: ". $cars[0] . "</p>";

    // Mit numerischen Schlüsseln Methode 2
    $days = [];
    $days[0] = "Monday";
    $days[1] = "Tuesday";
    $days[2] = "Wednesday";

    echo "2nd element : " . $days[1] . "</p>";

    //Zeige eine ganze Liste
    echo "<pre>" . print_r($days,true) . "</pre>". "<br>";
    echo "<pre>". print_r($cars, true) . "</pre>";

    //Weiter Werte einer Liste zufügen
    $cars[] = "Range Rover";
    echo "<br>" . "<pre>" . print_r($cars,true) ."</pre>";

    $mitarbeiter = array(
        "Ben" => "Ben Krier",
        "Dario" => "Dario Pizzolante");

    $mitarbeiter["Fred"] = "Fred Faber";
    echo $mitarbeiter["Fred"] . "</p>" ;

    // Alternative Methode für Deklarationen
    $schüler = [
        0 => "Pim",
        1 => "Pam"
    ];
    echo $schüler[1];

?>

</body>

</html>