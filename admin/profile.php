<?php include "./php/header.php" ?>


<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active"> <a href="index"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
                </li>
                <li class="list-divider"></li>

                <li> <a href="client"><i class="fas fa-user"></i> <span> Propriétaire</span></a>
                </li>
                <li> <a href="ajouterP"><i class="fas fa-user-plus"></i> <span>Ajoute Propriétaire</span> </a>
                </li>
                <li> <a href="batiment"><i class="fas fa-key"></i> <span> Batiment/ villa </span></a>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Admin </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="users">Tout </a></li>
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
        <div class="page-header mt-5">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Profile</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <?php

                    if (isset($_SESSION['error'])) {
                        echo " <div class='alert alert-danger alert-dismissible fade show' role='alert'>
					<strong>Error!</strong>" . $_SESSION['error'] . "
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
					</div> ";
                        unset($_SESSION['error']);
                    }


                    if (isset($_SESSION['success'])) {
                        echo "
					
					<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Success!</strong>" . $_SESSION['success'] . "
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
            <div class="col-md-12">
                <div class="profile-header">
                    <div class="row align-items-center">

                        <div class="col ml-md-n2 profile-user-info">
                            <h4 class="user-name mb-3"><?php echo $row_admin[1] . " " . $row_admin[2] ?></h4>
                            <h6 class="text-muted mt-1"><?php echo $row_admin[7] ?></h6>
                            <div class="user-Location mt-1"><i class="fas fa-map-marker-alt"></i>
                                <?php echo $row_admin[9] . ", " . $row_admin[10] ?>
                            </div>
                            <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </div>
                        <div class="col-auto profile-btn"> <a href="edit-profile.html" class="btn btn-primary">
                                Edit
                            </a> </div>
                    </div>
                </div>
                <div class="profile-menu">
                    <ul class="nav nav-tabs nav-tabs-solid">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab"
                                href="#per_details_tab">About</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content profile-tab-cont">
                    <div class="tab-pane fade show active" id="per_details_tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Personal Details</span>
                                            <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i
                                                    class="fa fa-edit mr-1"></i>Edit</a>
                                        </h5>
                                        <div class="row mt-5">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3"><?php echo $row_admin[1] ?>
                                            </p>
                                            <p class="col-sm-9"><?php echo  $row_admin[2] ?></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                            <p class="col-sm-9"><?php echo $row_admin[8] ?></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Email ID </p>
                                            <p class="col-sm-9"><a href="#"
                                                    email-to="<?php echo $row_admin[4] ?>">[<?php echo $row_admin[4] ?>]</a>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Mobile</p>
                                            <p class="col-sm-9"><?php echo $row_admin[5] ?></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0">Address</p>
                                            <p class="col-sm-9 mb-0"><?php echo $row_admin[11] ?>,
                                                <br> <?php echo $row_admin[10] ?>,
                                                <br> <?php echo $row_admin[9] ?>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Détails personnels</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"> <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="./php/profile_update.php" method="POST">
                                                    <div class="row form-row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Nom</label>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo  $row_admin[1] ?>" name="nom">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Prénom</label>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo  $row_admin[2] ?>" name="prenom">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label>Date de naissance</label>
                                                                <div class="cal-icon">
                                                                    <input type="text" class="form-control"
                                                                        value="<?php echo  $row_admin[8] ?>"
                                                                        name="naissance">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="email" class="form-control"
                                                                    value="<?php echo  $row_admin[4] ?>" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Mobile</label>
                                                                <input type="text" value="<?php echo  $row_admin[5] ?>"
                                                                    name="mobil" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <h5 class="form-title"><span>Adresse</span></h5>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label>Adresse</label>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo  $row_admin[11] ?>"
                                                                    name="adresse">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Ville</label>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo  $row_admin[10] ?>" name="ville">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Pays</label>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo  $row_admin[9] ?>" name="pays">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <button type="submit" name="submit"
                                                        class="btn btn-primary btn-block">enregistrer</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="password_tab" class="tab-pane fade">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">changer le mot de passe</h5>
                                <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                        <div id="show"></div>
                                        <form action="./php/profile_update.php" method="post">
                                            <div class="form-group">
                                                <label>Vieille le mot de passe <span style="color:red">*</span></label>
                                                <input type="password" name="curr_password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Nouveau le mot de passe <span style="color:red">*</span></label>
                                                <input id="pwd" type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirmer le mot de passe <span
                                                        style="color:red">*</span></label>
                                                <input disabled id="cpwd" name="password" type="password"
                                                    class="form-control">
                                            </div>

                                            <button disabled class="btn btn-success" id="savePaswored"
                                                name="savePaswored" type="submit">Enregistré
                                            </button>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "./php/footer.php" ?>