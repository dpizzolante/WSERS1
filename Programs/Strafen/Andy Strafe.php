<html>
<meta autor="Andy">
<style>


    h1{
        text-align: center;

    }


    table{
        border-collapse: collapse;
        text-align: center;


    }

    td, th{
        border: 2px solid black;
        padding: 12px;
        text-align: center;


    }

    th{
        background-color: black;
        color: white;



    }
</style>
<body>
<table>
    <?php

    $iam = array("avdsa060","barmi016","berch884","clela257","creju012","damya260","ernma852","joval068","licam409","manco156","meima483","sanal801","schch009","stato162","stean454","thich741");
    $Vorname = array("Avdusinovic","Barnich","Bernard","Clement","Crelo","Dams","Ernster","Jovanovic","Licina","Manukyan","Meier","Santos Soares","Schroeder","Stamer","Steinmetz","Thill");
    $Name = array("Sadin","Michel","Christophe","Lars","Julie","Yannis","Marco","Aleksandar","Amar","Constantin","Max","Peter","Alexandre","Chris","Tom","Andy","Charel");
    $Alter = array("18","18","18","18","18","18","18","18","18","18","18","18","18","18","18","18");
    $Email = array("avdsa060@school.lu","barmi016@school.lu","berch884@school.lu","clela257@school.lu","creju012@school.lu","damya260@school.lu","ernma852@school.lu","joval068@school.lu","licam409@school.lu","manco156@school.lu","meima483@school.lu","sanal801@school.lu","schch009@365.education.lu","stato162@school.lu","stean454@school.lu","thich741@school.lu");

    echo "<h1> 2TPIF1 - 19/20 -WSERS </h1>";


    echo "<th>IAM</th>";

    foreach($iam AS $i) {
        echo "<tr>";
        echo "<td> $i </td>";
        echo "</tr> ";
    }

    echo "<th>Vorname</th>";

    foreach($Vorname AS $vor) {
        echo "<tr>";
        echo "<td> $vor </td>";
        echo "</tr> ";
    }

    echo "<th>Name</th>";

    foreach($Name AS $na) {
        echo "<tr>";
        echo "<td> $na </td>";
        echo "</tr> ";
    }

    echo "<th>Alter</th>";

    foreach($Alter AS $al) {
        echo "<tr>";
        echo "<td> $al </td>";
        echo "</tr> ";

    }
    echo "<th>E-Mail</th>";

    foreach($Email AS $em) {
        echo "<tr>";
        echo "<td> $em </td>";
        echo "</tr> ";
    }



    ?>
</table>

</body>
</html>