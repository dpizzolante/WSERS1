!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Alex SS">
        <title>Aufgabe 3</title>
    </head>
    <body>
    <?php
        $number = $_GET['number'];

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
    ?>
    </body>
</html>