
<!DOCTYPE html>
<html>
<head lang = "en">
    <title> Chapter 3.B2: POST-parameters </title>
    <meta charset="UTF-8">
</head>
<body>



<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
    <h2> Aufgabe B.2 </h2>
    <p>
        Bitte geben Sie den Geldbetrag, <br>
        den Betrag der pro Enkelkind verschenkt werden soll <br>
        und die Anzahl an Enkelkindern an.
    </p>
    <table>
        <tr>
            <td>
                <label for="amount"> Geldbetrag: </label>
            </td>
            <td>
                <input id="amount" type="text" name="DATA_amount">
            </td>
            <td>
                <label for="moneyChild"> Betrag pro Enkelkind: </label>
            </td>
            <td>
                <input id="moneyChild" type="text" name="DATA_moneyChild">
            </td>
            <td>
                <label for="grandChildren"> Anzahl der Enkelkinder: </label>
            </td>
            <td>
                <input id="grandChildren" type="text" name="DATA_grandChildren">
            </td>
        </tr>
    </table>
    <p>
        <input type="submit" name="BUTTON_send" value="Berechnen">
    </p>

    <?php
    if(isset($_POST['BUTTON_send']))
    {
        //set variables
        $amount = $_POST['DATA_amount'];
        $amountPerChild = $_POST['DATA_moneyChild'];
        $numGrandChildren = $_POST['DATA_grandChildren'];

        //check if numbers are correct
        if ($amount <= 0 || $amountPerChild > $amount)
        {
            echo "Please review your numbers:   <br> 
                - amount cannot be < 0 or <br> 
                - amount per child cannot be bigger than amount <br>";
        }

        //process
        $checkSum = $amountPerChild * $numGrandChildren;
        if ($checkSum <= $amount)
        {
            echo "Ihr Geld reicht aus. <br>
                Mit " . $amount . " und ein Betrag von " . $amountPerChild . " pro Einzelkind können Sie an " . $numGrandChildren . "Einzelkind(er) verschenken.";
        }
        else{
            $availableSum = floor($amount/$amountPerChild);
            echo $amount . "$ können nur an " . $availableSum . " Einzelkinder(er) verschenkt werden." ;
        }



    }
    ?>
</form>
</body>
</html>