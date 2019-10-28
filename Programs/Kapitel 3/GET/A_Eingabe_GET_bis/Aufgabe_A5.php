<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 3 - Aufgabe A5</title>
</head>
<body>
    <p>
        <?php
            $money = $_GET["money"];
            echo "Geldbetrag = " . $money ."€<br>";

            if($money % 5 != 0 )
            {
                echo "Fehler: Es können nur Geldbeträge gegeben werden, die durch 5 teilbar sind!";
            }
            else
            {
                $bankNotes = [500, 200, 100, 50, 20, 10, 5];

                foreach($bankNotes as $bankNote)
                {
                    echo floor($money / $bankNote) . " Scheine(e) von ${bankNote}€<br>";
                    $money = $money % $bankNote;
                }
            }
        ?>
    </p>
</body>
</html>