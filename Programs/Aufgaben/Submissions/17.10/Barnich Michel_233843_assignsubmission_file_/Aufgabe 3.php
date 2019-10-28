<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Michel Vic Albert François Barnich" />
    <meta charset="UTF-8" />
    <title>Ausgabe von HTML-Elementen</title>
</head>
<body>
    <?php
    if (isset($_POST["send"])) {
        $loops ='';
        
        if (isset($_POST["loops"])) {
            $loops = $_POST["loops"];
        } else {
            $loops = 13;
        }

        for ($i = 0; $i < $loops; $i++) {
            echo "<p>Welcome!</p>";
        }
    } else {
    ?>
    <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
        <label for="anzahl">Anzahl: </label>
        <input id="anzahl" type="text" name="loops"><br>
        <input type="submit" name="send" value="Daten absenden">
    </form>
    <?php
        }
    ?>
</body>
</html>