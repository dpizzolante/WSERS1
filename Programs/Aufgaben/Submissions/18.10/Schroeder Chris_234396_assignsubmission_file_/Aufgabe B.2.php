<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe B.2</title>
</head>
<body>
    <?php
        $gesamtbetrag = $_POST['gesamtbetrag'];
        $BproE = $_POST['BproE'];
        $AanE = $_POST['AanE'];

        if($BproE <= $gesamtbetrag/$AanE){
            echo "Ihr geld reicht aus.<br>";
            echo "Mit " . $gesamtbetrag . "€ und einen Betrag von " . $BproE . "€ pro Enkelkind können Sie Geld an " .  floor($gesamtbetrag/$BproE) . " Enkelkind(er) verschenken.";
        } else {
            echo "Sie möchten geld an " . $AanE ." Enkelkind(er) verschenken. Ihr geld reicht nicht aus.<br>";
            echo "Mit " . $gesamtbetrag . "€ und einen Betrag von " . $BproE . "€ pro Enkelkind können Sie Geld an nur " .  floor($gesamtbetrag/$BproE) . " Enkelkind(er) verschenken.";
        }

    ?>
</body>
</html>