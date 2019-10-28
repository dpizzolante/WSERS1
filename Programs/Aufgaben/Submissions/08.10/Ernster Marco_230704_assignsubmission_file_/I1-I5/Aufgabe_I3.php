<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="author" content="Marco ERNSTER">

        <title> Willkommenstext</title>

    </head>

    <body>

        <?php

            $schüler=array();
            $schüler[] = "Knosti";
            $schüler[] = "Constantin";
            $schüler[] = "Cosai";

            //Note wird zufällig bestimmt

            $note=array();
            $note[] = mt_rand(0, 60);
            $note[] = mt_rand(0, 60);
            $note[] = mt_rand(0, 60);

            for( $i=0; $i<count($schüler); $i++){

                echo "<li>". "Der Schüler " . $schüler[$i] . " hat die Note " . $note[$i] . "</li>";

                //ein if um den Satz mit für die Note zu bestimmen

                if($note[$i] == 0){
                    echo "Die Note ist erstaunlich schlecht.";
                }elseif($note[$i] <= 19){
                    echo "Die Note ist sehr schlecht.";
                }elseif($note[$i] <= 29){
                    echo "Die Note ist ungenügend.";
                }elseif($note[$i] <= 39){
                    echo "Die Note ist befriedigend.";
                }elseif($note[$i] <= 49){
                    echo "Die Note ist gut.";
                }elseif($note[$i] <= 59){
                    echo "Die Note ist sehr gut.";
                }else{
                    echo "Die Note ist perfekt.";
                }

            }

        ?>

    </body>

</html>




