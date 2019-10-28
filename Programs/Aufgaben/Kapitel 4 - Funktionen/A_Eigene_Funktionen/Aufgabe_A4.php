<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 4 - Aufgabe A4</title>
</head>
<body>
    <?php
        function showAge($age)
        {
            $age = 99;
            echo "Dein Alter: $age";
        }

        function test()
        {
            $a = 18;
            showAge($a);
        }

    ?>
</body>
</html>