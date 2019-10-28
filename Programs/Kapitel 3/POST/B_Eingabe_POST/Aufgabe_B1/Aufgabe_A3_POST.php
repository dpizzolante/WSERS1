<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 3 - Aufgabe A3 POST</title>
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
        if (isset($_POST["BUTTON_welcome"]))
        {
            if($_POST["DATA_loops"]< 1){
                $loops = 13;
            }else
            {
                $loops = $_POST["DATA_loops"];
            }
            echo '<ol type="1">';

            for($i = 0; $i < $loops; $i++)
                echo "<li>Willkommen!</li>";

            echo '</ol>';
        }
        else
        {
            ?>
            <p>Bitte geben Sie die Anzahl an Begrüßungen die angezeigt werden sollen.</p>

            <form action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" method="post">
                <label for="anzahl">Anzahl: </label><input type="number" id="anzahl" name="DATA_loops" required>
                <input type="submit" name="BUTTON_welcome" value="Begrüßen">
            </form>
            <?php
        }
        ?>
    </main>

</body>
</html>