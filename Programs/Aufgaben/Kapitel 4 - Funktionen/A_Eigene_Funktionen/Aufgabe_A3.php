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
            echo "<p>$text";
            addSeparator(300, "-");
            echo "</p>";
        }

        $firstText = "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.<br>";
        $secondText = "Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.<br>";
        $thirdText = "Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.<br>";
        $fourthText = "Phasellus et massa non massa maximus dignissim nec ac purus. Duis consequat gravida tellus, vel rhoncus odio elementum ut. Donec nec mi nunc. Etiam molestie quis felis quis sagittis.<br>";

        generateParagraph($firstText);
        generateParagraph($secondText);
        generateParagraph($thirdText);
        generateParagraph($fourthText);
    ?>
</body>
</html>