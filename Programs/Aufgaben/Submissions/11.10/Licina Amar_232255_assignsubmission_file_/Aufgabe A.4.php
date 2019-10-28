<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Licina Amar">
    <meta charset="UTF-8">
    <title>Aufgabe A.4</title>
</head>
<body>
    <?php

        if (isset($_GET['nbr']))
        {
            $number = $_GET['nbr'];
            echo "($number)";

            if ($_GET['nbr']>0){
                while ($number!=1){
                    if ($number%2==0){
                        $number/=2;
                    }
                    else{
                        $number=$number*3+1;
                    }
                    echo $number. "-->";
                }
            }
        }
        else
        {
            echo $_GET['nbr'] = 1;
        }


    ?>
</body>
</html>

