<!DOCTYPE html>
<html>
	<head>
		<title> Aufgaben B: Addresse </title>
        <meta name="author" content="Krier Ben">
	</head>	
    <body>
	   <?php
        $name = "Ben";
        $lastName = "Krier";
        $hausNr = 46;
        $strasse = "rue de Lux";
        $ort = "Beggen";
        $plz = 2400;
        $land = "L";
        $empty = "";
       ?>
       <?php
        echo "<h2> Aufgabe B.1 </h2>";
        echo "Hallo $name $lastName </p>";
        echo "</p>";
        echo "<h2> Aufgabe B.2 </h2>";
        echo "Adresse:</p>";
        echo "$hausNr, $strasse </p>";
        echo "$land-$plz $ort";
        echo "</p>";
        echo "<h2> Aufgabe B.3 </h2>";
        echo "$empty </p>";
        echo "</p>";
	   ?>
    </body>
</html>