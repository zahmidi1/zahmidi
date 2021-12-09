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

                                        <th>Name</th>
                                        <th>Appartament</th>
                                        <th>Cout par mois</th>



                                        <th>Email ID</th>
                                        <th>Ph.Number</th>
                                        <th>Rest</th>

                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>





                                    <?php

                                    $query = "SELECT * FROM appartament";
                                    $data_APP = dataAccess::desplaydata($query);
                                    while ($row_appartament = $data_APP->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                                        $id_appartament = $row_appartament[0];
                                        $nom_appartament = $row_appartament[1];
                                        $cout_par_mois = $row_appartament[2];
                                        $id_batiment = $row_appartament[3];
                                        $id_clinet = $row_appartament[4];
                                        $rest = $row_appartament[5];
                                    ?>
                                    <?php
                                        $query = "SELECT * FROM client where id_client=$id_clinet ";
                                        $data = dataAccess::desplaydata($query);

                                        while ($row_client = $data->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                                            $id_client = $row_client[0];
                                            $nom = $row_client[1];
                                            $prenom = $row_client[2];
                                            $email = $row_client[3];
                                            $mot_de_passe = $row_client[4];
                                            $telephone = $row_client[5];
                                        ?>
                                    <tr>
                                        <td><?php echo $nom . " " . $prenom  ?></td>
                                        <?php
                                                $query = "SELECT * FROM batiment where id_batiment=$id_batiment ";
                                                $data = dataAccess::desplaydata($query);
                                                while ($row_batiment = $data->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                                                    $id_batiment = $row_batiment[0];
                                                    $nom_batiment = $row_batiment[1];
                                                ?>
                                        <td><?php echo $nom_batiment . " " . $nom_appartament ?></td>
                                        <?php } ?>
                                        <td><?php echo $cout_par_mois ?></td>

                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="<?php echo $email ?>">email&#160;protected</a>
                                        </td>
                                        <td><?php echo $telephone ?></td>
                                        <td><?php
                                                    if ($rest > 0) {
                                                        echo "<span style='color: rgb(252, 0, 0);'>" . $rest . "</span>";
                                                    } else {
                                                        echo "<span style='color: #63C80A ;'>" . $rest . "</span>";
                                                    }
                                                    ?></td>


                                        <td class="text-right">
                                            <div class="dropdown dropdown-action"> <a href="#"
                                                    class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">

                                                    <a href='#' onclick="getCode(<?= $id_client; ?>);"
                                                        data-toggle="modal" class="dropdown-item" data-target="#payer"
                                                        data-id="<?= $id_client; ?>"><i
                                                            class="fas fa-euro-sign m-r-5"></i> payer</a>
                                                    <?php $ecrypt = urlencode(base64_encode($id_client * 123456789)) ?>
                                                    <a class="dropdown-item"
                                                        href="payments.php?id=<?php echo $ecrypt ?>"><i
                                                            class="fas fa-info m-r-5"></i> info</a>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php  }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="payer" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">


                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="./php/add_payment.php"
                        enctype="multipart/form-data">
                        <div class="row form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">

                                    <label>payer</label>
                                    <input type="number" name="payer" class="form-control" id="payer">
                                    <input style="display : none ;" type="number" name="code_client"
                                        class="form-control" id="code_client">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">

                                    <label>Date de paiment</label>
                                    <div class="cal-icon">
                                        <input type="date" id="date_paiment" name="date_paiment" class="form-control ">
                                    </div>


                                </div>

                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>status</label>
                                    <div class="form-group">
                                        <select name="status" id="status" class="form-control" onchange="myFunction()">
                                            <option value=""> - - - </option>
                                            <option value="cheque">cheque</option>
                                            <option value="verment">verment</option>
                                            <option value="Quache">Quache</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 ">
                                <div class="form-group">

                                    <div id="id_chiq">
                                    </div>
                                </div>

                            </div>

                            <button type="button" class="btn btn-outline-light active m-r-5"
                                data-dismiss="modal">Close</button>
                            <button type="submit" name="paiment" class="btn btn-primary ">Save</button>

                        </div>

                    </form>
                    <script>
                    function myFunction() {
                        var x = document.getElementById("status").value;
                        if (x == 'cheque') {
                            document.getElementById("id_chiq").innerHTML =
                                " <input type='number' name='n_cheq' class='form-control' id='n_cheq'>";
                        } else {
                            document.getElementById("id_chiq").innerHTML = " ";
                        }

                    }
                    </script>


                </div>
            </div>
        </div>
    </div>
</div>
<?php include "./php/footer.php" ?>