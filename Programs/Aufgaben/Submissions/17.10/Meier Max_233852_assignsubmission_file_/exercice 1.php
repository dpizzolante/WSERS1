<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$a= $_POST["gesamt"];
$b= $_POST["Anzahl"];
$c= $_POST["enkel"];
$global=0;
if ($a%$c!=0){
    $global=$a/$b;
    echo "Das Geld reicht nicht aus."."<br>";
    echo "Mit dem Betrag".$a."Euro und jedem EnkelKind".$b."Euros geben können sie".$global."Kinder versorgen"."<br>";

}
else{
    echo "Das Geld reicht aus."."<br>";
    echo "Mit dem Betrag".$a."Euro und jedem EnkelKind".$b."Euros geben können sie".$c."Kinder versorgen"."<br>";
}
echo "Sie haben ein Büdget von".$a."Euro"."<br>"."Sie geben jedem Enkelkind".$b."Euro"."<br>". "und sie haben".$c."Enkelkinder";
echo "<pre>". print_r($a, true )."</pre>";
?>
<p>Bitte Geben sie den Gesamtbetrag, den Betrag pro Enkkelkind und die Anzahl der Enkelkinder an </p>
<form method="post" action="exercice%201.php">
    <label for="totalAmount">Gesamtbetrag:</label>
    <input id="totalAmount" type="number" name="gesamt">
    <label for="Amount">Vergebene Summe:</label>
    <input id="Amount" type="number" name="Anzahl">
    <label for="money">Anzahl der Enkel:</label>
    <input id="money" type="number" name="enkel">
    <input type="submit" value="Senden">
</form>

</body>
</html>