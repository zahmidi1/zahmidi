<?php

session_start();
ob_start();
if ($_SESSION['client']) {
    include "./admin/php/conn.php";
    $db_id_user = $_SESSION['client'];

    $query = "SELECT * FROM client where id_client= $db_id_user";
    $data = dataAccess::desplaydata($query);
    while ($row_client = $data->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
        $id_client = $row_client[0];
        $nom = $row_client[1];
        $prenom = $row_client[2];
        $email = $row_client[3];
        $mot_de_passe = $row_client[4];
        $telephone = $row_client[5];
    }

?>


<!DOCTYPE html>
<html lang="en">







<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://lesjardinsdassilah.com/wp-content/uploads/2016/11/favicon-32x32-1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!--FontAwsome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="includes/styles.css" />
    <link rel="stylesheet" href="includes/stylePLUS.css" />
    <link rel="stylesheet" href="includes/box-shadows.min.css" />

    <title>Document</title>
</head>

<body>

    <!--Navbar-->
    <div class="container-fluid shadow ">
        <nav class="row d-flex  align-items-center p-2 navbarclass  ">
            <div class="logo col-lg-6  col-sm-12 smz"><img src="img/logo.png" alt="" class="h-auto" width="300px"></div>
            <div class="divs col-lg-6  col-sm-12 ">
                <ul class="d-flex justify-content-evenly p-0 m-0 ">
                    <a href="index.php">
                        <li><i class="fas fa-home"></i> <span class="menuitems"> Acceuill</span></li>
                    </a>
                    <a href="#payment">
                        <li><i class="fas fa-file-invoice"></i><span class="menuitems">Payment</span></li>
                    </a>
                    <a href="#contact">
                        <li><i class="fab fa-telegram-plane"></i><span class="menuitems">Contactez-nous</span></li>
                    </a>
                    <a href="./includes/logout.php">
                        <li><i class="fas fa-sign-out-alt"></i><span class="menuitems">Déconnecter</span></li>
                    </a>
                </ul>
            </div>
        </nav>
    </div>

    <!--Slider-->

    <div class="row d-flex flex-row justify-content-center align-items-center mb-4  ">
        <div class="col-lg-4  col-md-4 col-sm-12 ">
            <div class="text-center lead p-3 h-1  ">
                <div>
                    <p> Les Jardins d’Assilah</span> axe ses efforts sur plusieurs directions.

                        Plus qu’un mode de vie dans les espaces verts, ce projet intègre la notion en herbe de
                        l’écologie et de la construction durable au Maroc. Nous sommes un des rares constructeurs à
                        l’intégrer en standard
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-8  col-md-8 col-sm-12 d-felx flex-column justify-content-center  ">
            <div class="container h-auto w-auto pt-3   ">
                <div id="carouselExampleCaptions" class="carousel slide shadow " data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"
                            aria-label="Slide 7"></button>

                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/S1.png" class="d-block w-100 h-75" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Habiter entre terre et mer</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/s2.png" class="d-block w-100 h-75" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Climatisation à faible consommation</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/s3.png" class="d-block w-100 h-75" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Utilisation de béton écologique</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/s4.png" class="d-block w-100 h-75" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>80% d’espace vert</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/S5.png" class="d-block w-100 h-75" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Intégration de vitrage isolant</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/S6.png" class="d-block w-100 h-75" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Chape acoustique</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/S7.png" class="d-block w-100 h-75" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Éclairage public photovoltaïque</h5>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--reviews-->
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12 d-flex justify-content-center p-4  " style="font-weight: 700; font-size:30px;"> <span
                    class="underline ">Laisser un avis</span></div>
        </div>
    </div>
    <div class="container-fluid review  ">
        <div class="row ">
            <div class="col-lg-4 pb-3 col-med-6 col-sm-12 d-flex flex-column align-items-center">

                <a
                    href="https://www.google.com/maps/place/Les+jardins+d'Assilah/@35.474539,-6.016918,15z/data=!4m2!3m1!1s0x0:0x774acd28fea74cd9?sa=X&ved=2ahUKEwi_3Ke279vyAhUBCxoKHSzECv8Q_BJ6BAhUEAU">
                    <img class="shadow rounded" src="img/google.png" alt="" width="80px" width="80px"></a>
                <div class="p-3 text-center">
                    <a
                        href="https://www.google.com/maps/place/Les+jardins+d'Assilah/@35.474539,-6.016918,15z/data=!4m2!3m1!1s0x0:0x774acd28fea74cd9?sa=X&ved=2ahUKEwi_3Ke279vyAhUBCxoKHSzECv8Q_BJ6BAhUEAU">
                        <b>Google Maps</b></a>

                </div>
                <span class="rparagraph text-center">Google Maps est un service de cartographie en ligne. Le service a
                    été créé par Google à la suite du rachat en octobre 2004 de la start-up australienne Where 2
                    Technologies.</span>
            </div>
            <div class="col-lg-4 pb-3 col-med-6 col-sm-12 d-flex flex-column align-items-center ">
                <a href="https://www.booking.com/hotel/ma/les-jardins-d-39-assilah-assilah.fr.html"><img
                        class="shadow rounded" src="img/booking.png" alt="" width="80px" width="80px"></a>
                <div class="p-3 text-center">
                    <a href="https://www.booking.com/hotel/ma/les-jardins-d-39-assilah-assilah.fr.html">
                        <b>Booking.com</b></a>

                </div>
                <span class="rparagraph text-center">Booking.com est un site néerlandais qui propose des hébergements
                    dans différents types de propriétés allant de l'hôtel au gîte touristique en passant par
                    l'appartement. Il est décliné en 43 autres langues.</span>

            </div>
            <div class="col-lg-4 pb-3 col-med-6 col-sm-12 d-flex flex-column align-items-center ">
                <a href="https://www.expedia.fr/Tangier-Hotel-Les-Jardins-DAssilah-Duplex.h41372175.Description-Hotel">
                    <img class="shadow rounded" src="img/Expedia.jpg" alt="" width="80px" width="80px"></a>

                <div class="p-3 text-center">
                    <a
                        href="https://www.expedia.fr/Tangier-Hotel-Les-Jardins-DAssilah-Duplex.h41372175.Description-Hotel">
                        <b>Expedia</b> </a>
                </div>
                <span class="rparagraph text-center">Expedia est une société américaine basée à Seattle, Washington
                    exploitant plusieurs agences de voyages en ligne</span>

            </div>
        </div>
    </div>
    <!--Budget-->

    <div class="container-fluid review1" id="budget">
        <div class="row ">
            <div class="col-12 d-flex justify-content-center p-4 underline text-center  "
                style="font-weight: 700; font-size:30px;">Budget Prévisionnel 2021/2022</div>
        </div>
    </div>
    <div class=" container-fluid row m-0  ">
        <div class="container-fluid h-auto col-lg-8 col-sm-12  ">
            <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item ">
                        <table class="table">
                            <thead>
                                <tr>
                                <tr class="th1">
                                    <th colspan="4" class="text-center ">Frais liés au fonctionnement des Jardins
                                        d’Assilah</th>

                                </tr>
                                <tr class="th1">
                                    <th colspan="4" class="text-center ">C5/C6/B11/B12/B13/D1/D2/D3/D4/B6/B10</th>

                                </tr>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t1">
                                    <th scope="row">Nettoyage des 11 Bâtiments.<br>
                                        C5/C6/B11/B12/B13/D1/D2/D3/D4/B6/B10
                                    </th>
                                    <td>2 femmes de ménage
                                    </td>
                                    <td>2.340,00 MAD<br>
                                        Par mois </td>
                                    <td>4.680,00</td>
                                </tr>
                                <tr class="t2">
                                    <th scope="row">Entretien des 11 ascenseurs.<br>
                                        C5/C6/B11/B12/B13/D1/D2/D3/D4/B6/B10</th>
                                    <td>11 ascenseurs
                                    </td>
                                    <td>291,73 MAD<br>
                                        Par bâtiment</td>
                                    <td>3.209,00</td>
                                </tr>
                                <tr class="t3">
                                    <th scope="row">Assurance des 11 Bâtiments.<br>
                                        C5/C6/B11/B12/B13/D1/D2/D3/D4/B6/B10</th>
                                    <td colspan="1"></td>
                                    <td>336,36 MAD<br>
                                        Par bâtiment</td>
                                    <td>3.700,00<br>
                                        Par bâtiment</td>
                                </tr>
                                <tr class="t4">
                                    <th scope="row">Assurance Accident de travail.</th>
                                    <td colspan="2"></td>
                                    <td>625,00</td>
                                </tr>
                                <tr class="t5">
                                    <th scope="row">Amendis.
                                    </th>
                                    <td colspan="1">Amendis 11 bâtiments</td>
                                    <td>1125,36<br>
                                        Par bâtiment</td>
                                    <td>12.379,00</td>
                                </tr>
                                <tr class="t6">
                                    <th scope="row">
                                        Divers.<br>(Produit de nettoyage + chlore + anti algue + matériel de jardinnage
                                        et piscine )

                                    </th>
                                    <td colspan="2"></td>
                                    <td>3.000,00</td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr class="tfot">
                                    <th scope="row" colspan="2" class="text-center p-3  ">Totall </th>

                                    <th scope="row" colspan="2">27.593,00</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="carousel-item active">
                        <table class="table">
                            <thead>

                                <tr class="th1">
                                    <th colspan="3" class="text-center">C5/C6/B11/B12/B13/D1/D2/D3/D4/B6/B10 + Villa
                                        jumelée + Villas</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="t1">
                                    <th>Gardiennage</th>
                                    <td>4</td>
                                    <td>12.000,00
                                    </td>
                                </tr>
                                <tr class="t2">
                                    <th>Jardinners</th>
                                    <td>4</td>
                                    <td>11.840,00
                                    </td>
                                </tr>
                                <tr class="t3">
                                    <th>Piscinistes</th>
                                    <td>1</td>
                                    <td>2.600,00</td>

                                </tr>
                                <tr class="t4">
                                    <th>Honoraire de Syndic</th>
                                    <td>1</td>
                                    <td>3.000,00</td>
                                </tr>
                                <tr class="t5">
                                    <th>Honoraire du comptable</th>
                                    <td>1</td>
                                    <td>833,33</td>
                                </tr>
                                <tr class="t6">
                                    <th>CNSS</th>
                                    <td></td>
                                    <td>5.000,00</td>
                                </tr>
                                <tr class="t7">
                                    <th>Minuterie de la guérire </th>
                                    <td>Amendis</td>
                                    <td>500,00</td>
                                </tr>
                                <tr class="t8">
                                    <th>Fonds de réserve </th>
                                    <td>1</td>
                                    <td>6.000,00</td>
                                </tr>
                                <tr class="t9">
                                    <th>Un technicien </th>
                                    <td>1</td>
                                    <td>1.500,00</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="tfot">
                                    <th scope="row" colspan="2" class="text-center p-3  ">Totall </th>

                                    <th scope="row" colspan="2">43.273,33</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 shadow d-flex flex-column justify-content-center"><img src="img/companyinfo.jpg"
                alt="" class="mh-100 mw-100 w-sm-75 w-md-75 "></div>

    </div>
    <!--Payment-->
    <div class="container-fluid review2" id="payment">
        <div class="row ">
            <div class="col-12 d-flex justify-content-center p-4 underline  " style="font-weight: 700; font-size:30px;">
                Payment</div>
        </div>
    </div>
    <?php



        $query = "SELECT * FROM paiment where id_client= $db_id_user";

        $data = dataAccess::desplaydata($query);

        while ($row_paiment = $data->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
            $id_paiment = $row_paiment[0];
            $paiment = $row_paiment[1];
            $date_paiment = $row_paiment[2];
            $status = $row_paiment[3];
            $rest = $row_paiment[4];

        ?>

    <div class="container-fluid mb-3 d-flex justify-content-center  ">

        <div class="row rounded bShadow bShadow-3 payment d-flex justify-content-center  w-75 h-auto border-top p-2">
            <div class="col-2 d-flex flex-column justify-content-center"><i
                    class="fas fa-file-invoice fa-3x text-success "></i></div>
            <div class="col-5  d-flex flex-column justify-content-center ">
                <div class="mb-2 ">Nom: <b class="payfont"> <?php echo $_SESSION["db_nom"] ?></b></div>
                <div class="mb-2 ">Date de paiement: <b class="payfont"><?php echo $date_paiment ?></b></div>
            </div>
            <div class="col-5   d-flex flex-column justify-content-center">
                <div class="mb-2 ">Recue la somme de: <b class="payfont"><?php echo $paiment ?></b></div>
                <div class="mb-2 ">Reste: <b class="payfont"><?php echo $rest ?></b></div>
            </div>
        </div>
    </div>
    <?php   } ?>
    <!--Contact-->
    <div class="container-fluid review2 " id="contact">
        <div class="row ">
            <div class="col-12 d-flex justify-content-center p-3 underline  "
                style="font-weight: 700; font-size:30px; margin-bottom:30px;">Contactez-nous</div>
        </div>
    </div>

    <div class="container-fluid contact bShadow bShadow-4 h-auto w-75 mb-5" style=" margin-bottom:100px;">
        <form method="POST">
            <div class="row p-4">
                <div class="col-12 ">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-white border border-black-50" id="inputGroup-sizing-default"><i
                                class="fas fa-user text-success"></i></span>
                        <input type="text" placeholder="Nom" name="nom" value="<?php echo $nom; ?>" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-white border-black-50" id="inputGroup-sizing-default"><i
                                class="fas fa-phone-square-alt text-success"></i></span>
                        <input type="text" placeholder="Téléphone" name="telephone" value="<?php echo $telephone; ?>"
                            class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-white border-black-50" id="inputGroup-sizing-default"><i
                                class="fas fa-at text-success"></i></span>
                        <input type="text" placeholder="Email " name="email" value="<?php echo $email; ?>"
                            class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" name="message" placeholder="Leave a comment here"
                            id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2" class="text-black-50">Message</label>
                    </div>
                </div>
                <button type="submit" name="Envoyer"
                    class="btn btn-white mt-4 text-success border border-success">Envoyer</button>

            </div>
        </form>

    </div>

    <?php

        if (isset($_POST['Envoyer'])) {

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $telephone = $_POST['telephone'];

            $email = $_POST['email'];

            $message = $_POST['message'];

            $query = "INSERT INTO contact (`id_contact`, `nom`, `email`, `telefone`, `message`, `date`) 
                                    VALUES (NULL, '$nom', '$email', '$telephone', '$message', now());";
            $add = dataAccess::inserer($query);

            if ($add) {
                echo " 
                <section ng-show='success_message' class='flash_message success'>
        <p>Message
        </p>
        <svg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'
            x='0px' y='0px' viewBox='0 0 50 50' style='enable-background:new 0 0 50 50;' xml:space='preserve'>
            <circle style='fill:#25AE88;' cx='25' cy='25' r='25' />
            <polyline
                style='fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;'
                points='
        38,15 22,33 12,25 ' />

        </svg>
    </section>
                ";
            }
        } ?>


    <!-- Footer -->
    <footer class="text-center text-lg-start text-dark" style="background-color: white">
        <section class="d-flex justify-content-between p-4 text-white" style="background-color: #40916C">
            <div class="me-5">
                <span>Connectez-vous avec nous sur les réseaux sociaux :
                </span>
            </div>

            <div>
                <a href="https://www.facebook.com/Les-jardins-dAssilah-460335770965149/" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="http://lesjardinsdassilah.com/" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>



            </div>
        </section>

        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Les jardins d'Assilah</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            Un projet de construction de villas et d’appartements sur une colline surplombant la vallée
                            et la mer et ou l’intégration de ces édifices se fait en harmonie avec la topographie du
                            terrain, permettant ainsi à chacun de profiter de la nature et de ce qu’elle offre de
                            meilleur. Le style architectural se veut respectueux de la tradition du pays et
                            particulièrement de la région. ( Arabo-andalous )
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Liens</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="http://lesjardinsdassilah.com/#le-projet" class="text-dark">Le projet</a>
                        </p>
                        <p>
                            <a href="http://lesjardinsdassilah.com/#la-residence" class="text-dark">la residence</a>
                        </p>
                        <p>
                            <a href="http://lesjardinsdassilah.com/#le-programme" class="text-dark">le programme</a>
                        </p>
                        <p>
                            <a href="http://lesjardinsdassilah.com/#assilah" class="text-dark">Assilah</a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">liens</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="index.php" class="text-dark">Acceuill</a>
                        </p>
                        <p>
                            <a href="#payment" class="text-dark">payment</a>
                        </p>
                        <p>
                            <a href="#budget" class="text-dark">Budget</a>
                        </p>
                        <p>
                            <a href="#contact" class="text-dark">Contactez-nous</a>
                        </p>

                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contactez-nous</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i> Residence Les Jardins d'Assilah, Assilah, 90055, Maroc</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@lesjardinsdassilah.com</p>
                        <p><i class="fas fa-phone mr-3"></i> MA : +212 661 04 46 91
                        </p>
                        <p><i class="fas fa-phone mr-3"></i> BE : 0032 472 076 512</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center text-white p-3" style="background-color: #40916C">
            © 2021 Copyright:
            <a class="text-white" href="http://lesjardinsdassilah.com/">

                All Rights Reserved by lesjardinsdassilah.
            </a>
        </div>
    </footer>
</body>

</html>
<?php
} else {

    header("location: index.php");
}
?>