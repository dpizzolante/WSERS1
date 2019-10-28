<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 3 - Aufgabe A2</title>
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
        <p>
            <?php
            echo "<pre>" . print_r($_GET , true) . "</pre>";

            foreach ($_GET as $parameter => $value)
            {
                echo "$parameter = $value<br>";
            }
            ?>
        </p>
    </main>
</body>
</html>