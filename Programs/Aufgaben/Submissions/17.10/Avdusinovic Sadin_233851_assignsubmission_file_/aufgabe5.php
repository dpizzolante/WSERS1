<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>get_Aufgabe 4</title>
</head>
<body>
<?php
    $money = $_GET['money'];

    if ($money % 5 == 0)
    {
        if ($money / 500 > 1)
        {
        $bills = floor($number/500);
        echo "<p>" . $bills . "<img src='Euroschein500.jpg'>
        Schein(e)
        </p>";
        }

        else
            {
                echo "<p>0<img src='money/Euroschein500.jpg'>Schein(e)</p>";
            }

          {
        if ($money / 200 > 1)
        {
        $bills = floor($number/200);
        echo "<p>" . $bills . "<img src='Euroschein200.jpg'>
        Schein(e)
        </p>";
         }

         else
             {
             echo "<p>0<img src='money/Euroschein200.jpg'>Schein(e)</p>";
            }
        }
    {
        {
            if ($money / 100 > 1)
            {
                $bills = floor($number/100);
                echo "<p>" . $bills . "<img src='Euroschein100.jpg'>Schein(e) </p>";
            }

            else
            {
                echo "<p>0<img src='money/Euroschein100.jpg'>Schein(e)</p>";
            }


        }
?>
</body>
</html>
