<?php include "../admin/php/conn.php" ?>
<?php session_start() ?>
<?php

if (isset($_POST['btnlogin'])) {
    $user_email = $_POST['email'];
    $password = $_POST['Password'];


    $sql = "SELECT * FROM `users` WHERE `email`= '$user_email' ";
    $query = dataAccess::desplaydata($sql);


    if (!empty($query)) {

        if ($query->rowCount() < 1) {

            $sql2 = "SELECT * FROM `client` WHERE `email`= '$user_email' ";
            $query2 = dataAccess::desplaydata($sql2);

            if ($query2->rowCount() < 1) {
                $_SESSION['error'] = "L’adresse e-mail que vous avez saisie n’est pas associée à un compte. <a href='#' class='alert-link'>Trouvez votre compte et connectez-vous</a> ";
            } else {
                $row = $query2->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
                if (password_verify($password,  $row[4])) {
                    $_SESSION['client'] = $row[0];
                } else {
                    $_SESSION['error'] = "Le mot de passe entré est incorrect. <a href='#' class='alert-link'>Vous l’avez oublié ?</a> ";
                }
            }
        } else {
            $row = $query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
            if ($row[3] == 1) {


                if (password_verify($password,  $row[6])) {
                    $_SESSION['admin'] = $row[0];
                } else {

                    $_SESSION['error'] = "Le mot de passe entré est incorrect admin. <a href='#' class='alert-link'>Vous l’avez oublié ?</a> /";
                }
            } else {
                $_SESSION['error'] = "voutre connte ne pas active. <a href='#' class='alert-link'>voud devait coonetat Manager?</a> ";
            }
        }
    }
} else {
    $_SESSION['error'] = "input";
}

header('location: ../index');




?>