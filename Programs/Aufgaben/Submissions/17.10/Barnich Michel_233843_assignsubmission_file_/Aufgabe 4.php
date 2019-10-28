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
            $number = $_POST['number'];

            $result = $number;
            $counter = 0;

            echo "<p>" . $result;

            while ($result != 1) {
                $counter++;
                if($result%2 == 0) {
                    $result = $result / 2;
                } else {
                    $result = $result * 3 + 1;
                }

                echo " => " . $result;
            }

            echo " = " . $counter . " Schritte";
        } else {
    ?>

    <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
        <label for="number">Zahl: </label>
        <input id="number" type="text" name="number"><br>
        <input type="submit" name="send" value="Daten absenden">
    </form>

    <?php
        }
    ?>
</body>
</html>