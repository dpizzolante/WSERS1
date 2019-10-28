<!DOCTYPE html>
<html>
	<head>
		<title> "Aufgaben C: Variablen(Zahlen)" </title>
	</head>	
    <body>
	   <?php
        $liter = 14;
        $preis = 1.35;
        $x = $liter * $preis;
        $y = 5;
        $y += 3;
        $y -= 2;
        $y /= 2;
        $y *= 10;

        echo "<h2> Aufgabe C.1 </h2>";
        echo "x = $x </p>";
        echo "</p>";
        echo "<h2> Aufgabe C.2 </h2>";
        echo "y = $y </p>";
        echo "</p>";
        echo "<h2> Aufgabe C.3 </h2>";
        var_dump($x);
        echo "</p>";
	   ?>
    </body>
</html>