<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trennen von Sätzen</title>
</head>
<body>
    <?php

        /*
         *  Gibt eine Trennlinie mit $length Zeichen aus.
         *  Der in der Trennlinie zu verwendende Zeichen wird in $character übermittelt.
         */
        function addSeparator($length, $character)
        {
            for ($i=1; $i<=$length; $i++)
            {
                echo $character;
            }
            echo "<br>";
        }

        $firstText = "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.<br>";
        $secondText = "Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.<br>";
        $thirdText = "Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.<br>";
        $fourthText = "Phasellus et massa non massa maximus dignissim nec ac purus. Duis consequat gravida tellus, vel rhoncus odio elementum ut. Donec nec mi nunc. Etiam molestie quis felis quis sagittis.<br>";

        echo $firstText;
        //Aufruf der Funktion
        addSeparator(300, "-");

        echo $secondText;
        addSeparator(300, "+");

        echo $thirdText;
        addSeparator(300, "*");

        echo $fourthText;
        addSeparator(300, ".");
    ?>
</body>
</html>