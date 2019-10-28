<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 2 - Aufgabe I2</title>
</head>
<body>
    <?php
        $randomNumbers = [];

        for($i = 0; $i < 16; $i++)
            $randomNumbers[] = mt_rand(1, 100);


        echo "<pre>" . print_r($randomNumbers, true) . "</pre>";


        $pick = mt_rand(0, 15);
        echo "<p>Zufällige Zahl: " . $randomNumbers{$pick} . "</p>";
    ?>
</body>
</html>