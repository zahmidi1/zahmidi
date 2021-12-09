<?php include "./php/header.php" ?>



<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li> <a href="index.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
                </li>
                <li class="list-divider"></li>

                <li> <a href="client.php"><i class="fas fa-user"></i> <span> Propriétaire</span></a>
                </li>
                <li> <a href="ajouterP.php"><i class="fas fa-user-plus"></i> <span>Ajoute
                            Propriétaire</span> </a>
                </li>
                <li class="active"> <a href="batiment.php"><i class="fas fa-key"></i> <span> Batiment/ villa </span></a>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Admin </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="users.php">Tout </a></li>

                        <li><a href="#"> Ajoute</a></li>
                    </ul>
                </li>
                <li> <a href="client.php"><i class="fas fa-clipboard-list"></i><span> Charges</span></a> </li>
                <li> <a href="client.php"><i class="fas fa-mail-bulk"></i><span> Email</span></a> </li>
                <li> <a href="compose.php"><i class="fas fa-paper-plane"></i><span>envoiyer Email</span></a> </li>
            </ul>
        </div>
    </div>
</div>




<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">All Rooms</h4> <a href="add-room.html"
                            class="btn btn-primary float-right veiwbutton">Add Room</a>
                    </div>
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
                                        <th>Booking ID</th>
                                        <th>Name</th>
                                        <th>Room Type</th>
                                        <th>Total Numbers</th>
                                        <th>Date</th>
                                        <th>Time</th>


                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $query = "SELECT * FROM batiment ";
                                    $data = dataAccess::desplaydata($query);
                                    while ($row_batiment = $data->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                                        $id_batiment = $row_batiment[0];
                                        $nom_batiment = $row_batiment[1];

                                    ?>
                                    <?php
                                        $query = "SELECT * FROM appartament where id_batiment=$id_batiment";
                                        $data_APP = dataAccess::desplaydata($query);
                                        while ($row_appartament = $data_APP->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                                            $id_appartament = $row_appartament[0];
                                            $nom_appartament = $row_appartament[1];
                                            $cout_par_mois = $row_appartament[2];
                                            $id_bati = $row_appartament[3];
                                            $id_clinet = $row_appartament[4];
                                            $rest = $row_appartament[5];
                                        ?>
                                    <?php
                                            $query = "SELECT * FROM client where id_client=$id_clinet ";
                                            $data_cli = dataAccess::desplaydata($query);

                                            while ($row_client = $data_cli->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                                                $id_cli = $row_client[0];
                                                $nom = $row_client[1];
                                                $prenom = $row_client[2];
                                                $email = $row_client[3];
                                                $mot_de_passe = $row_client[4];
                                                $telephone = $row_client[5];
                                            ?>


                                    <tr>
                                        <td> <?php echo $nom_batiment . "-" . $nom_appartament  ?></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html"><?php echo $nom . " " . $prenom  ?>
                                                    <span>#00<?php echo $id_cli ?></span></a>
                                            </h2>
                                        </td>
                                        <td><?php echo $cout_par_mois ?></td>
                                        <td><?php echo $email  ?></td>
                                        <td><?php echo $telephone  ?></td>

                                        <td>
                                            <?php
                                                        if ($rest > 0) {
                                                            echo "
                                                          <div class='actions'> <a href='#'
                                                            class='btn btn-sm bg-danger-light mr-2'>" . $rest . "</a>
                                                    </div>";
                                                        } else {
                                                            echo "
                                                        <div class='actions'> <a href='#'
                                                            class='btn btn-sm bg-success-light mr-2'>" . $rest . "</a>
                                                    </div>";
                                                        }
                                                        ?>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action"> <a href="#"
                                                    class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item"
                                                        href="edit-room.html"><i class="fas fa-pencil-alt m-r-5"></i>
                                                        Edit</a> <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#delete_asset"><i
                                                            class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php }
                                        }
                                    }  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="delete_asset" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
                    <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "./php/footer.php" ?>