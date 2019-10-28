<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 3 - Aufgabe A1</title>
    <style>
        main {
            margin: auto;
            width: 50%;
            border: 3px solid red;
            padding: 50px;
            text-align: left;
        }
    </style>
</head>
<body>

    <?php
    $name ="Dario";
    $size ="170";

    if(isset($_GET['name'])){
        $name=$_GET['name'];
    }
    if(isset($_GET['name'])){
        $size=$_GET['size'];
    }
    echo "<p>Ich bin " . $name . " und bin " . $size . "cm groß!</p>";

    ?>

</body>
</html>