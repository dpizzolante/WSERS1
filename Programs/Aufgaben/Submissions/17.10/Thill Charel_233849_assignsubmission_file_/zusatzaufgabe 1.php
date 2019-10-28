<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zusatzaufgabe </title>
</head>
<body>
<?php
        if(isset($_GET['money']))
{
        $Geld = $_GET['money'];
        echo "<p>Der Betrag liegt bei " .  $money . " €</p>";
        $Geldschein = [];
            $Geldschein['Geldschein-500.jpg'] = 500;
            $Geldschein['Geldschein-200.jpg'] = 200;
            $Geldschein['Geldschein-100.jpg'] = 100;
            $Geldschein['Geldschein-50.jpg'] = 50;
            $Geldschein['Geldschein-20.jpg'] = 20;
            $Geldschein['Geldschein-10.jpg'] = 10;
            $Geldschein['Geldschein-5.jpg'] = 5;
    for ($Geldschein as $images => $wert) {
            echo "<p>". floor($money / $wert). " <img src='EuroGeldschein
            /$images' width='175px' length='175px' alt='Bild von einem Schein' ".$wert . "€ Geldschein
       </p>";
            $money = $money % $wert;
    }
    if ($money % 5 != 0) {
                echo "Mehr Geld kann man mit Geldscheinen nicht austauschen!";
    }
}
    else{
            echo "Money ist nicht angegeben!";
}
?>
</body>
</html>