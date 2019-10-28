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

        echo "myFunction1(2): " . myFunction1(2) . "<br>";
        echo "myFunction2(2): " . myFunction2(2) . "<br>";
        echo "myFunction3(2): " . myFunction3(2) . "<br>";

        echo "myFunction4(-2): " . myFunction4(-2) . "<br>";
        echo "myFunction4(2): " . myFunction4(2);
    ?>
</body>
</html>