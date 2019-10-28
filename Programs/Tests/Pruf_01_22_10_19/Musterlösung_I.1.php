<!DOCTYPE html>                                         <!-- //2 -->
<html>
    <head>
        <title> Evaluation I.1 </title>
        <meta name="author" content="Krier Ben">
        <meta charset="UTF-8">
        <style>
            th, td {
                text-align: left;
                padding: 4px;
            }
            tr:nth-child(even) {
                background-color: #c5c5c5
            }
        </style>
    </head>
    <body>
        <?php										
            echo "<h2> Aufgabe 1 </h2>";
//I
            $temperature = [];							//1
            $categorie = [								//2
                "kalt" => 0,
                "mild" => 0,
                "warm" => 0
            ];
            $maxBoundary = [							//2
                "kalt" => 9,
                "mild" => 19,
                "warm" => 30
            ];
//P
            for($i = 0; $i<31; $i++){					//3
                $rnd = mt_rand(0, 30);					//2
                $temperature[] = $rnd;					//1
                if ($rnd < $maxBoundary["kalt"]){		//2
                    $categorie["kalt"]++;				//1
                }elseif($rnd < $maxBoundary["mild"]){	//2
                    $categorie["mild"]++;				//1
                }else{
                    $categorie["warm"]++;				//1
                }
            }
//O
            echo "<p> Von den letzten 31 Tagen, waren: </p> ";		//1
            echo "<ul style='list-style-type:disc;'>";				//2
            echo " <li> ${categorie["kalt"]} kalt</li>";			//3
            echo " <li> ${categorie["mild"]} mild</li>";			//
            echo " <li> ${categorie["warm"]} warm</li>";			//
            echo "</ul>";
//*****************************************************************************
            echo "<h2> Einordnung verschiedener EU-Länder nach Einwohnerzahl </h2>";    //2
//I
            $countries = ["Deutschland", "Frankreich", "Italien", "Spanien", "Polen", "Rumänien", "Niederlande",
                "Belgien", "Griechenland", "Tschechien"];					//2
            $population = [													//3
                "Deutschland" => "82",
                "Frankreich" => "66",
                "Italien" => "60",
                "Spanien" => "46",
                "Polen" => "38",
                "Rumänien" => "19",
                "Niederlande" => "17",
                "Belgien" => "11",
                "Griechenland" => "10",
                "Tschechien" => "10"
            ];
//O
            if (!isset($_GET["country"])) {								    //2
                echo "<table>";	                                            //1
				echo "	<tr>";                                              //0.5
				echo "		<th> Rang </th>";                               //0.5
				echo "		<th> Land </th>";
				echo "	</tr>";											    //1
                for ($i = 0; $i < count($countries); $i++){				    //3
					echo "<tr>";                                            //1
					echo "	<td> " . ($i+1) . "</td>";                      //2
					echo "	<td> $countries[$i] </td>";                     //2
					echo "</tr>";			                                //3
                }
                echo "</table>";
            }else{
                $selected = $_GET["country"];							    //2
                $imgPath = "../img/Fahnen/";
				if (isset($population[$selected])){						    //2
					echo "<img src='${imgPath}${selected}.png'> ";				                //2
                    echo "Das Land $selected hat in etwa $population[$selected] Millionen Einwohner.";  //3
                }else{																	
                    echo "Fehler 404: Es wurde kein Eintrag für dieses Land gefunden!";	        //1
                }
            }
        ?>
    </body>
</html>