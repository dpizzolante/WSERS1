<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 2 - Aufgabe I7</title>
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
            $playerNumbers = [];
            $drawnNumbers = [];

            while (count($playerNumbers) < 5) {
                $randomNumber = mt_rand(1,49);

                if (!in_array($randomNumber, $playerNumbers)) {
                    $playerNumbers[] = $randomNumber;
                }
            }

            while (count($drawnNumbers) < 5) {
                $randomNumber = mt_rand(1,49);

                if (!in_array($randomNumber, $drawnNumbers)) {
                    $drawnNumbers[] = $randomNumber;
                }
            }

            sort($playerNumbers);
            sort($drawnNumbers);

            //print_r($drawnNumbers);
            //print_r($playerNumbers);

            function numberToImage($numberArray) {
                for ($i = 0; $i < count($numberArray); $i++) {
                    $number = str_split($numberArray[$i] . "");
                    //print_r(str_split($number));
                    //print_r($number);
                    if ($numberArray[$i] < 10) {
                        $imageHTMLStr = "<img src='images2/number-0.png' /><img src='images2/number-" . $number[0] . ".png' />";
                    } else {
                        $imageHTMLStr = "<img src='images2/number-" . $number[0] . ".png' /><img src='images2/number-" . $number[1] . ".png' />";
                    }
                    echo $imageHTMLStr . "<img src='images2/space.png' />";
                }
            }

            echo "<h2>User picks:</h2>";
            numberToImage($playerNumbers);
            echo "<h2>Euromillion picks:</h2>";
            numberToImage($drawnNumbers);

            $pickedTheRightOneCounter = 0;

            for ($i = 0; $i < count($playerNumbers); $i++) {
                if (in_array($playerNumbers[$i], $drawnNumbers)) {
                    $pickedTheRightOneCounter++;
                }
            }

            echo "<h2>You have " . $pickedTheRightOneCounter . " right numbers.</h2>";
        ?>



    </main>

</body>
</html>