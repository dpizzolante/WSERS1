<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe I.2</title>
</head>
<body>
    <?php
        $list = [];

        for ($i=1; $i <= 16; $i++) {
            $random = rand();
            $list[] = $random;
        }

        $picker = mt_rand(0, 15);
        echo $list[$picker];
    ?>
</body>
</html>