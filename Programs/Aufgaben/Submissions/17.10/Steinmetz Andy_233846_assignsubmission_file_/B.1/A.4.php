<?php
$_GET=[];

if (!isset($_GET['nummer'])) {
    $_GET['nummer'] = 666;
}

for ($hilfsvariable=0; $_GET['nummer']!=1; $hilfsvariable++) {
    echo $_GET['nummer'] . " -> ";

    if ($_GET['nummer']%2==0) {
        $_GET['nummer']=$_GET['nummer']/2;
    }
    else {
        $_GET['nummer']=$_GET['nummer']*3+1;
    }
}
echo $_GET['nummer'] . "1 = " . $hilfsvariable ;
?>
