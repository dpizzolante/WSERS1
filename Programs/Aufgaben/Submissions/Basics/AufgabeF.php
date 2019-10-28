<!DOCTYPE html>
<html>
	<head>
		<title> Aufgaben F: Verzweigungen </title>
        <meta name="author" content="Krier Ben">
	</head>	
    <body>
	   <?php
        $height = 179;
        $limit = 175;
        $rnd = mt_rand(1,3);
        $anzahl = mt_rand(1,10);
        $note = mt_rand(1,60);

        echo "<h2> Aufgabe F.1 </h2>";
        if ($height > $limit){
            echo "Du bist grösser als $limit cm </p>";
        } elseif ($height == $limit){
            echo "Du bist genau $limit cm gross </p>";
        }else{
           echo "Du bist kleiner als $limit cm </p>";
        }
        echo "</p>";

        echo "<h2> Aufgabe F.2 </h2>";
        echo "Die heutige Wettervorhersage: ";
        switch($rnd){
            case 1:
                echo "sonnig </p>";
                break;
            case 2:
                echo "regnerisch </p>";
                break;
            case 3:
                echo "bewölkt </p>";
        }
        echo "</p>";

        echo "<h2> Aufgabe F.3 </h2>";
        echo ($anzahl==1 ? "Du hast $anzahl Seite fertig." : "Du hast $anzahl Seiten fertig." ); echo "</p>";
        echo "</p>";

        echo "<h2> Aufgabe F.4 </h2>";
        if ($note <=19){
            echo "Die Note ist sehr schlecht. </p>";
            echo '<img src="img/SehrSchlecht.png" />' . "</p>";
        }else if ($note <=29){
            echo "Die Note ist ungenügend. </p>";
            echo '<img src="img/Ungenuegend.png" />' . "</p>";
        }else if ($note <=39){
            echo "Die Note ist befriedigend. </p>";
            echo '<img src="img/Befriedigend.png" />' . "</p>";
        }else if ($note <=49){
            echo "Die Note ist gut. </p>";
            echo '<img src="img/Gut.png" />' . "</p>";
        }else {
            echo "Die Note ist sehr gut. </p>";
            echo '<img src="img/SehrGut.png" />' . "</p>";
        }
       echo "</p>";
	   ?>
    </body>
</html>