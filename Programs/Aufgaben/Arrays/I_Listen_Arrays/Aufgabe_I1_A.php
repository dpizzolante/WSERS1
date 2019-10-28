<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 2 - Aufgabe I1 - Lange Variante</title>
</head>
<body>
    <?php
        $weather = ["sonnig", "regnerisch", "bewölkt"];
        $pick = mt_rand(0, 2);

        echo "<p>Die heutige Wettervorhersage: " . $weather{$pick} . "<br>";

        if($weather[$pick] === "sonnig")
        {
            echo "Es wird ein wunderschöner Tag!";
        }
        else if($weather[$pick] === "regnerisch")
        {
            echo "Im Bett bleiben!";
        }
        else
        {
            echo "Es könnte schlimmer sein!";
        }

        echo "</p>";
    ?>
</body>
</html>