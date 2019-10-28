<!DOCTYPE html>
<html>
	<head>
		<title> Aufgaben D: Variablen(String) </title>
        <meta name="author" content="Krier Ben">
	</head>	
    <body>
	   <?php
        $a = "Abra";
        $a .= "abracadabra";
        $liter = 14; $preis = 1.35; //initialisierung der variablen
        $zahlung = $liter * $preis; //calculation der Zahlung
        $einheit1 = "Liter"; $einheit2 = 'Euro'; //initialisierung weiterer variablen
        $gesamt = "<p>Tankfüllung: " . $liter . " " . $einheit1;
        $gesamt .= " kosten " . $zahlung . " " . $einheit2 . "</p>";
		
        echo "<h2> Aufgabe D.1 </h2>";
        echo "$a . </p>";
        echo "</p>";
		
        echo "<h2> Aufgabe D.2 </h2>";
        echo $gesamt;
        echo "<p>Tankfüllung: $liter $einheit1 kosten $zahlung $einheit2</p>";
        echo '<p>Tankfüllung: $liter $einheit1 kosten $zahlung $einheit2</p>';
        echo "</p>";
	   ?>
    </body>
</html>