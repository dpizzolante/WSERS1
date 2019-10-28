<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verzweigungen und Meteo</title>
</head>
<body>
<?php
echo "<h2>While Schleife</h2>";
    $myRandNumber= mt_rand(1,6);
    $counter=1;

    while ($myRandNumber != 6){
        $myRandNumber = mt_rand(1,6);
        $counter++;
    }

    if ($counter==1)
    {
        echo "WOW! Du hast eine 6 beim ersten Versuch gewürfelt";
    }
    else
        echo "Du hast eine " . $myRandNumber . " nach " . $counter . " Versuche gewürfelt";


    echo "<pr> <h2> do-while Schleife</h2></pr>";


    // do while
    do {
        $myRandNumber = mt_rand((0, 30);
    } while($myRandNumber > 10 AND $myRandNumber < 20);

    echo "Unsere Zufallszahl: $myRandNumber";

?>
</body>
</html>