<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe I.1</title>
</head>
<body>
    <?php
        $weather = ["sonnig", "regnerisch", "bewölkt"];
        $text = [ "Es wird ein wunderschöner Tag!",  "Im Bett bleiben!",  "Es könnte schlimmer sein!"];
        $random = mt_rand(0,2);
        echo "Die heutige Wettervorhersage: " . $weather[$random] . "<br>" . $text[$random]
    ?>
</body>
</html>