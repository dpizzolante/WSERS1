<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Kapitel 3 - Aufgabe A3</title>
		<style>
			main {
				margin:     auto;
				width:      50%;
				border:     3px solid red;
				padding:    50px;
				text-align: left;
			}
		</style>
	</head>
	<body>
		<main>
			<p>
				<?php
					if (!isset($_GET['loops']))
						$_GET['loops'] = 13;

					if (strlen($_GET['loops']) == 0) {
						echo "parameter exists, but is empty!";
					} else {
						for ($i = 0; $i < $_GET['loops']; $i++)
							echo "<li>Willkommen!</li>";
					}
				?>
			</p>
		</main>

	</body>
</html>