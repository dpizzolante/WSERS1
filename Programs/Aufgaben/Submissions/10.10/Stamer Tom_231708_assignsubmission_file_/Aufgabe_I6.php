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
            $pics = array();

            $pics[] = "<img src='I6/2010/img1.jpg'>";
            $pics[] = "<img src='I6/2010/img2.jpg'>";
            $pics[] = "<img src='I6/2010/img3.jpg'>";
            $pics[] = "<img src='I6/2010/img4.jpg'>";

            $pics[] = "<img src='I6/2011/img1.jpg'>";
            $pics[] = "<img src='I6/2011/img2.jpg'>";
            $pics[] = "<img src='I6/2011/img3.jpg'>";
            $pics[] = "<img src='I6/2011/img4.jpg'>";

            $pics[] = "<img src='I6/2012/img1.jpg'>";
            $pics[] = "<img src='I6/2012/img2.jpg'>";
            $pics[] = "<img src='I6/2012/img3.jpg'>";
            $pics[] = "<img src='I6/2012/img4.jpg'>";

            $pics[] = "<img src='I6/2013/img1.jpg'>";
            $pics[] = "<img src='I6/2013/img2.jpg'>";
            $pics[] = "<img src='I6/2013/img3.jpg'>";
            $pics[] = "<img src='I6/2013/img4.jpg'>";

            $pics[] = "<img src='I6/2014/img1.jpg'>";
            $pics[] = "<img src='I6/2014/img2.jpg'>";
            $pics[] = "<img src='I6/2014/img3.jpg'>";
            $pics[] = "<img src='I6/2014/img4.jpg'>";

            $pics[] = "<img src='I6/2015/img1.jpg'>";
            $pics[] = "<img src='I6/2015/img2.jpg'>";
            $pics[] = "<img src='I6/2015/img3.jpg'>";
            $pics[] = "<img src='I6/2015/img4.jpg'>";

            $pics[] = "<img src='I6/2016/img1.jpg'>";
            $pics[] = "<img src='I6/2016/img2.jpg'>";
            $pics[] = "<img src='I6/2016/img3.jpg'>";
            $pics[] = "<img src='I6/2016/img4.jpg'>";

            $pics[] = "<img src='I6/2016/img1.jpg'>";
            $pics[] = "<img src='I6/2016/img2.jpg'>";
            $pics[] = "<img src='I6/2016/img3.jpg'>";
            $pics[] = "<img src='I6/2016/img4.jpg'>";

            $pics[] = "<img src='I6/2017/img1.jpg'>";
            $pics[] = "<img src='I6/2017/img2.jpg'>";
            $pics[] = "<img src='I6/2017/img3.jpg'>";
            $pics[] = "<img src='I6/2017/img4.jpg'>";

            $pics[] = "<img src='I6/2018/img1.jpg'>";
            $pics[] = "<img src='I6/2018/img2.jpg'>";
            $pics[] = "<img src='I6/2018/img3.jpg'>";
            $pics[] = "<img src='I6/2018/img4.jpg'>";

            $pics[] = "<img src='I6/2019/img1.jpg'>";
            $pics[] = "<img src='I6/2019/img2.jpg'>";
            $pics[] = "<img src='I6/2019/img3.jpg'>";
            $pics[] = "<img src='I6/2019/img4.jpg'>";

            $pics[] = "<img src='I6/2020/img1.jpg'>";
            $pics[] = "<img src='I6/2020/img2.jpg'>";
            $pics[] = "<img src='I6/2020/img3.jpg'>";
            $pics[] = "<img src='I6/2020/img4.jpg'>";


            for($i=0; $i<count($pics); $i++)
            {
                echo $pics[$i];
            }


        ?>
    </main>
</body>
</html>