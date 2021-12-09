<?php include "../admin/php/conn.php" ?>
<?php session_start() ?>
<?php
if (isset($_POST['btnlogin'])) {
    $email =  $_POST['email'];
    $Password =  $_POST['Password'];


    $query = "SELECT * FROM `client` WHERE `email`= '$email' ";
    $data = dataAccess::desplaydata($query);

    if (!empty($data)) {

        while ($row = $data->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {

            $db_id_client = $row[0];
            $db_nom = $row[1];
            $db_prenom = $row[2];
            $db_email = $row[3];
            $db_mot_de_passe = $row[4];
            $db_telephone = $row[5];
            $db_date_denter = $row[6];
        }

        if ($email === $db_email && $db_mot_de_passe === $Password) {
            $_SESSION["db_id_user"] = $db_id_client;
            $_SESSION["db_nom"] = $db_nom;
            $_SESSION["db_prenom"] = $db_prenom;
            $_SESSION["db_email"] = $db_email;
            $_SESSION["db_telephone"] = $db_telephone;
            $_SESSION["db_paswored"] = $db_mot_de_passe;
            header("location: ../home.php");
        } else {
            header("location: ../index.php");
        }
    }
}


?>