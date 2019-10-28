<!DOCTYPE html>
<html>
	<head>
		<title> Aufgaben H: While-Schleifen </title>
        <meta name="author" content="Krier Ben">
	</head>	
    <body>
	   <?php
        $rnd = mt_rand(1, 6); 
        $count = 1;
		$sum = 0;

        echo "<h2> Aufgabe H.1 </h2>";
        while ($rnd != 6) {
			$rnd = mt_rand(1, 6);
			$count++; 
		}
		echo "Du hast eine 6 gewürfelt! Dafür musstest du $count Mal würfeln!";
        echo "</p>";
	//*****************************************************************************	
				
        echo "<h2> Aufgabe H.2 </h2>";
        while ($sum < 25) {
			$sum += mt_rand(1, 6); 
		}
		echo "$sum ";
        echo "</p>";
	
	   ?>
    </body>
</html>