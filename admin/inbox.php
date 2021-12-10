<?php include "./php/header.php" ?>

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li> <a href="index.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                <li class="list-divider"></li>

                <li> <a href="client.php"><i class="fas fa-user"></i> <span> Propriétaire</span></a>
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
                <li class="active"> <a href="#"><i class="fas fa-mail-bulk"></i><span> Email</span></a> </li>
                <li> <a href="compose.php"><i class="fas fa-paper-plane"></i><span>envoiyer Email</span></a> </li>
            </ul>
        </div>
    </div>
</div>




<div class="page-wrapper">
    <div class="content mt-5">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Inbox</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card-box">
                    <div class="email-header">
                        <div class="row">
                            <div class="col-sm-10 col-md-8 col-8 top-action-left">
                                <div class="float-left">
                                    <div class="btn-group dropdown-action">
                                        <button type="button" class="btn btn-white dropdown-toggle"
                                            data-toggle="dropdown">Select <i class="fa fa-angle-down "></i></button>
                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">All</a> <a
                                                class="dropdown-item" href="#">None</a>
                                            <div class="dropdown-divider"></div> <a class="dropdown-item"
                                                href="#">Read</a> <a class="dropdown-item" href="#">Unread</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropdown-action">
                                        <button type="button" class="btn btn-white dropdown-toggle"
                                            data-toggle="dropdown">Actions <i class="fa fa-angle-down "></i></button>
                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Reply</a>
                                            <a class="dropdown-item" href="#">Forward</a> <a class="dropdown-item"
                                                href="#">Archive</a>
                                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="#">Mark
                                                As Read</a> <a class="dropdown-item" href="#">Mark
                                                As Unread</a>
                                            <div class="dropdown-divider"></div> <a class="dropdown-item"
                                                href="#">Delete</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropdown-action">
                                        <button type="button" class="btn btn-white dropdown-toggle"
                                            data-toggle="dropdown"><i class="fas fa-folder"></i> <i
                                                class="fa fa-angle-down"></i></button>
                                        <div role="menu" class="dropdown-menu"> <a class="dropdown-item"
                                                href="#">Social</a> <a class="dropdown-item" href="#">Forums</a>
                                            <a class="dropdown-item" href="#">Updates</a>
                                            <div class="dropdown-divider"></div> <a class="dropdown-item"
                                                href="#">Spam</a> <a class="dropdown-item" href="#">Trash</a>
                                            <div class="dropdown-divider"></div> <a class="dropdown-item"
                                                href="#">New</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropdown-action">
                                        <button type="button" data-toggle="dropdown"
                                            class="btn btn-white dropdown-toggle"><i class="fas fa-tags"></i> <i
                                                class="fa fa-angle-down"></i></button>
                                        <div role="menu" class="dropdown-menu"> <a class="dropdown-item"
                                                href="#">Work</a> <a class="dropdown-item" href="#">Family</a>
                                            <a class="dropdown-item" href="#">Social</a>
                                            <div class="dropdown-divider"></div> <a class="dropdown-item"
                                                href="#">Primary</a> <a class="dropdown-item" href="#">Promotions</a> <a
                                                class="dropdown-item" href="#">Forums</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-left d-none d-sm-block">
                                    <input type="text" placeholder="Search Messages"
                                        class="form-control search-message">
                                </div>
                            </div>
                            <div class="col-sm-2 col-md-4 col-4 top-action-right">
                                <div class="text-right"> <span class="text-muted d-none d-md-inline-block">Showing 10 of
                                        112 </span>
                                    <button type="button" title="Refresh" data-toggle="tooltip"
                                        class="btn btn-white d-none d-md-inline-block"><i
                                            class="fas fa-sync-alt"></i></button>
                                    <div class="btn-group"> <a class="btn btn-white"><i
                                                class="fas fa-angle-left"></i></a> <a class="btn btn-white"><i
                                                class="fas fa-angle-right"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="email-content">
                        <div class="table-responsive">
                            <table class="table table-inbox table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="6">
                                            <input type="checkbox" id="check_all">
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM `contact`";
                                    $data = dataAccess::desplaydata($query);
                                    while ($row = $data->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                                        $id = $row[0];
                                        $nom = $row[1];
                                        $email = $row[2];
                                        $telephone = $row[3];
                                        $conntent = $row[4];
                                        $date = $row[5];

                                    ?>


                                    <tr class="unread clickable-row" data-href="#">
                                        <td>
                                            <input type="checkbox" class="checkmail">
                                        </td>
                                        <td><span class="mail-important"><i class="far fa-star"></i></span>
                                        </td>
                                        <td class="name"><?php echo $nom ?></td>
                                        <td class="subject"><?php echo $conntent ?></td>
                                        <td></td>
                                        <td class="mail-date"><?php echo $date ?></td>
                                    </tr>
                                    <?php }; ?>
                                    <tr class="clickable-row" data-href="#">
                                        <td>
                                            <input type="checkbox" class="checkmail">
                                        </td>
                                        <td><span class="mail-important"><i class="far fa-star"></i></span>
                                        </td>
                                        <td class="name">Twitter</td>
                                        <td class="subject">HRMS Bootstrap </td>
                                        <td></td>
                                        <td class="mail-date">30 Nov</td>
                                    </tr>
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