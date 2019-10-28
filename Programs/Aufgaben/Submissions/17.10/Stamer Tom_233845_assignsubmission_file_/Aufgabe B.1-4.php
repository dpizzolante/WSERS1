<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Stamer Tom">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
if(isset($_POST['number'])) {
    $number = $_POST['number'];
    $step = 0;
    echo "($number)";
    while ($number != 1) {


        if ($number % 2 == 0) {
            $number = $number / 2;
        } else {
            $number = $number * 3 + 1;
        }
        $step++;

        echo " => $number ";
    }

    echo " = $step Schritte";
}
else {
    echo "Gib einen Parameter 'number' an!";
}
?>
</body>
</html>
