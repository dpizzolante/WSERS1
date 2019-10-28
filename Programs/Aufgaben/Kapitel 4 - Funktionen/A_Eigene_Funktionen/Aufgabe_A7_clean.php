<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 4 - Aufgabe A7</title>
</head>
<body>
    <?php
        function myFunction1($a)
        {
            $result = $a *10;
        }

        function myFunction2($a)
        {
            $result = $a * 10;
            return;
        }

        function myFunction3($a)
        {
            $result = $a * 10;
            return $result;
            echo "Hi!";
        }

        function myFunction4($a)
        {
            if($a < 0)
            {
                return 'Hello';
            }

            return 'World!';
        }
    ?>
</body>
</html>