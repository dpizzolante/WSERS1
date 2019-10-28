<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="author" content="Marco ERNSTER">

        <title> Kapitel 3 / Aufgabe B.1</title>

    </head>

    <body>

        <?php

            $number2 = "";
            $number = "";

            echo "<h2> Aufgabe B.1 </h2>";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["number"])) {
                    $number2 = "Number is required";
                } else {
                    $number = test_input($_POST["number"]);
                }
            }

            function test_input($data) {
                $data = htmlspecialchars($data);
                return $data;
            }

            ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Number: <input type="number" name="name">
                <span class="error">* <?php echo $number2;?></span>
                <br><br>

                <input type="submit" name="submit" value="Submit">

            </form>

            <?php

                for($b=0;$a!=1;$b=$b+1) {
                    echo $a . " -> ";

                    if ($a%2==0) {
                        $a=$a/2;
                    }
                    else {
                        $a=$a*3+1;
                    }
                }

            ?>




    </body>

</html>
