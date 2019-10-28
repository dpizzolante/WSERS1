<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 3 - Aufgabe A5</title>
</head>
<body>
    <p>
        <?php
	          //E = Eingabe
            $imgPath = "/../img/Euroscheine/";
              if(isset($_GET["money"]) && strlen($_GET["money"]) > 0){
                  //V = Verarbeitung
                  $money = $_GET["money"];
                  echo "Geldbetrag = " . $money ."€<br>";

                  if($money % 5 != 0 )
                  {
                      echo "Fehler: Es können nur Geldbeträge gegeben werden, die durch 5 teilbar sind!";
                  }
                  else
                  {
                      $bankNotes = [500, 200, 100, 50, 20, 10, 5];

                      //A = Ausgabe
                      foreach($bankNotes as $bankNoteValue)
                      {
                          $quanity = floor($money / $bankNoteValue);
                          echo "<li> $quanity <img src= ${imgPath}Euroschein${bankNoteValue}.jpg width='120' height='50'/> ";
                          echo " ${bankNoteValue}€ Scheine(e) </li>";
                          $money = $money % $bankNoteValue;
                          echo $money;
                      }
                  }
	          }
	          else{
	          	echo "Invalid parameter";
	          }

        ?>
    </p>
</body>
</html>