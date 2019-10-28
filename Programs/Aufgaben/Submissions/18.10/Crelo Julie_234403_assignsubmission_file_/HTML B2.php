<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Julie Crelo">
    <title>Aufgabe I.5</title>
</head>
<body>
    <p>Bitte geben Sie den Gesamtbetrag, den Betrag der pro Enkelkind verschenkt
        werden soll und die Anzahl an Enkelkinder: <br></p>
    <form action="Aufgabe%20B2.php" method="post">
        <label for="totalAmount">Gesamtbetrag: </label>
        <input id="totalAmount" type="text" name="DATA_totalAmount"><br>
        <label for="amountPro">Betrag pro Enkelkind: </label>
        <input id="amountPro" type="text" name="DATA_amountPro"><br>
        <label for="numberChildren">Anzahl an Enkelkinder: </label>
        <input id="numberChildren" type="text" name="DATA_numberChildren"><br>
        <input type="submit" name="BUTTON_send" value="Daten absenden">
    </form>

    <?php


            if(isset($_POST['BUTTON_send'])) {

                //Gesamtbetrag//

                if ($_POST['DATA_totalAmount'] != "" && $_POST['DATA_amountPro'] >= 200) {
                    $totalAmount = $_POST['DATA_totalAmount'];
                } else {
                    echo "Sie müssen einen Gesamtbetrag auswählen";
                }

                //Betrag pro Kind //

                if ($_POST['DATA_amountPro'] != "" && $_POST['DATA_amountPro'] >= 50) {
                    $amountPro = $_POST['DATA_amountPro'];
                } else {
                    echo "Sie müssen einen Betrag pro Kind angeben";
                }

                //Anzahl der Einkelkinder//

                if ($_POST['DATA_numberChildren'] != "" && $_POST['DATA_numberChildren'] >= 50) {
                    $numberChildren = $_POST['DATA_numberChildren'];
                } else {
                    echo "Sie müssen einen Betrag pro Kind angeben";
                }

            }
    ?>
<?php
        }
        //if(!isset($_GET['']));
            ?>
</body>
</html>
