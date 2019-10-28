<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    if(isset($_GET['money']))
        {
         $money = $_GET['money'];
         echo "<p>Der Betrag liegt bei " .  $money . " €</p>";

            $Scheine = [];
            $Scheine['Euroschein500.jpg'] = 500;
            $Scheine['Euroschein200.jpg'] = 200;
            $Scheine['Euroschein100.jpg'] = 100;
            $Scheine['Euroschein50.jpg'] = 50;
            $Scheine['Euroschein20.jpg'] = 20;
            $Scheine['Euroschein10.jpg'] = 10;
            $Scheine['Euroschein5.jpg'] = 5;
            foreach ($Scheine as $images => $wert) {
                echo "<p>". floor($money / $wert). " <img src='Euroscheine/$images' width='250px' length='250px' alt='Bild von einem Schein' ".$wert . "€ Scheine </p>";
                $money = $money % $wert;

            }
            if ($money % 5 != 0) {
                echo "Mehr Geld kann man nicht mit Scheinen austauschen!";
            }
        }
    else{
        echo "Money ist nicht angegeben!";
    }
    ?>
</body>
</html>