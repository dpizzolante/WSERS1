<html>
<meta "charset="UTF-8">
<meta name="author" content="Clement Lars">
<title>Demo 2</title>

<body>
<?php
$countries = ["Austria", "Belgium", "Bulgaria", "Croatia", "Cyprus", "Czech Republic", "Denmark", "Estonia", "Finland", "France", "Germany", "Greece", "Hungary", "Ireland", "Italy", "Latvia", "Lithuania", "Luxembourg", "Malta", "Netherlands", "Poland", "Portugal", "Romania", "Slovakia", "Slovenia", "Spain", "Sweden", "UK"];
$capitals = ["Vienna", "Brussels", "Sofia", "Zagreb", "Nicosia", "Prague", "Copenhagen", "Tallinn", "Helsinki", "Paris", "Berlin", "Athens", "Budapest", "Dublin", "Rome", "Riga", "Vilnius", "Luxembourg", "Valletta", "Amsterdam", "Warsaw", "Lisbon", "Bucharest", "Bratislava", "Ljubljana", "Madrid", "Stockholm", "London"];

$arrlength1 = count($countries);
$arrlength2 = count($capitals);

for($i = 0; $i < $arrlength1; $i++){
    echo $countries [$i] . ", " . $capitals[$i];
    echo "</br>";
}
?>

</body>
</html>