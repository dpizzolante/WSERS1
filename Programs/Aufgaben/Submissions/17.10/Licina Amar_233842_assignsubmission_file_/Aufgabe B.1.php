<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Licina Amar">
    <meta charset="UTF-8">
    <title>Aufgabe B.1</title>
</head>
<body>

        <?php
            echo "<h1>A.1</h1>";
            if(isset($_POST["BUTTON_send"]))
            {
                echo "<p>Guten Tag, " . $_POST["DATA_firstname"] . " " . $_POST["DATA_lastname"] . "</p>";
            }

        ?>
            <p>Bitte tragen Sie Ihren Vornamen und Ihren Nachnamen ein.<br>
                Senden Sie anschließend das Formular ab.</p>
            <form action="Aufgabe B.1.php" method="post">
                <label for="firstname">Vorname: </label>
                <input id="firstname" type="text" name="DATA_firstname"><br>
                <label for="lastname">Nachname: </label>
                <input id="lastname" type="text" name="DATA_lastname"><br>
                <input type="submit" name="BUTTON_send" value="Daten absenden">
            </form>





        <?php
            echo "<h1>A.2</h1>";

            echo "<pre>" . print_r($_POST , true) . "</pre>";

            foreach ($_POST as $i => $i_value)
            {
                echo "$i = $i_value </br>";
            }


        ?>
            <p>Bitte tragen Sie Ihren Vornamen und Ihren Nachnamen ein.<br>
                Senden Sie anschließend das Formular ab.</p>
            <form action="Aufgabe B.1.php" method="post">
                <label for="forName">Vorname: </label>
                <input id="firstname" type="text" name="DATA_firstname"><br>
                <label for="lastname">Nachname: </label>
                <input id="lastname" type="text" name="DATA_lastname"><br>
                <input type="submit" name="BUTTON_send" value="Daten absenden">
            </form>





        <?php
            echo "<h1>A.3</h1>";

            $loop = "";

            if (isset($_POST['loops']))
            {
                $loops = $_POST['loops'];
            }
            for ($i = 1; $i<=$loop; $i++)
            {
                echo "<p>Welcome</p>";
            }
        ?>
            <p>Bitte tragen Sie ein Wort ein.<br>
                Senden Sie anschließend das Formular ab.</p>
            <form action="Aufgabe B.1.php" method="post">
                <label for="randomWord">Vorname: </label>
                <input type="submit" name="BUTTON_send" value="Daten absenden">
            </form>





        <?php

            $size=0;

            echo "<h2>A.4</h2>";

            if(isset($_POST['number']))
            {
                if($_POST['number']>0)

                {
                    $number = $_POST['number'];
                    $steps = 0;

                    echo "<p> ($number)";

                    while($number != 1)
                    {
                        if($number %2 == 0)
                        {
                            $number/=2;
                        }
                        else
                        {
                            $number = $number *3+1;
                        }
                            $steps++;
                    }
                    echo  $number;
                }



                else
                {
                    echo "<p> Gib deinen Parameter über 0 an! </p>";
                }
            }
            else
            {
                echo "<p> Gib einen Parameter 'number' an!";
            }
        ?>
            <p>Bitte tragen Sie eine Zahl ein.<br>
                Senden Sie anschließend das Formular ab.</p>
            <form action="Aufgabe B.1.php" method="post">
                <label for="randomNumber">Vorname: </label>
                <input type="submit" name="BUTTON_send" value="Daten absenden">
            </form>


</body>
</html>

