<?php include "./php/header.php"; ?>



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
                        <li><a href="users">Tout </a></li>
                        <li><a href="#"> Ajoute</a></li>
                    </ul>
                </li>
                <li> <a href="#"><i class="fas fa-clipboard-list"></i><span> Charges</span></a> </li>
                <li> <a href="inbox"><i class="fas fa-mail-bulk"></i><span> Email</span></a> </li>
                <li class="active"> <a href="compose"><i class="fas fa-paper-plane"></i><span>envoiyer
                            Email</span></a> </li>
            </ul>
        </div>
    </div>
</div>




<div class="page-wrapper">
    <div class="content mt-5">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Compose</h4>
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

        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="card-box">
                    <form>
                        <div class="form-group">
                            <input type="email" placeholder="To" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" placeholder="Cc" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" placeholder="Bcc" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea rows="4" cols="5" class="form-control summernote"
                                placeholder="Enter your message here"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <div class="text-center compose-btn">
                                <button class="btn btn-primary"><span>Send</span> <i
                                        class="fas fa-paper-plane m-l-5"></i></button>
                                <button class="btn btn-success m-l-5" type="button"><span>Draft</span> <i
                                        class="far fa-save m-l-5"></i></button>
                                <button class="btn btn-success m-l-5" type="button"><span>Delete</span> <i
                                        class="far fa-trash-alt m-l-5"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include "./php/footer.php" ?>