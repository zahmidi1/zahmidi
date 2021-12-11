<?php

session_start();
ob_start();
if ($_SESSION['admin']) {
    include "./php/conn.php";
    $db_id = $_SESSION['admin'];

    $query = "SELECT * FROM users where id_user= $db_id";
    $data = dataAccess::desplaydata($query);
    $row_admin = $data->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Jardin de assilah </title>
    <link rel="shortcut icon" type="image/x-icon"
        href="https://lesjardinsdassilah.com/wp-content/uploads/2016/11/favicon-32x32-1.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/css/feathericon.min.css">
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">

    <link rel="stylesheet" type="text/css" href="assets/plugins/summernote/dist/summernote-bs4.css">
</head>


<body onload="myFunction()">
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index" class="logo"> <img src="assets/img/Logo.png" width="50" height="70" alt="logo">
                    <span class="logoclass">jardin de asilah</span> </a>
                <a href="index" class="logo logo-small"> <img src="assets/img/Logo.png" alt="Logo" width="30"
                        height="30"> </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
            <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
            <ul class="nav user-menu">
                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i>
                        <span class="badge badge-pill">1</span> </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header"> <span class="notification-title">Notificationt</span> <a
                                href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has
                                                    approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">International Software
                                                        Inc</span> has sent you a invoice in the amount of <span
                                                        class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>


                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer"> <a href="#">TOUT</a> </div>
                    </div>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> </a>
                    <div class="dropdown-menu">
                        <div class="user-header">

                            <div class="user-text">
                                <h6><?php echo $row_admin[1] . " " . $row_admin[2] ?></h6>
                                <p class="text-muted mb-0"><?php echo $row_admin[7] ?></p>
                            </div>
                        </div> <a class="dropdown-item" href="profile">
                            Voir votre profil</a> <a class="dropdown-item" href="./php/logout.php">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
        <?php  } else
        header('location:../error-404');
        ?>