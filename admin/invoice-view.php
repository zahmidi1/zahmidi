<?php include "./php/header.php" ?>


<?php include "./php/ssidebar.php" ?>






<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-5 col-4">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Invoice</h4>
                    </div>
                </div>
                <div class="col-sm-7 col-8 text-right">
                    <div class="mt-5">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-white">CSV</button>
                            <button class="btn btn-white">PDF</button>
                            <button class="btn btn-white"><i class="fas fa-print fa-lg"></i> Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php




        $ecrypt = $_GET['P'];

        $ecrypt_1 = base64_decode(urldecode($ecrypt));

        $id_cli =  $ecrypt_1 / 123456789;

        if (!empty($id_cli)) {
            $getid =  "where id_paiment =$id_cli";
        } else {
            $getid =  "ORDER BY `paiment`.`id_paiment`DESC";
        }


        if (!empty($id_cli)) {
            $getid =  "where id_paiment =$id_cli";
        } else {
            $getid =  "ORDER BY `paiment`.`id_paiment`DESC";
        }

        $query = "SELECT * FROM `paiment` $getid";
        $paiment = dataAccess::desplaydata($query);


        $row_paiment = $paiment->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
        $id_paiment = $row_paiment[0];
        $payer = $row_paiment[1];
        $date_payer = $row_paiment[2];
        $status = $row_paiment[3];
        $id_client = $row_paiment[4];
        $today = $row_paiment[5];



        $query = "SELECT * FROM appartament where id_clinet =$id_client ";
        $select_all = dataAccess::desplaydata($query);
        $row = $select_all->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
        $id_appartament = $row[0];
        $nom_appartament = $row[1];
        $cout_par_mois = $row[2];
        $id_patiment = $row[3];
        $id_clinet = $row[4];
        $rest = $row[5];

        $query = "SELECT * FROM client where id_client=$id_clinet ";
        $data = dataAccess::desplaydata($query);

        $row_client = $data->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
        $id_client = $row_client[0];
        $nom = $row_client[1];
        $prenom = $row_client[2];
        $email = $row_client[3];
        $mot_de_passe = $row_client[4];
        $telephone = $row_client[5];
        ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row custom-invoice">
                            <div class="col-6 col-sm-6 m-b-20">
                                <img src="assets/img/logo-dark.png" class="inv-logo" alt="">
                                <ul class="list-unstyled">
                                    <li>Date: <span><?php echo $today  ?></span></li>
                                    <li>paiement date: <span><?php echo $date_payer ?></span></li>
                                </ul>
                            </div>
                            <div class="col-6 col-sm-6 m-b-20">
                                <div class="invoice-details">
                                    <h3 class="text-uppercase">facture #F-00<?php echo $id_paiment ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-6 m-b-20">
                                <h5> to:</h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <h5><strong>Les Jardins d'Assilah</strong></h5>
                                    </li>
                                    <li>5754 Airport Rd</li>
                                    <li>Coosada, AL, 36020</li>
                                    <li>MA : +212 661 04 46 91</li>
                                    <li> BE : 0032 472 076 512</li>
                                    <li><a href="email :info@lesjardinsdassilah.com "><span class="__cf_email__">[&#160;
                                                info@lesjardinsdassilah.com]</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-lg-6 m-b-20">
                                <div class="invoices-view">
                                    <span class="text-muted">Payment Details:</span>
                                    <ul class="list-unstyled invoice-payment-details">
                                        <li>
                                            <h5>Total paiement: <span class="text-right"><?php echo $payer ?></span>
                                            </h5>
                                        </li>
                                        <li>Nome et prenom : <span><?php echo $nom . " " . $prenom ?></span>
                                        </li>
                                        <li>Email: <span><?php echo $email ?></span></li>
                                        <li>telephone: <span><?php echo $telephone ?></span></li>

                                        <li>N : Appartement: <span><?php echo $nom_appartament ?></span></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ITEM</th>
                                        <th>DESCRIPTION</th>
                                        <th>UNIT COST</th>
                                        <th>QUANTITY</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Full body checkup</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                        <td>$150</td>
                                        <td>1</td>
                                        <td>$150</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Blood Test</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                        <td>$12</td>
                                        <td>1</td>
                                        <td>$12</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>General checkup</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                        <td>$100</td>
                                        <td>1</td>
                                        <td>$100</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <div class="row invoice-payment">
                                <div class="col-sm-7">
                                </div>
                                <div class="col-sm-5">
                                    <div class="m-b-20">
                                        <h6>Total due</h6>
                                        <div class="table-responsive no-border">
                                            <table class="table mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th>Subtotal:</th>
                                                        <td class="text-right">$262</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tax: <span class="text-regular">(10%)</span></th>
                                                        <td class="text-right">$26.2</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total:</th>
                                                        <td class="text-right text-primary">
                                                            <h5>$288.2</h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-info">
                                <h5>Other information</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum
                                    ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim
                                    aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus
                                    leo vitae lorem interdum, eu scelerisque tellus fermentum. Curabitur sit
                                    amet lacinia lorem. Nullam finibus pellentesque libero, eu finibus sapien
                                    interdum vel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "./php/footer.php" ?>