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

           

            function sayHello($pName)
            {
                echo "hallo " . $pName;
            }


            function displayDate()
            {
                echo "<p>Es ist gerade: ". date("H:i:s"). "</p>";
            }
 
            sayHello("Dario");
            displayDate();


            //berechnung
            $number = 33;
            $number2  = 5;
            
            function multiply( $pNumber, $pNnumber2 )
            {
                echo bcmul($pNumber, $pNnumber2);
            }
            
            echo "<p>Berechnung von $number * $number2 = ";
            multiply( $number, $number2 );


        ?>
    </main>

</body>
</html>