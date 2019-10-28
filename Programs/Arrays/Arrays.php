<html>
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
<?php

    // 1. - Numeric/Indexed Array - Method 1 ------

    echo "<h1> A) Numeric / Indexed arrays - Method 1 </h1>";

    echo "<h2>Method1:</h2>";
    echo "<pre>  var = array(item1, item2, itemN);  </pre>";

    $cars = array("Volvo", "BMW,", "Audi");

    echo "<pre> First element of the array is:" .  $cars[0] . "</pre>";

    echo "<pre> Add item: Range Rover </pre>";

    $cars[] = "Range Rover";

    echo "<h3> Display structure of whole array </h3>";
    echo "<pre>" . print_r($cars,true) ."</pre>";


    // 1. - Numeric/Indexed Array - Method 2 ------
    echo "<h1> B) Numeric / Indexed arrays - Method 2 </h1> ";

    echo "<h2>Method2:</h2>";
    echo "<pre> var = array[]; \n array[0]= item1; \n array[n] = itemN;  </pre>";

    $days = [];
    $days[0] = "Monday";
    $days[1] = "Tuesday";
    $days[2] = "Wednesday";

    echo "<pre> The 2nd element from the list is : " . $days[1] . "</pre>";

    //Zeige eine ganze Liste
    echo "<pre>" . print_r($days,true) . "</pre>";

    // Associative arrays
    echo "<h1> c) Associative arrays - Method 3 </h1> ";

    echo "<h2>Method3:</h2>";
    echo "<pre> var = array(\n 'Alice' => '25', \n 'Bob' => '34');  </pre>";

    $age = [
        "Alice" => "25",
        "Bob" => "34"];

    echo "<pre> Bob is " . $age["Bob"] . " years old </pre>";
    echo "<pre>" . print_r($age,true) . "</pre>";

/*
$pupil = [
    0 => "Pim",
    1 => "Pam"
];
echo $pupil[1];
*/
?>

</body>

</html>