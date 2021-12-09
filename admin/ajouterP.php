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
                <li class="active"> <a href="ajouterP.php"><i class="fas fa-user-plus"></i> <span>Ajoute
                            Propriétaire</span> </a>
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
                <div class="col-sm-12">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">ajouter </h4> <a href="client.php"
                            class="btn btn-primary float-right veiwbutton">tout</a>
                    </div>
                </div>

                <div class="col-sm-12">
                    <?php
                    $_SESSION['error'] = "heloo";
                    if (isset($_SESSION['error'])) {

                        echo "<script>
                        test();
                    </script>";
                        //     echo " <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        // <strong>Error!</strong> A <a href='#' class='alert-link'>problem</a> has been occurred
                        // while submitting your data." . $_SESSION['error'] . "
                        // <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        // <span aria-hidden='true'>&times;</span>
                        // </button>
                        // </div> ";
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ajoute </h4>
                    </div>
                    <div class="card-body">
                        <form action="./php/ajouteC.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="card-title">Personal details</h4>
                                    <div class="form-group">
                                        <label>email:</label>
                                        <input type="email" class="form-control" name="email">


                                    </div>
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input type="password" class="form-control" name="password">



                                    </div>
                                    <div class="form-group">
                                        <label>batiment:</label>
                                        <select name="ajouterB" id="ajouterB" class="form-control"
                                            onchange="myFunction()">


                                            <option value="0">Select Batimen</option>
                                            <?php
                                            $query = "SELECT * FROM batiment ";
                                            $data = dataAccess::desplaydata($query);

                                            while ($row_batiment = $data->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                                                $id_batiment = $row_batiment[0];
                                                $nom_batiment = $row_batiment[1];

                                            ?>


                                            <option value="<?php echo $id_batiment ?>"><?php echo $nom_batiment ?>
                                            </option>


                                            <?php } ?>
                                            <option value="ajouter">ajouter</option>
                                        </select>
                                    </div>
                                    <div id="app" class="form-group">


                                    </div>

                                    <div id="appar" style="display : none ;" class="form-group">
                                        <label>apparemt:</label>
                                        <input type="text" class="form-control" name="appear">



                                    </div>

                                    <script>
                                    function myFunction() {
                                        var x = document.getElementById("ajouterB").value;
                                        if (x == "0") {
                                            document.getElementById("app").innerHTML = " ";
                                            document.getElementById("appar").style.display = "none";

                                        } else {
                                            document.getElementById("app").innerHTML = " ";
                                            document.getElementById("appar").style.display = "block";

                                        }


                                        if (x == 'ajouter') {
                                            document.getElementById("app").innerHTML =
                                                "  <label>nom batimen:</label><input type='text' name='batimentN' class='form-control' id='batimentN'>";
                                            document.getElementById("appar").style.display = "block";

                                        }

                                    }
                                    </script>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="card-title">Personal details</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nome:</label>
                                                <input type="text" class="form-control" name="nom">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Prenom:</label>
                                                <input type="text" class="form-control" name="prenom">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email:</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone:</label>
                                                <input type="text" class="form-control" name="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address line:</label>
                                                <input type="text" class="form-control" name="address">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="text-right">


                                <button id="ajouteC" name="ajouteC" onclick="test();" type="submit"
                                    class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
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

<script>
function test() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'Signed in successfully'
    })
}
</script>

<?php include "./php/footer.php" ?>