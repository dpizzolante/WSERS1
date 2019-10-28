<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 2 - Aufgabe I6</title>
    <style>
        main {
            margin: auto;
            width: 90%;
            border: 3px solid red;
            padding: 10px;
            text-align: center;
        }

        img{
            width: 200px;
            height: 200px;
        }
    </style>
</head>
<body>
    <header>
        <div align="center">
            <h1>WSERS1 - Slideshow</h1>
        </div>
    </header>
    <main>
        <?php
            $imageArray = [
                            "image1" => "img1.jpg",
                            "image2" => "img2.jpg",
                            "image3" => "img3.jpg",
                            "image4" => "img4.jpg"
                            ];
           $randomNum1 = mt_rand(2010,2020);
           $randomNum2 = mt_rand(2010,2020);

           if ($randomNum1 > $randomNum2) {
                echo "<h1>Pictures form " . $randomNum2 . " until " . $randomNum1 . "</h1>";

                while ($randomNum2 < $randomNum1) {
                    foreach ($imageArray as $image) {
                        echo "<img src='I6/" . $randomNum2 . "/" . $image . "' alt='' />";
                    }

                    $randomNum2++;
                }
            } else {
                echo "<h1>Pictures form " . $randomNum1 . " until " . $randomNum2 . "</h1>";

                while ($randomNum1 < $randomNum2) {
                    foreach ($imageArray as $image) {
                        echo "<img src='I6/" . $randomNum1 . "/" . $image . "' alt='' />";
                    }

                    $randomNum1++;
                }
            }
        ?>
    </main>
</body>
</html>