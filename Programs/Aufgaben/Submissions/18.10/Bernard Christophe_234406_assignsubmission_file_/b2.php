<?php

$user = $_GET["user"];
$pw = $_GET["pw"];
$msg = $_GET["msg"];

$user2 = '"'.$user.'"';
$pw2 = '"'.$pw.'"';


if($user == "" || $pw == "" || $msg == ""){
    echo "Bitte Etwas eingeben";
} else {

    $name = explode(", ",file_get_contents("user.txt"));
    $pass = explode(", ",file_get_contents("pw.txt"));
    $userId = array_search($user2,$name);

    if(in_array($user2,$name)){

        if($pass[$userId] != $pw2){
            echo "Passwort ist Falsch";
        } else {
            header ( "Location: post.php?user=".$user."&msg=".$msg);
        }

    } else {

        $newEntryUser = '"'.$user.'", ';
        $handle = fopen ("user.txt", "a");
        fwrite ($handle, $newEntryUser);
        fclose ($handle);

        $newEntryPass = '"'.$pw.'", ';
        $handle = fopen ("pw.txt", "a");
        fwrite ($handle, $newEntryPass);
        fclose ($handle);

        header ( "Location: post.php?user=".$user."&msg=".$msg);

    }
}
?>