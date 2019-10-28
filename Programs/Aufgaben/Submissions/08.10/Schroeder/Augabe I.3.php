<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe I.3</title>
</head>
<body>
    <?php
        $schueler = [
                "Max" => "45",
                "Bob" => "33",
                "Kevin" => "12"
        ];

        foreach ($schueler as $name => $note){
            echo "</p>$name hat die Note $note</p>";
        }
    ?>
</body>
</html>