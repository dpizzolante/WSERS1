<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 3 - Aufgabe A4 POST</title>
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
        if (isset($_POST["BUTTON_calculate"]))
        {

            $number = $_POST['DATA_number'];

            $steps = 0;
            echo "($number)";

            while($number != 1)
            {
                if($number % 2 == 0)    //gerade Zahl?
                    $number /= 2;
                else                    //ungerade Zahl
                    $number = $number * 3 + 1;

                $steps++;
                echo " => $number";
            }

            echo " = $steps Schritte";
        }
        else
        {
            ?>
            <p>Bitte geben Sie eine Zahl ein.</p>

            <form action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" method="post">
                <label for="zahl">Zahl: </label><input type="number" id="zahl" name="DATA_number" required>
                <input type="submit" name="BUTTON_calculate" value="Berechnen">
            </form>
            <?php
        }
        ?>
    </main>

</body>
</html>