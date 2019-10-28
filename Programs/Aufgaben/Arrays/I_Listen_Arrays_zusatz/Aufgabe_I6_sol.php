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

            $minYear = rand(2010, 2020);
            $maxYear = rand(2010, 2020);

            $tmp = min($minYear,$maxYear);
            if($minYear > $maxYear)
            {
                $tmp = $minYear;
                $minYear = $maxYear;
                $maxYear = $minYear;
            }

            if($minYear != $maxYear) echo "<h2>Pictures from " .$minYear. " until " . $maxYear ."</h2><br>";
            else echo "<h2>Pictures from " .$minYear. "</h2><br>";

            $difference = $maxYear - $minYear + 1;
            if($difference == 1) echo "<b>There are currently 4  pictures shown from the library. </b><br><br>";
            else echo "<b>There are currently " . $difference * 4 . " pictures shown from the library. </b><br><br>";

            for($i = $minYear ; $i <= $maxYear ; $i++)
            {
                foreach($imageArray as $image => $imageURL)
                    echo "<img src='./images/$i/$imageURL'>";
                echo "<br>";
            }

        ?>
    </main>

</body>
</html>