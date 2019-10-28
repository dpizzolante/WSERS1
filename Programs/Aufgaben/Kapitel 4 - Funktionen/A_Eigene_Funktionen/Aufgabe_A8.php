<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 4 - Aufgabe A8</title>
</head>
<body>
    <form method="post">
        <label for="weight">Gewicht (kg): </label><input id="weight" type="text" name="DATA_weight" required><br>
        <label for="height">Größe (m): </label><input id="height" type="text" name="DATA_height" required><br>
        <input type="submit" name="calculate" value="Berechnen">
    </form>
    <?php
        /*
         * Berechnet den BMI (Body Mass Index) für eine Person
         * mit einem Gewicht in Kilogramm $weight und eine Größe in Meter $height.
         */
        function getBMI($weight, $height)
        {
            $result = $weight / ($height * $height);
            return $result;
        }

        /*
         * Gibt die NIH Klassifikation (Korpulenz) einer Person anhand des BMI $bmi.
         */
        function getNIHClassification($bmi)
        {
            if($bmi < 18.5)
                return "untergewichtig";
            else if($bmi < 25)
                return "normalgewichtig";
            else
                return "übergewichtig";
        }

        if(isset($_POST["calculate"]))
        {
            $weight = $_POST["DATA_weight"];
            $height = $_POST["DATA_height"];
            $bmi = getBMI($weight, $height);
            $classification = getNIHClassification($bmi);

            echo "<p>";
            echo "Gewicht: " . $_POST["DATA_weight"] . "kg<br>";
            echo "Größe: " . $_POST["DATA_height"] . "m<br>";
            echo "BMI: " . $bmi . " (". $classification  .")<br>";
            echo "</p>";
        }
    ?>
</body>
</html>