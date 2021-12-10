<?php include "./php/header.php" ?>




<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li> <a href="index"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
                </li>
                <li class="list-divider"></li>

                <li> <a href="client"><i class="fas fa-user"></i> <span> Propriétaire</span></a>
                </li>
                <li> <a href="ajouterP"><i class="fas fa-user-plus"></i> <span>Ajoute
                            Propriétaire</span> </a>
                </li>
                <li> <a href="batiment"><i class="fas fa-key"></i> <span> Batiment/ villa </span></a>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Admin </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="active" href="users">Tout </a></li>
                        <li><a href="#"> Ajoute</a></li>
                    </ul>
                </li>
                <li> <a href="#"><i class="fas fa-clipboard-list"></i><span> Charges</span></a> </li>
                <li> <a href="inbox"><i class="fas fa-mail-bulk"></i><span> Email</span></a> </li>
                <li> <a href="compose"><i class="fas fa-paper-plane"></i><span>envoiyer Email</span></a> </li>
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
                        <h4 class="card-title float-left mt-2">user</h4> <a href="add-customer.html"
                            class="btn btn-primary float-right veiwbutton">ajouter user</a>
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

                                        <th>Name</th>
                                        <th>prenom</th>
                                        <th>Status</th>



                                        <th>Email ID</th>
                                        <th>Ph.Number</th>


                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    $query = "SELECT * FROM users";
                                    $data = dataAccess::desplaydata($query);
                                    while ($row_user = $data->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                                        $id = $row_user[0];
                                        $nom = $row_user[1];
                                        $prenom = $row_user[2];
                                        $status = $row_user[3];
                                        $email = $row_user[4];
                                        $telephone = $row_user[5];
                                    ?>

                                    <tr>
                                        <td><?php echo $nom    ?></td>
                                        <td><?php echo   $prenom  ?></td>
                                        <td>
                                            <?php
                                                if ($status == 0) {
                                                    echo "
                                                          <div class='actions'> <a href='#'
                                                            class='btn btn-sm bg-danger-light mr-2'>no active</a>
                                                    </div>";
                                                } else {
                                                    echo "
                                                        <div class='actions'> <a href='#'
                                                            class='btn btn-sm bg-success-light mr-2'>active </a>
                                                    </div>";
                                                }
                                                ?>
                                        </td>



                                        <td><?php echo $email ?></td>
                                        <td><?php echo $telephone ?></td>


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