<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 2: Arrays Demo1</title> 
</head>
<body>
    <?php
        $countries = ["Austria", "Belgium", "Bulgaria", "Croatia", "Cyprus", "Czech Republic", "Denmark", "Estonia", "Finland", "France", "Germany", "Greece", "Hungary",
            "Ireland", "Italy", "Latvia", "Lithuania", "Luxembourg", "Malta", "Netherlands", "Poland", "Portugal", "Romania", "Slovakia", "Slovenia", "Spain", "Sweden", "UK"];
        $countries[] = "England";

        echo '<div> Das erste Land in $countries ist ' . $countries[0] . '</div>';
        echo '<div> Das letzte Land in $countries ist ' . $countries[count($countries) - 1] . '</div> </p>';
        echo '<div> $countries beinhaltet ' . count($countries) . ' Länder:</div>';

        for($i = 0; $i < count($countries); $i++){
            echo "<div> $countries[$i] </div>";
        }
    $i =0;
foreach($countries as $country => $test)
{
    echo "<pre>". $countries[$i];
    $i++;
}
    ?>
</body>
</html>