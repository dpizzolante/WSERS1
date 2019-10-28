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


            $numbers = array();

            $numbers[] = "<img src='images2/number-0.png'>";
            $numbers[] = "<img src='images2/number-1.png'>";
            $numbers[] = "<img src='images2/number-2.png'>";
            $numbers[] = "<img src='images2/number-3.png'>";
            $numbers[] = "<img src='images2/number-4.png'>";
            $numbers[] = "<img src='images2/number-5.png'>";
            $numbers[] = "<img src='images2/number-6.png'>";
            $numbers[] = "<img src='images2/number-7.png'>";
            $numbers[] = "<img src='images2/number-8.png'>";
            $numbers[] = "<img src='images2/number-9.png'>";

            for($i=0; $i<=5; $i++) {
                $random = mt_rand(0,9);
                echo $numbers[$random];
            }
        ?>
    </main>

</body>
</html>