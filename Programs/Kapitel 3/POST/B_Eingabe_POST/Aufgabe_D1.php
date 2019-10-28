<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 3 - Aufgabe B2</title>
    <style>
        main {
            margin: auto;
            width: 50%;
            border: 3px solid red;
            padding: 50px;
            text-align: left;
        }
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <main>
    <?php
        if (isset($_POST['BUTTON_send']))
        {
            $temperatures = $_POST['DATA_temperatures'];
            $sum = 0;

            for($i = 0; $i < count($temperatures); $i++)
            {
                $sum += $temperatures[i];
            }

            echo "<p>Vielen Dank für Ihre Eingabe!<br>";
            echo "Die ermittelte Durschnittstemperatur letzter Woche ist " . $sum / 7 ." Grad";
        }
    ?>

    <div class="container">
        <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
            Bitte geben Sie die Temperaturen für letzte Woche ein:<br>
            <label for="montag">Montag:</label>         <input type="text" id="montag"     name="DATA_temperatures[]"><br>
            <label for="dienstag">Dienstag:</label>     <input type="text" id="dienstag"   name="DATA_temperatures[]"><br>
            <label for="mittwoch">Mittwoch:</label>     <input type="text" id="mittwoch"   name="DATA_temperatures[]"><br>
            <label for="donnerstag">Donnerstag:</label> <input type="text" id="donnerstag" name="DATA_temperatures[]"><br>
            <label for="freitag">Freitag:</label>       <input type="text" id="freitag"    name="DATA_temperatures[]"><br>
            <label for="samstag">Samstag:</label>       <input type="text" id="samstag"    name="DATA_temperatures[]"><br>
            <label for="sonntag">Sonntag:</label>       <input type="text" id="sonntag"    name="DATA_temperatures[]"><br>
            <button name="BUTTON_send">Senden</button>
        </form>
    </div>
    </main>
</body>
</html>