<?php
for($i=0; $i < 10; $i++) {
    echo "$i" . "<br>";
}

for ($i = 0; $i < 20; $i++) {
    if ($i == 13) {
        echo "Bad Luck! <br>";
        break;
    }

    echo "$i, ";
}
?>
