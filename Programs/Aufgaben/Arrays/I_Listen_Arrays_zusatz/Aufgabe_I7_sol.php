<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 2 - Aufgabe I6</title>
    <style>
        body{
            background: url("./images2/background.jpg");
        }
        main {
            margin: auto;
            width: 90%;
            border: 3px solid red;
            padding: 10px;
            text-align: center;
        }

        img{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <header>
        <div align="center">
            <h1>WSERS1 - Euromillions</h1>
        </div>
    </header>
    <main>
        <?php
            /*$amountOfWinNumber = 0;
            $numberOfTries = 0;
            while($amountOfWinNumber !=5) {
                $amountOfWinNumber = 0;*/
                $userArray = [];
                $gameArray = [];

                $i = 0;
                while ($i < 5) {
                    $temp = mt_rand(1, 49);
                    if (!in_array($temp, $userArray)) {
                        $userArray[] = $temp;
                        $i++;
                    }
                }

                $i = 0;
                while ($i < 5) {
                    $temp = mt_rand(1, 49);
                    if (!in_array($temp, $gameArray)) {
                        $gameArray[] = $temp;
                        $i++;
                    }
                }

                foreach ($userArray as $number => $pickedNumber) {
                    if (in_array($pickedNumber, $gameArray)) $amountOfWinNumber++;
                }
                /*$numberOfTries++;
            }*/
            sort($userArray);
            sort($gameArray);

            $amountOfWinNumber = 0;

            echo "<h2>User picks:</h2>";

            foreach($userArray as $number => $pickedNumber)
            {
                $firstDigit = intval($pickedNumber / 10);
                $secondDigit = $pickedNumber % 10;
                echo "<img src='images2/number-" ."$firstDigit.png'>";
                echo "<img src='images2/number-" . "$secondDigit.png'>";
                echo "<img src='images2/space.png'>";
                if(in_array($pickedNumber, $gameArray))  $amountOfWinNumber++;
            }
            echo "<br><h2>Euromillions picks:</h2><br>";

            foreach($gameArray as $gameNumber => $gamePickedNumber)
            {
                $firstDigit = intval($gamePickedNumber / 10);
                $secondDigit = $gamePickedNumber % 10;
                echo "<img src='images2/number-" . "$firstDigit.png'>";
                echo "<img src='images2/number-" . "$secondDigit.png'>";
                echo "<img src='images2/space.png'>";
            }
            echo "<h2>You have " . $amountOfWinNumber . " right numbers.</h2>";
        ?>
    </main>

</body>
</html>