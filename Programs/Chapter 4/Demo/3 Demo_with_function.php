<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trennen von Sätzen</title>
</head>
<body>
    <?php

        /*
         *  Gibt eine Trennzeile mit 250 Bindestrichen aus.
         */
        function addSeparator()
        {
            for ($i=1; $i<=250; $i++)
            {
                echo "-";
            }
            echo "<br>";
        }

        $firstText = "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.<br>";
        $secondText = "Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.<br>";
        $thirdText = "Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.<br>";
        $fourthText = "Phasellus et massa non massa maximus dignissim nec ac purus. Duis consequat gravida tellus, vel rhoncus odio elementum ut. Donec nec mi nunc. Etiam molestie quis felis quis sagittis.<br>";

        echo $firstText;
        addSeparator();

        echo $secondText;
        addSeparator();

        echo $thirdText;
        addSeparator();

        echo $fourthText;
        addSeparator();
    ?>
</body>
</html>