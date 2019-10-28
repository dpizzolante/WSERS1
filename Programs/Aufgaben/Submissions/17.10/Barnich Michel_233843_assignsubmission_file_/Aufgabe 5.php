<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Michel Vic Albert François Barnich" />
    <meta charset="UTF-8" />
    <title>Ausgabe von HTML-Elementen</title>
    <style>
        img {
            height:150px;
            }
    </style>
</head>
<body>
    <?php
        if (isset($_POST["send"])) {
            $number = $_GET['number'];

            if ($number % 5 == 0) {

                if ($number / 500 > 1) {
                    $numberOfBills = floor($number/500);
                    $number = ($number / 500 - floor($number/500)) * 500;
                    echo "<p>" . $numberOfBills . "<img src='money/Euroschein500.jpg'>Schein(e)</p>";
                } else {
                    echo "<p>0<img src='money/Euroschein500.jpg'>Schein(e)</p>";
                }

                if ($number / 200 > 1) {
                    $numberOfBills = floor($number/200);
                    $number = ($number / 200 - floor($number/200)) * 200;
                    echo "<p>" . $numberOfBills . "<img src='money/Euroschein200.jpg'>Schein(e)</p>";
                } else {
                    echo "<p>0<img src='money/Euroschein200.jpg'>Schein(e)</p>";
                }

                if ($number / 100 > 1) {
                    $numberOfBills = floor($number/100);
                    $number = ($number / 100 - floor($number/100)) * 100;
                    echo "<p>" . $numberOfBills . "<img src='money/Euroschein100.jpg'>Schein(e)</p>";
                } else {
                    echo "<p>0<img src='money/Euroschein100.jpg'>Schein(e)</p>";
                }

                if ($number / 50 > 1) {
                    $numberOfBills = floor($number/50);
                    $number = ($number / 50 - floor($number/50)) * 50;
                    echo "<p>" . $numberOfBills . "<img src='money/Euroschein50.jpg'>Schein(e)</p>";
                } else {
                    echo "<p>0<img src='money/Euroschein50.jpg'>Schein(e)</p>";
                }

                if ($number / 20 > 1) {
                    $numberOfBills = floor($number/20);
                    $number = ($number / 20 - floor($number/20)) * 20;
                    echo "<p>" . $numberOfBills . "<img src='money/Euroschein20.jpg'>Schein(e)</p>";
                } else {
                    echo "<p>0<img src='money/Euroschein20.jpg'>Schein(e)</p>";
                }

                if ($number / 10 > 1) {
                    $numberOfBills = floor($number/10);
                    $number = ($number / 10 - floor($number/10)) * 10;
                    echo "<p>" . $numberOfBills . "<img src='money/Euroschein10.jpg'>Schein(e)</p>";
                } else {
                    echo "<p>0<img src='money/Euroschein10.jpg'>Schein(e)</p>";
                }

                if ($number / 5 > 1) {
                    $numberOfBills = floor($number/5);
                    $number = ($number / 5 - floor($number/5)) * 5;
                    echo "<p>" . $numberOfBills . "<img src='money/Euroschein5.jpg'>Schein(e)</p>";
                } else {
                    echo "<p>0<img src='money/Euroschein5.jpg'>Schein(e)</p>";
                }
            } else {
                echo "Die Zahl ist nicht durch 5 teilbar!";
            }
        } else {
    ?>

    <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
        <label for="number">Betrag: </label>
        <input id="number" type="text" name="number"><br>
        <input type="submit" name="send" value="Daten absenden">
    </form>

    <?php
        }
    ?>
</body>
</html>