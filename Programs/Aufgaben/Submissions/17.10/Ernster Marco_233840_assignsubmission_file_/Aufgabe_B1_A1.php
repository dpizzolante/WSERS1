<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="author" content="Marco ERNSTER">

        <title> Kapitel 3 / Aufgabe B.1</title>

    </head>

    <body>

        <?php

            $name2 = $size2 = "";
            $name = $size = "";

            echo "<h2> Aufgabe B.1 </h2>";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                    $name2 = "Name is required";
                } else {
                    $name = test_input($_POST["name"]);
                }

                if (empty($_POST["size"])) {
                    $size2 = "Email is required";
                } else {
                    $size = test_input($_POST["size"]);
                }
            }

        function test_input($data) {
            $data = htmlspecialchars($data);
            return $data;
        }

            ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="name">
            <span class="error">* <?php echo $name2;?></span>
            <br><br>
            E-mail: <input type="text" name="size">
            <span class="error">* <?php echo $size2;?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">

        </form>

        <?php

            echo"<p> Ich bin $name und bin $size cm groß.";

            ?>

    </body>

</html>

