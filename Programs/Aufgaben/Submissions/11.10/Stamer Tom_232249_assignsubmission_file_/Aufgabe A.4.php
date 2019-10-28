<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Stamer Tom">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

    $number = 10;

    while($number != 0) {


        if ($number % 2 == 0) {
            ($number / 2);
        }
        if($number % 2 == 1){
            ($number * 3 + 1);
        }

        echo $number . " -> ";
    }
?>
</body>
</html>
