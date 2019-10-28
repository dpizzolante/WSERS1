<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Stamer Tom">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    $loops = 13;

    if(isset($_GET['loops']))
    {
        $loops = $_GET['loops'];
    }

    for($i = 1; $i <= $loops; $i++)
    {
        echo $i. ": Willkommen! <br>";
    }
?>
</body>
</html>
