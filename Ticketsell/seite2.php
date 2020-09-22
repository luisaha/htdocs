<?php

    session_start(); //Ganz wichtig

    if (!isset($_SESSION['userName'])) {
        die("Bitte erst einloggen"); //Mit die beenden wir den weiteren Scriptablauf
    }

    //In $name den Wert der Session speichern
    $name = $_SESSION['userName'];

    //Text ausgeben
    echo "Du heißt immer noch: $name
    <a href=\"logout.php\">Logout</a>";

?>