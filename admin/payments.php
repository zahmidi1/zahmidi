<?php include "./php/header.php" ?>




<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li> <a href="index.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                <li class="list-divider"></li>

                <li class="active"> <a href="client.php"><i class="fas fa-user"></i> <span> Propriétaire</span></a>
                </li>
                <li> <a href="ajouterP.php"><i class="fas fa-user-plus"></i> <span>Ajoute Propriétaire</span> </a>
                </li>
                <li> <a href="batiment.php"><i class="fas fa-key"></i> <span> Batiment/ villa </span></a>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Admin </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="users.php">Tout </a></li>

                        <li><a href="#"> Ajoute</a></li>
                    </ul>
                </li>
                <li> <a href="#"><i class="fas fa-clipboard-list"></i><span> Charges</span></a> </li>
                <li> <a href="inbox.php"><i class="fas fa-mail-bulk"></i><span> Email</span></a> </li>
                <li> <a href="compose.php"><i class="fas fa-paper-plane"></i><span>envoiyer Email</span></a> </li>
            </ul>
        </div>
    </div>
</div>




<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">client</h4> <a href="add-customer.html"
                            class="btn btn-primary float-right veiwbutton">Add clinet</a>
                    </div>
                </div>
                <div class="col-sm-12">
                    <?php

                    if (isset($_SESSION['error'])) {
                        echo " <div class='alert alert-danger alert-dismissible fade show' role='alert'>
					<strong>Error!</strong> A <a href='#' class='alert-link'>problem</a> has been occurred
					while submitting your data." . $_SESSION['error'] . "
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
					</div> ";
                        unset($_SESSION['error']);
                    }


                    if (isset($_SESSION['success'])) {
                        echo "
					
					<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Success!</strong> Your <a href='#' class='alert-link'>message</a> has been sent
                    successfully." . $_SESSION['success'] . "
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>
					";
                        unset($_SESSION['success']);
                    } ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body booking_card">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>factur ID</th>
                                        <th> Name</th>

                                        <th>Appartament</th>
                                        <th>Coût par mois</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>rest a payer </th>
                                        <th>$$</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    <?php



                                    $ecrypt = $_GET['id'];

                                    $ecrypt_1 = base64_decode(urldecode($ecrypt));

                                    $id_cli =  $ecrypt_1 / 123456789;

                                    $query = "SELECT * FROM paiment where `id_client`=$id_cli";
                                    $data_paiment = dataAccess::desplaydata($query);
                                    while ($paiment = $data_paiment->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                                        $id = $paiment[0];
                                        $paime = $paiment[1];
                                        $date_paiment = $paiment[2];
                                        $status = $paiment[3];
                                        $id_clinet = $paiment[4];
                                        $date_modifer = $paiment[5];

                                    ?>
                                    <?php
                                        $query = "SELECT * FROM client where id_client=$id_cli ";
                                        $data = dataAccess::desplaydata($query);

                                        $row_client = $data->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
                                        $id_client = $row_client[0];
                                        $nom = $row_client[1];
                                        $prenom = $row_client[2];
                                        $email = $row_client[3];
                                        $mot_de_passe = $row_client[4];
                                        $telephone = $row_client[5];
                                        ?>

                                    <?php
                                        $query = "SELECT * FROM `appartament` where `id_clinet`=$id_cli ";
                                        $data_cli = dataAccess::desplaydata($query);
                                        $row_app = $data_cli->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
                                        $id_appt = $row_app[0];
                                        $nom_app = $row_app[1];
                                        $cout_par_mois = $row_app[2];
                                        $id_batiment = $row_app[3];
                                        $id_clie = $row_app[4];
                                        $rest = $row_app[5];
                                        ?>
                                    <tr>
                                        <?php $ecrypt_fac = urlencode(base64_encode($id * 123456789)) ?>
                                        <td><a href="invoice-view.php?P=<?php echo $ecrypt_fac ?>">#FACTUR</a>
                                        </td>
                                        <td><?php echo $nom . " " . $prenom  ?></td>

                                        <td><?php echo   $nom_app ?></td>

                                        <td><?php echo $cout_par_mois ?></td>


                                        <td><?php echo $paime ?></td>
                                        <td><?php echo $date_paiment ?></td>
                                        <td><?php echo $status ?></td>
                                        <td><?php echo $rest ?></td>



                                    </tr>
                                    <?php  }
                                    ?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include "./php/footer.php" ?>