<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 3 - Aufgabe C2</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="BUTTON_add" value="+">
        <input type="submit" name="BUTTON_save" value="Save"><br>

        <?php
            if(isset($_POST["DATA_lines"]))
                $lines = $_POST["DATA_lines"];
            else
                $lines = [];


            if(isset($_POST['BUTTON_add']))
                $lines[] = "";

            for($i = 0; $i < count($lines); $i++)
            {
                echo '<input type="text" name="DATA_lines[]" value="' . $lines[$i] . '"><br>';
            }

	          echo'<pre>' . print_r($_POST, true) . '</pre>';
        ?>
    </form>
</body>
</html>