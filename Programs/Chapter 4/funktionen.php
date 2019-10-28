<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 4 - Funktionen</title>
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
    
        <?php
            
            /*
            function NAME-DER-FUNKTION ( ÜBERGABEWERTE )
            {
                AUSZUFÜHRENDER CODE;
            
                return ( ZURÜCKGEBENER WERT );
            }
            */


            /*
            $ZURUECKGEGEBENER_WERT =  NAME-DER-FUNKTION ( ÜBERGABEWERTE );
            */

           

            function sayHello($p1, $p2)
            {
                $sum =  $p1 + $p2;
                return $sum;
            }

            echo sayHello(2, 3);

        ?>
    </main>

</body>
</html>