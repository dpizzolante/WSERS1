<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 2 - Aufgabe I3 - Variante ohne Schleife</title>
</head>
<body>
    <?php
        $grades = ["John Doe" => 45, "Max Mustermann" => 60, "Donald Duck" => 21];

        echo "<p>";
        echo "Schüler John Doe hat die Note " . $grades["John Doe"]. "<br>";
        echo "Schüler Max Musterman hat die Note " . $grades["Max Mustermann"]. "<br>";
        echo "Schüler Donald Duck hat die Note " . $grades["Donald Duck"]. "<br>";
        echo "</p>";
    ?>
</body>
</html>