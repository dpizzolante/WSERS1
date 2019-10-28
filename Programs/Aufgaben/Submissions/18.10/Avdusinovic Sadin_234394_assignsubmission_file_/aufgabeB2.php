<html>
<body>
<?php
if(isset($_POST["BUTTON_send"]))
{
// Das Formular auswerten
    echo "<p> Mit " . $_POST["DATA_totalAmount"] ."Euro und ein Betrag von " . $_POST["DATA_amount"] ." Euro pro Enkelkind können Sie Geld an " . $_POST["DATA_grandchildren"]  " Enkelkinder verschenken. </p>";

}
?>
</body>
</html>