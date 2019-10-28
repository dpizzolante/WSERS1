<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 4 - Aufgabe A2</title>
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

        if(isset($_GET["text"]) && isset($_GET["color"]))
        {
            $text = $_GET["text"];
            $color = $_GET["color"];

            showColoredParagraph($text, $color);
        }
        else
        {
            showColoredParagraph("Dies ist ein grüner Paragraf.", "green");
            showColoredParagraph("Diesen Paragraf ist rot gefärbt.", "red");
            showColoredParagraph("Der letze Paragraf ist blau.", "blue");
        }
    ?>
</body>
</html>