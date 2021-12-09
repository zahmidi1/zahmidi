<?php
session_start();
ob_start();
include 'conn.php';

if (isset($_POST['paiment'])) {

    $n_cheq = $_POST['n_cheq'];
    $payer = $_POST['payer'];
    $date_paiment = $_POST['date_paiment'];
    $status = $_POST['status'];
    $id_client = $_POST['code_client'];
    if (!empty($n_cheq)) {
        $status = $status . " N: " . $n_cheq;
    };


    $sql = "INSERT INTO `paiment` (`id_paiment`, `paiment`, `date_paiment`, `status`, `id_client`, `date_modif`)
                  VALUES (NULL, '$payer','$date_paiment', '$status', '$id_client',now())";
    $query = dataAccess::update($sql);
    if (!empty($query)) {
        $_SESSION['success'] = 'Admin profile add successfully';
        header('location: ../invoice-view.php');
    } else {
        $_SESSION['error'] = "helooo";
        header('location: ../client.php');
    }
} else {
    $_SESSION['error'] = 'Fill up add form first';
    header('location: ../client.php');
}