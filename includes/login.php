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
                $_SESSION['error'] = 'Cannot find account with the username';
            } else {
                $row = $query2->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
                if (password_verify($password,  $row[4])) {
                    $_SESSION['client'] = $row[0];
                } else {
                    $_SESSION['error'] = 'Incorrect password';
                }
            }
        } else {
            $row = $query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
            if (password_verify($password,  $row[6])) {
                $_SESSION['admin'] = $row[0];
            } else {
                $_SESSION['error'] = 'Incorrect password';
            }
        }
    }
} else {
    $_SESSION['error'] = 'Input admin credentials first';
}

header('location: ../index.php');



?>