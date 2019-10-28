<html>
<head>
    <title>Aufgabe 1</title>
    <meta charset="UTF-8">
</head>
<body>
<?php

    $numA=12;
    $stringA=$numA;
    while($numA!=67){
        $numA += 11;
        $stringA = " " . $numA;
    }
    $stringA = " " . $numA;
    echo "a)" . $stringA . "<br>";

    /*
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

$country = array(
    "Niederlande" => "Amsterdam",
    "Deutschland" => "Berlin"
);
$food = array(
    "Niederlande" => "Käse",
    "Deutschland" => "Bratwurst mit Sauerkraut"
);

$input = $_GET['country'];
echo "Ich liebe" . $food[$input] ."aus " . $country[$input];

    */

?>
</body>
</html>
