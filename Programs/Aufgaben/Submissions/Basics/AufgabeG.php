<!DOCTYPE html>
<html>
	<head>
		<title> Aufgaben G: For-Schleifen </title>
        <meta name="author" content="Krier Ben">
	</head>	
    <body>
	   <?php
        $text = "Hello world";
        $a = 3;
		$b = 7;
		$c = 6;
		$d = 16;
		$e = 2;

        echo "<h2> Aufgabe G.1 </h2>";
        for ($i=0; $i <1000; $i++){
            echo "$text; ";
        }
        echo "</p>";
	//*****************************************************************************	
				
        echo "<h2> Aufgabe G.2 </h2>";
        for ($i=0; $i < 1000; $i++){
            echo "$text number $i ";
        }
        echo "</p>";
	//*****************************************************************************	
				
        echo "<h2> Aufgabe G.3 </h2>";
        echo "<p>";
        for ($i=0; $i < 1000; $i++){
            if ($i % 13 == 0){
                echo "<span style= color:#ff0000> $text number " . $i . " </span>";
                
            }else{
                echo  "<span style= color:#000000> $text number " . $i . " </span>";
            }
        }
        echo "</p> </p>";
	//*****************************************************************************	
				
        echo "<h2> Aufgabe G.4 </h2>";
		$result = $b;
		echo "A = $a, B = $b </p>";
        for ($i = $a; $i < $b; $i++) {
            echo "$i + ";
            $result += $i;
        }
		echo "$b = $result </p>";
        echo "</p>";
	//*****************************************************************************	
				
        echo "<h2> Aufgabe G.5 </h2>";
        echo "a)  ";
        for ($i=10; $i<=15; $i++){
            echo "$i ";
        }	echo "</p>";

        echo "b)  ";
		for ($i=10; $i<15; $i++){
            echo "$i ";
        }	echo "</p>";

        echo "c)  ";
		for ($i=10; $i>=5; $i--){
            echo "$i ";
        }	echo "</p>";

        echo "d)  ";
		for ($i=10; $i>5; $i--){
            echo "$i ";
        }	echo "</p>";

        echo "e)  ";
		for ($i=3; $i<=22; $i+=3){
            echo "$i ";
        }	echo "</p>";

        echo "f)  ";
		for ($i=32; $i>12; $i-=4){
            echo "$i ";
        }	echo "</p>";

		echo "g)  ";
		for ($i=12; $i<13; $i+=0.2){
            echo "$i ";
        }	echo "</p>";

        echo "h)  ";
        for ($i=$c; $i<$d; $i+=$e){
            echo "$i ";
        }	echo "</p>";
		
        echo "</p>";
	//*****************************************************************************	
				
        echo "<h2> Aufgabe G.6 </h2>";
        echo "a)  ";
        for ($i=13; $i <= 29; $i+=4){
            echo "$i ";
        }	echo "</p>";

        echo "b)  ";
		for ($i=2; $i >= -1; $i-=0.5){
            echo "$i ";
        }	echo "</p>";

        echo "c)  ";
        for ($i=2000; $i <= 6000; $i+=1000){
            echo "$i ";
        }	echo "</p>";

        echo "d)  ";
        for ($i=5; $i <= 13; $i+=2){
            echo "z".$i." ";
        }	echo "</p>";

        echo "e)  ";
        for ($i=1; $i <= 3; $i++){
            echo "a b".$i." ";
        }	echo "</p>";

        echo "f)  ";
        for ($i=1; $i <= 20; $i+=10){
            //echo "c" . $i*10 . "2 c" . $i*10 . "3 ";
            for ($j =2; $j<=3; $j++){
                echo " c" . ($i+$j);
            }
        }
        echo "</p>";
        /*
       for ($i=2; $i <= 22; $i+=10){
           echo "c" . $i . " c" . $i+1;

       }
       echo "</p>"; */

        echo "g)  ";
        for ($i=13; $i <= 21; $i+=4){
            echo "$i ";
        }
		for ($i=33; $i <= 45; $i+=4){
            echo "$i ";
        }
		echo "</p>";

        echo "h)  ";
		for ($i=2; $i <= 1024; $i *=2){
            echo "$i ";
        }	echo "</p>";
        
        echo "</p>";
	//*****************************************************************************	
	
	   ?>
    </body>
</html>