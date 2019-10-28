<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Dams Yannis">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$count = 0;
$number = $_POST["number"];
while($number!==1) {
    if ($number % 2 == 0) {
        $number = $number / 2;
    } else {
        $number = $number * 3 + 1;
    }
    echo "$number => ";
    $count++;
}
echo "$count Schritte";
?>
</body>
</html>