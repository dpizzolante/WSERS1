<html>
    <head>
        <meta charset=UTF-8>

        <meta name="author" content="Constantin Manukyan">

        <title>Aufgabe A.4</title>

        <style>

        </style>
    </head>

    <body>
        <?php
            $_GET=[];

            if (!isset($_GET['number'])) {
                $_GET['number'] = 666;
            }

            for ($hilfsvariable=0; $_GET['number']!=1; $hilfsvariable++) {
                echo $_GET['number'] . " -> ";

                if ($_GET['number']%2==0) {
                    $_GET['number']=$_GET['number']/2;
                }
                else {
                    $_GET['number']=$_GET['number']*3+1;
                }
            }

            echo $_GET['number'] . "1 = " . $hilfsvariable . " schritte";
        ?>
    </body>
</html>