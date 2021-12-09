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
    <link rel="stylesheet" href="includes/box-shadows.min.css" />


    <title>Document</title>
</head>

<body class="p-0 m-0">
    <div class="container-fluid  ">
        <div class="row ">
            <div class="col-md-4 col-sm-12  ">
                <div style="height:100vh;" class="d-flex justify-content-center align-items-center">
                    <form method="POST" action="./includes/login.php">
                        <div class="d-flex justify-content-center"> <img src="img/logo.png" alt=""
                                class="h-auto img-fluid mb-3" width="350px"></div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">E-mail address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un
                                d'autre.
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" name="Password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" name="btnlogin" class="btn w-100" id="btnlogin">Connecter</button>
                    </form>
                </div>
            </div>


            <div class="col-md-8    background">
                <div style=" height: 10vh; font-weight:700;font-size:50px; " class=" text-white p-5 txto">Bienvenue <br>
                    sur votre personnel compte.</div>
                <div class=" d-flex justify-content-center align-items-end" style="height: 90vh;"><img src="img/bg.png"
                        alt="" class="mb-5 image-fluid imgside" height="auto" width="600px"></div>
            </div>
        </div>
    </div>

</body>

</html>