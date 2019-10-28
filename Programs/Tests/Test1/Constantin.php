<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
    /*
        for($i=12; $i<68; $i+=11){
            echo $i . " ";
        }*/

    $capital = [
        "Niederlande" => "Amsterdam",
        "Deutschland" => "Berlin"
    ];
    $gericht = [
        "Niederlande" => "Käse",
        "Deutschland" => "Bratwurst mit Sauerkraut"
    ];

    //$_GET["country"] = "Niederlande";


    echo "Ich liebe " . $gericht[$_GET["country"]]." aus " . $capital[$_GET["country"]] . ".";

    ?>
</body>
</html>