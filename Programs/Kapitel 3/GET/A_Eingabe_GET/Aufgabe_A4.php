<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kapitel 3 - Aufgabe A4</title>
    <style>
        main {
            margin: auto;
            width: 50%;
            border: 3px solid red;
            padding: 50px;
            text-align: left;
        }
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <main>
        <p>
            <?php
            if(isset($_GET['number']) && strlen($_GET['number']) > 0) {
                $number = $_GET['number'];
                $steps = 0;
                echo "($number)";

                if($_GET['number'] > 0)
                {
	                while($number != 1)
	                {
		                if($number % 2 == 0)
			                $number /= 2;
		                else
			                $number = $number * 3 + 1;

		                $steps++;
		                echo " => $number";
	                }
                }
                else{
	                echo "hey! You cheated! Invalid value";
                }

                echo " = $steps Schritte";
            }
            else{
            	echo "hey! You cheated! No parameter was given";
            }


            ?>
        </p>
    </main>

</body>
</html>