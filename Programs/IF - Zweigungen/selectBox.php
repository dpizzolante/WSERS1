<html>
<head>
</head>
<body>
<p>
    <select onChange="window.location='selectBox.php?color='+this.value">
        <option>Select a Color</option>
        <option value="red">Red</option>
        <option value="orange">Orange</option>
        <option value="yellow">Yellow</option>
        <option value="green">Green</option>
        <option value="maroon">Maroon</option>
        <option value="blue">Bluish</option>
        <option value="pink">Pink</option>
    </select>
</p>

<?php
$Color = $_REQUEST["color"];
if ($Color == "red"){
echo "<div style='width:40%;height:300px;background-color:red;'></div>";
}
elseif ($Color == "orange"){
echo "<div style='width:40%;height:300px;background-color:orange;'></div>";
}
elseif ($Color == "yellow"){
echo "<div style='width:40%;height:300px;background-color:yellow;'></div>";
}
elseif ($Color == "green"){
echo "<div style='width:40%;height:300px;background-color:green;'></div>";
}
elseif ($Color == "maroon"){
echo "<div style='width:40%;height:300px;background-color:maroon;'></div>";
}
elseif ($Color == "blue"){
echo "<div style='width:40%;height:300px;background-color:blue;'></div>";
}
elseif ($Color == "pink"){
echo "<div style='width:40%;height:300px;background-color:pink;'></div>";
}
else{
echo ("Select a Color from dropdown");
}
?>

</body>
</html>




