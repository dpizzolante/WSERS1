<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Alex SS">
    <title>Aufgabe 3</title>
</head>
<body>
<?php

$loops =13;

if (isset($_GET['loops'])) {
    $loops = $_GET["loops"];
}

for ($i = 1; $i <= $loops; $i++) {
    echo "<p> $i " . "Welcome!</p>";
}
?>
</body>
</html>
