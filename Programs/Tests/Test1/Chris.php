<html>
    <head>
        <title>Aufgabe 1</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        
            echo "a) ";
            for($i=49; $i <=99; $i = $i+10){
                echo $i . " ";
            }

            for ($i=12; $i <=67; $i = $i+11)
            {
                echo $i . " ";
            }

            for ($i = 2; $i <=23; $i++){
                $prim = false;
                for($j=2; $j<=$i; $j++)
                {
                    if($j == 1){
                    }elseif ($j==$i){
                    }elseif ($i % $j == 0)
                    {
                        $prim = true;
                    }
                }
                if($prim == false){
                    echo $prim;
                }
            } 

            /*
            $country = array(
                    "Niederlande" => "Amsterdam",
                    "Deutschland" => "Berlin"
            );
            $food = array(
                    "Niederlande" => "Käse",
                    "Deutschland" => "Bratwurst mit Sauerkraut"
            );

            /*
            $input = $_GET['country'];
            echo "Ich liebe" . $food[$input] ."aus " . $country[$input];

            foreach ($_GET as $country => $countryFood) {
                if($country == "Niederlande"){
                    echo "Ich liebe $countryFood aus $country";
                }
            }*/


        ?>
    </body>
</html>
