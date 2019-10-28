<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 3 - Aufgabe C1</title>
    <style>
        label{
            display: inline-block;
            width: 80px;
            text-align: right;
        }​
    </style>
</head>
<body>

    <?php
        if (isset($_POST['BUTTON_send']))
        {
            $temperatures = $_POST['DATA_temperatures'];

            $sum = 0;
            for($i = 0; $i < count($temperatures); $i++)
            {
                $sum += $temperatures[$i];
            }

            echo "<p>";
            echo "Vielen Dank für Ihre Eingabe!<br>";
            echo "Die ermittelte Durschnittstemperatur letzter Woche ist " . $sum / 7 ." Grad";
            echo "</p>";
        }
        else
        {
    ?>
            <p>Bitte geben Sie die Temperaturen für letzte Woche ein:</p>

            <form method="post">
                <label for="temp1">Montag: </label>
                <input id="temp1" type="number" name="DATA_temperatures[]" required><br>

                <label for="temp2">Dienstag: </label>
                <input id="temp2" type="number" name="DATA_temperatures[]" required><br>

                <label for="temp3">Mittwoch: </label>
                <input id="temp3" type="number" name="DATA_temperatures[]" required><br>

                <label for="temp4">Donnerstag: </label>
                <input id="temp4" type="number" name="DATA_temperatures[]" required><br>

                <label for="temp5">Freitag: </label>
                <input id="temp5" type="number" name="DATA_temperatures[]" required><br>

                <label for="temp6">Samstag: </label>
                <input id="temp6" type="number" name="DATA_temperatures[]" required><br>

                <label for="temp7">Sonntag: </label>
                <input id="temp7" type="number" name="DATA_temperatures[]" required><br>

                <label for="submitButton"> </label>
                <input id="submitButton" type="submit" name="BUTTON_send" value="Berechnen">
            </form>
    <?php
        }
    ?>

</body>
</html>