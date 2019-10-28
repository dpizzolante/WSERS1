<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 4 - Aufgabe A1</title>
</head>
<body>
    <?php
        /*
         * Gibt einen HTML-Abschnitt mit dem Text $text in der Farbe $color aus.
         */
        function showColoredParagraph($text, $color)
        {
            echo "<p style='color: $color'>";
            echo $text;
            echo "</p>";
        }

        showColoredParagraph("Dies ist ein grüner Abschnitt.", "green");
        showColoredParagraph("Dieser Abschnitt ist rot gefärbt.", "red");
        showColoredParagraph("Der letze Abschnitt ist blau.", "blue");
    ?>
</body>
</html>