<!DOCTYPE html>
<html>
	<head lang = "en">
		<title> Kapitel 3.B: POST-Parameters </title>
        <meta name="author" content="Krier Ben">
        <meta charset="UTF-8">
	</head>
    <body>
	   <?php
            $name = "John";
            $size = 180;
            $loops = 13;
            echo "CopyPasteBeispiel: ?name=Pity&size=175&loops=2&number=10";
   //*****************************************************************************
            echo "<h2> Aufgabe A.1 </h2>";
            if(isset($_GET['name'])){
                $name = $_GET['name'];
            }
            if (isset($_GET['size'])){
                $size = $_GET['size'];
            }
            echo "<p>Ich bin $name und bin $size cm groß! </p>";
    //*****************************************************************************
            echo "<h2> Aufgabe A.2 </h2>";
            echo "<pre>" . print_r($_GET , true) . "</pre>";

            foreach ($_GET as $key => $value){
                echo "$key = $value </br>";
            }
    //*****************************************************************************
            echo "<h2> Aufgabe A.3 </h2>";
            if (isset($_GET['loops'])){
                $loops = $_GET['loops'];
            }
            for ($i = 0; $i < $loops; $i++){
                echo "<li> Willkommen </li>";
            }
    //*****************************************************************************
            echo "<h2> Aufgabe A.4 </h2>";
            if(isset($_GET['number'])) {
                $number = $_GET['number'];
                $steps = 0;
                echo "<p> ($number)";

                while($number != 1){
                    if($number % 2 == 0)
                        $number /= 2;
                    else
                        $number = $number * 3 + 1;
                    $steps++;
                    echo " => $number";
                }
                echo " = $steps Schritte </p>";
            }else{
                echo "<p> Gib einen Parameter 'number' an! </p>";
            }
        ?>
    </body>
</html>