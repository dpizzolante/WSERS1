<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 3 - Aufgabe B4</title>
    <style>
        div {
            font-size: xx-large;
            align-content: center;
            vertical-align: middle;
        }

        img {
            display: inline-block;
            width: 200px;
            height: 100px;
        }
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
    <form action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" method="post">
        <label for="money">Bargeldsumme: </label>
        <input type="number" id="money" name="DATA_money" required>
        <input type="submit" name="BUTTON_issue" value="Euroscheine ausgeben">
    </form>

    <?php
        if (isset($_POST["BUTTON_issue"]))
        {
            $money = $_POST["DATA_money"];
            echo "<p>Bargeldsumme = " . $money ."€</p>";

            if($money % 5 != 0 )
            {
                echo "Fehler: Es können nur Geldbeträge gegeben werden, die durch 5 teilbar sind!";
            }
            else
            {
                $bankNotes = [500, 200, 100, 50, 20, 10, 5];

                foreach($bankNotes as $bankNote)
                {
                    $nbrOfBankNotes = floor($money / $bankNote);
                    $money = $money % $bankNote;

                    if($nbrOfBankNotes > 0)
                    {
                        echo '<div>' . $nbrOfBankNotes. 'x <img alt="'. $bankNote . '€" src="./Euroscheine/Euroschein'. $bankNote .'.jpg" /></div>';
                    }
                }
            }
        }

    ?>
    </main>
</body>
</html>