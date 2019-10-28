<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 3 - POST Demo</title>
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

            if(isset($_POST["DATA_vorname"]) && isset($_POST["DATA_nachname"]))
            {
                // Das Formular auswerten
                echo "<p>Guten Tag, " . $_POST["DATA_vorname"] . " " . $_POST["DATA_nachname"] . "</p>";
            }
            else
            {
        ?>
        <p>Bitte tragen Sie Ihren Vornamen und Ihren Nachnamen ein.<br>
                Senden Sie anschließend das Formular ab.</p>
        <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
            <label for="DATA_vorname">Vorname</label><input type="text" id="DATA_vorname"
                                                            required name="DATA_vorname"><br>
            <label for="DATA_nachname">Nachname</label><input type="text"
                                                              required id="DATA_nachname"
                                                              name="DATA_nachname"><br>
            <input type="submit" id="BUTTON_senden" name="BUTTON_senden" value="Daten absenden">
        </form>

        <?php
            }
        ?>
    </main>
</body>
</html>