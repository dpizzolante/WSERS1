<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 3 - Aufgabe A1 POST</title>
    <style>
        main {
            margin: auto;
            width: 50%;
            border: 3px solid red;
            padding: 50px;
            text-align: left;
        }
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <main>
        <?php
        if (isset($_POST['DATA_name']))
        {
            echo "<p>Ich bin " . $_POST['DATA_name'] . " und bin " . $_POST['DATA_size'] . "cm groß!</p>";
        }
        else
        {
            ?>
            <p>Bitte tragen Sie ihren Namen und ihre Größe ein damit Sie sich vorstellen können.</p>

            <form action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" method="post">
                <label for="name">Name: </label><input type="text" id="name" name="DATA_name" required>
                <label for="size">Größe: </label><input type="number" id="size" name="DATA_size" required>
                <input type="submit" name="BUTTON_introduce" value="Vorstellen">
            </form>
            <?php
        }
        ?>
    </main
</body>
</html>