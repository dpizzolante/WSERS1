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
    <main>
        <?php
            echo "<p>Ich bin " . $_GET['name'] . " und bin " . $_GET['size'] . "cm groß!</p>";
        ?>
    </main>

</body>
</html>