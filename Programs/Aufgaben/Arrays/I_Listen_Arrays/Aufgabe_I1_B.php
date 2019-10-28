<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 2 - Aufgabe I1 - Kurze Variante</title>
</head>
<body>
    <?php
        $weather = ["sonnig", "regnerisch", "bewölkt"];
        $comment = ["Es wird ein wunderschöner Tag!", "Im Bett bleiben!", "Es könnte schlimmer sein!"];
        $pick = mt_rand(0, 2);

        echo "<p>Die heutige Wettervorhersage: " . $weather{$pick} . "<br>";
        echo $comment[$pick] . "</p>";
    ?>
</body>
</html>