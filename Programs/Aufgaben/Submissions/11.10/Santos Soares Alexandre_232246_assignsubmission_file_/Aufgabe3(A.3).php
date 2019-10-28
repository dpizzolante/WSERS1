<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Alex SS">
    <title>Aufgabe 3</title>
</head>
<body>
    <?php
        //$loops ='';

        if (isset($loops)) {
            $loops = $_GET["loops"];
        } else {
            $loops = 13;
        }

        for ($i = 0; $i < $loops; $i++) {
            echo "<p>Welcome!</p>";
        }
    ?>
    </body>
</html>