
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Michel Vic Albert Fran�ois Barnich" />
    <meta charset="UTF-8" />
    <title>Ausgabe von HTML-Elementen</title>
</head>
<body>
    <?php
    if (isset($_POST["BUTTON_send"]))
        {
            echo "<p>Ich bin " . $_POST["DATA_firstname"] . " und bin " . $_POST["DATA_height"] . "gross</p>";
        } else {
    ?>
    <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
        <label for="firstname">Vorname: </label>
        <input id="firstname" type="text" name="DATA_firstname"><br>
        <label for="lastname">Grösse: </label>
        <input id="height" type="text" name="DATA_height"><br>
        <input type="submit" name="BUTTON_send" value="Daten absenden">
    </form>
    <?php
        }
    ?>
</body>
</html>