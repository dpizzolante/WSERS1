<html>
<head>
    <title> Demo print_r</title>
    <meta charset="UTF-8">
</head>

<body>

<?php
    if(isset($_POST['BUTTON_send']))
    {
        echo '<pre>' . print_r($_POST, true). '</pre>';
        echo '<pre>' . $_POST["name"] ;
    }
?>

<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
    Geben Sie 5 Zahlen ein: <br>
    <input type="text" name="DATA_numbers[]"><br>
    <input type="text" name="DATA_numbers[]"><br>
    <input type="text" name="DATA_numbers[]"><br>
    <input type="text" name="DATA_numbers[]"><br>
    <input type="text" name="DATA_numbers[]"><br>
    <input type="text" name="DATA_name"><br>


    <input type="submit" name="BUTTON_send" value="Zahlen senden">

</form>

</body>

</html>