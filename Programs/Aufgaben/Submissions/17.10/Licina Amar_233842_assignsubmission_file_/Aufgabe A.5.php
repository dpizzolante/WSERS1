<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Licina Amar">
    <meta charset="UTF-8">
    <title>Aufgabe A.5</title>
</head>
<body>
    <?php

        if(isset($_GET['money'])){

            $money = $_GET['money'];
            echo "Euer Geldbetrag liegt bei " . $money . " Euros"."<br>";

            if ($money % 5 != 0) {
                echo "Es können nur Geldbeträge gegeben werden, die durch 5 teilbar sind!";
            }
            else {
                $number = [500, 200, 100, 50, 20, 10, 5];
                foreach ($number as $calculate) {
                    echo floor($money / $calculate). "<img src='Euroscheine/Euroschein".$calculate.".jpg' width='200px'>". "Scheine von ${calculate} Euro <br>";
                    $money = $money % $calculate;

                }
            }
        }
        else{
            echo "Wert eingeben";
        }

        echo "<pre>". print_r($_GET, true) . "</pre>";



    ?>
</body>
</html>

