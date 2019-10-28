<html>
    <head>
        <meta charset=UTF-8>

        <meta name="author" content="Constantin Manukyan">

        <title>Aufgabe A.3</title>

        <style>

        </style>
    </head>

    <body>
        <?php
            $_GET = [];

            if (!isset($_GET['loop'])) {
                $_GET['loop'] = 13;
            }

            for ($i=$_GET['loop']; $i!=0; $i--) {
                echo "<p>Willkommen!</p>";
            }
        ?>
    </body>
</html>