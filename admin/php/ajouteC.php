<?php

include "./conn.php";
if (isset($_POST["ajouteC"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $ajouterB = $_POST["ajouterB"];

    $appear = $_POST["appear"];
    $batimentN = $_POST["batimentN"];
    $nom = $_POST["nom"];

    $prenom = $_POST["prenom"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    echo $email . " / " . $password . " / " . $ajouterB . " / " . $appear . " / " . $batimentN . " / " . $nom . " / " . $prenom . " / " . $phone . " / " . $address;
}