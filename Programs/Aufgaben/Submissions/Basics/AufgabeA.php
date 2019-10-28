<!DOCTYPE html>
<html>
	<head>
		<title> Aufgaben A: Hello World </title>
        <meta name="author" content="Krier Ben">
	</head>	
    <body>
	   <?php
        $name = "Ben";
        $lastName = "Krier";
        $a = 1;
        $b = 2;
        $c = 3;
        $d = 4;
       ?>
       <?php
        echo "<h2> Aufgabe A.1 </h2>";
        echo "$name $lastName </p>";
        echo "</p>";
        echo "<h2> Aufgabe A.2 </h2>";
        echo $b + $c * $d ."</p>";
        echo "</p>";
        echo "<h2> Aufgabe A.3 </h2>";
		echo $b ." * (". $c ." + ". $a .") = ". $b * ($c + $a) ."</p>";
        echo "</p>";
        echo "<h2> Aufgabe A.4 </h2>";
        echo '<img src="img/Gut.png" />';
	   ?>
    </body>
</html>