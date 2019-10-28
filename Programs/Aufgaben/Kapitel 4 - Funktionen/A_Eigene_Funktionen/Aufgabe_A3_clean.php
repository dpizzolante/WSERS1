<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 4 - Aufgabe A3</title>
</head>
<body>
    <?php
        /*
         * Gibt eine Trennlinie mit $length Zeichen aus.
         * Der in der Trennlinie verwendete Zeichen wird in $character übermittelt.
         */
        function addSeparator($length, $character)
        {
            for ($i=1; $i<=$length; $i++)
            {
                echo $character;
            }
        }

        /*
         * Generiert einen HTML-Abschnitt (p-Tag) mit dem Text $text.
         * Der Abschnitt endet mit einer Trennlinie bestehend aus 300 Bindestrichen.
         */
        function generateParagraph($text)
        {



        }

        $firstText = "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<br>";

        $secondText = "Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<br>";

        $thirdText = "Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.<br>";

        $fourthText = "Phasellus et massa non massa maximus dignissim nec ac purus. Duis consequat gravida tellus, vel rhoncus odio elementum ut.<br>";

        generateParagraph($firstText);
        generateParagraph($secondText);
        generateParagraph($thirdText);
        generateParagraph($fourthText);
    ?>
</body>
</html>