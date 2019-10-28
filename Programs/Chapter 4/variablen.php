<?php
    
    //falsch: wochentag wird nicht ausgegeben
    $wochentag = "Sonntag";

    function begruessung($name) {
    echo "Hallo $name, ich wünsche dir einen schönen $wochentag";
    }

    begruessung("John");


    //richtig: 
    $wochentag2 = "Sonntag";

    function begruessungRichtig($name, $tag_in_der_woche) {
        echo "Hallo $name, ich wünsche dir einen schönen $tag_in_der_woche";
    }

    begruessungRichtig("John", $wochentag2);


    
?>

