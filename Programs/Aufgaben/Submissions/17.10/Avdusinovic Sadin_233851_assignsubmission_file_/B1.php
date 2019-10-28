<html>
<body>
<?php
if (isset($_POST["BUTTON_send"]))
{
echo "<p>Guten Tag, " . $_POST["DATA_firstname] . " ". $_POST["DATA_height"] . "</p>";
}
else
{
?>
<p>Bitte tragen Sie Ihren Vornamen und Ihren Grösse ein.<br>
Senden Sie anschließend das Formular ab.</p>
<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
<label for="firstname">Vorname: </label>
<input id="firstname" type="text" name="DATA_firstname"><br>
<label for="height">Grösse: </label>
<input id="height" type="text" name="DATA_height"><br>
<input type="submit" name="BUTTON_send" value="Daten absenden">
</form>
<?php
} // End-Klammer des else
?>
</body>
</html>