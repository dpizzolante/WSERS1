<?php
    $_GET = [];
            if (!isset($_GET['loop'])) {
                $_GET['loop'] = 13;
            }
            for ($i=1; $i<=$_GET['loop']; $i++) {
                echo "<p>" . $i . ". Willkommen!</p>";
            }
?>