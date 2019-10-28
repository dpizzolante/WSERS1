<html>
	<head>
		<meta charset=UTF-8>

        <meta name="author" content="Constantin Manukyan">

        <title>Aufgabe A.1</title>
		
		<style>
			
		</style>
	</head>
	
	<body>
		<?php
            if (!isset($_GET['name'])) {
                $_GET['name'] = "Bob";
            }

            if (!isset($_GET['size'])) {
                $_GET['size'] = 183;
            }

            echo "Ich bin " . $_GET['name'] . " und bin " . $_GET['size'] . "cm groß";
		?>
	</body>
</html>