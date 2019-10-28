<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 2 - Arrays Demo</title>
</head>
<body>
<table>
    <tr>
        <td><?php echo "test"; ?></td>
    </tr>
</table>
    <?php
        $countries = ["Austria", "Belgium", "Bulgaria", "Croatia", "Cyprus", "Czech Republic", "Denmark", "Estonia", "Finland", "France", "Germany", "Greece", "Hungary",
            "Ireland", "Italy", "Latvia", "Lithuania", "Luxembourg", "Malta", "Netherlands", "Poland", "Portugal", "Romania", "Slovakia", "Slovenia", "Spain", "Sweden", "UK"];

        $countries[] = "England";

        echo 'Das erste Land in $countries ist ' . $countries[0] . '<br>';
        echo 'Das letzte Land in $countries ist ' . $countries[count($countries) - 1] . '<br>';
        echo '$countries beinhaltet ' . count($countries) . ' Länder:<br>';


        for($i = 0; $i < count($countries); $i++)
        {
            echo $countries[$i] . "<br>";
        }

        echo print_r(5 >=5, true);




    ?>
</body>
</html>