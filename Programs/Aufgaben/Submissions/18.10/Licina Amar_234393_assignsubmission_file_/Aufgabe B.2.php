<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Licina Amar">
    <meta charset="UTF-8">
    <title>Aufgabe B.2</title>
</head>
<body>

    <?php
        if(isset($_POST["BUTTON_send"]))
        {
            $money = $_POST["DATA_money"];
            $moneyGrandchildren = $_POST["DATA_moneyGrandchildren"];
            $grandchildren = $_POST["DATA_grandchildren"];


            $global=$money/$moneyGrandchildren;

            if ($money%$grandchildren == 0){

                echo "Ihr Geld reicht aus. <br>";
                echo "Mit " . $money . " Euro und ein Betrag von " . $moneyGrandchildren . " Euros pro enkelkind können sie geld an " . $global . " Enkelkind(er) verschenken<br>";

            }
            else{
                echo "Sie möchten Geld an " . $grandchildren . " Enkelkind(er) verschenken. Ihr Geld reicht leider nicht aus.<br>";
                echo "Mit " . $money . " Euro und ein Betrag von " . $moneyGrandchildren . " Euros pro enkelkind können sie geld an " . $global . " Enkelkind(er) verschenken<br>";
            }


            echo "Sie haben ein Büdget von " . $money . " Euro"."<br>"."Sie geben jedem Enkelkind " . $moneyGrandchildren . " Euro"."<br>". "und sie haben " . $grandchildren . " Enkelkinder";

        }

    ?>
    <p>Bitte geben sie den Gesamtbetrag, den Betrag der pro Enkelkind verschenkt werden soll und die Anzahl an Enkelkindern:</p>
    <form action="Aufgabe B.2.php" method="post">
        <label for="money">Gesamtbetra: </label>
        <input id="money" type="text" name="DATA_money"><br>
        <label for="moneyGrandchildren">Betrag pro Enkelkind: </label>
        <input id="moneyGrandchildren" type="text" name="DATA_moneyGrandchildren"><br>
        <label for="grandchildren">Anzahl an Enkelkinder: </label>
        <input id="grandchildren" type="text" name="DATA_grandchildren"><br>
        <input type="submit" name="BUTTON_send" value="Daten absenden">
    </form>



</body>
</html>

