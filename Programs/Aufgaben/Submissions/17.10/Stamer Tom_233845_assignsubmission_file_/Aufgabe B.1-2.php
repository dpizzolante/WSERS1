<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Stamer Tom">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$name = "Tom";
$size = 185;

if(isset($_POST['name'])){
    $name = $_Post['name'];
}

if(isset($_POST['size'])){
    $size = $_POST['size'];
}

echo "Mein Name ist " . $name . " und ich bin " . $size . "cm groß<br>";

echo "<pre>" . print_r($_POST, true). "</pre><br>";

foreach($_POST as $key => $value)
{
    echo "$key = $value </br>";
}
?>
</body>
</html>
