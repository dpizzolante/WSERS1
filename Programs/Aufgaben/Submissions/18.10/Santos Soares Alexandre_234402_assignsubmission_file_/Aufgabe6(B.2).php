<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Alex SS">
        <title>Aufgabe 3</title>
    </head>
    <body>
    <form action="Aufgabe6(B.2).php" method="post">
        Gesamtbetrag: <input type="number" name="amunt"><br>
        Betrag pro  Enkelkind: <input type="number" name="enkelkind"><br>
        Anzahl an Enkelkinder: <input type="number" name="anzahl"><br>
        <input type="submit">
    </form>
    <?php
    $amunt = $_POST['amunt'];
    $enkelkind = $_POST['enkelkind'];
    $anzahl = $_POST['anzahl'];

    if($_POST['amunt']<0&&$_POST['enkelkind']<0&&$_POST['anzahl']<0)
    {
        echo "Ungultige Eingabe kann nur positive zahlen sein.";
    }
    else
    {
        for($i=0;$i<=$enkelkind;$i++)
        {
            if ($amunt%$i==0)
            {
                echo "Ihre " . $anzahl ." Enkelkinder becommen jeder " . $amunt/$anzahl . " von ihren " . $amunt . ".";
            }
            else
            {
                echo "Ihre " . $anzahl ." Enkelkinder konnen sich das " . $amunt . " nicht teilen.";
            }
        }
    }
    ?>
    </body>
</html>
