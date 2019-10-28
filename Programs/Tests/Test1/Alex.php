<html>
<head>
    <title>Aufgabe 1</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
echo "a) ";

for($i=49; $i <=100; $i = $i+10){
    echo $i . " ";
}


for ($i=12; $i <=68; $i = $i+11)
{
    echo $i . " ";
}


for($i = 2; $i<=23; $i++){
    echo $i . " ";
    if($i=="3" || $i =="5" || $i=="11" || $i=="17"){
        $i++;
    }
    if($i=="7" || $i =="13" || $i=="19" ){
        $i+=3;
    }
}

?>
</body>
</html>
