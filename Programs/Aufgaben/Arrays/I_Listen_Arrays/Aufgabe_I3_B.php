<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 2 - Aufgabe I3 - Variante mit Schleife</title>
</head>
<body>
    <?php
        $grades = ["John Doe" => 45, "Max Mustermann" => 60, "Donald Duck" => 21];

        echo "<p>";
        foreach($grades as $student => $grade)
        {
            echo "Schüler $student hat die Note $grade.<br>";
        }
        echo "</p>";
    ?>
</body>
</html>