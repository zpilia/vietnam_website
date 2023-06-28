<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- library CSS-->
        <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css">
        <!-- Boostrap 5-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Boostrap 4-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <title>Cuisine - Recette(s)</title>
    </head>

    <!-- insertion entête -->
    <?php require 'header.php' ?>

    <body
        style="
                background: linear-gradient(45deg, #ffff00, #a7ddf1, #70db70);"
    >


    <!-- Titre -->
    <div class="title"
         style="font-family: 'Georgia', 'Times New Roman', serif;
                                font-size: 40px;
                                color: #e60000"
    >
        <h1 class="mt-4 fw-bold text-center">Cuisinons ensemble !</h1>
    </div>

    <div class="container mt-5">
        <div class="row ">

            <!-- 1er post -->
            <div class="col-lg-4 col-md-12">
                <!-- image -->
                <div class="card text-center ">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="../public/img/bo_bun_4.webp" class="img-fluid" alt="bo_bun"/>
                    </div>
                    <!-- titre + bouton direction recette -->
                    <div class="card-body">
                        <h5 class="card-title">Bò bún</h5>
                        <a href="bo_bun.php" type="button" class="btn btn-outline-primary btn-rounded btn-block">Recette</a>
                    </div>
                </div>
            </div>
            <!-- Fin 1er post -->

            <!-- 2ème post -->
            <div class="col-lg-4 col-md-12">
                <!-- image -->
                <div class="card text-center ">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="../public/img/banh_bao_3.jpg" class="img-fluid" alt="banh_bao"/>
                    </div>
                    <!-- titre + bouton direction recette -->
                    <div class="card-body">
                        <h5 class="card-title">Bánh Bao</h5>
                        <a href="bo_bun.php" type="button" class="btn btn-outline-primary btn-rounded btn-block">Recette</a>
                    </div>
                </div>
            </div>
            <!-- Fin 2ème post -->

            <!-- 3ème post -->
            <div class="col-lg-4 col-md-12">
                <!-- image -->
                <div class="card text-center ">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="../public/img/pho_3.jpg" class="img-fluid" alt="pho"/>
                    </div>
                    <!-- titre + bouton direction recette -->
                    <div class="card-body">
                        <h5 class="card-title">Phở</h5>
                        <a href="bo_bun.php" type="button" class="btn btn-outline-primary btn-rounded btn-block">Recette</a>
                    </div>
                </div>
            </div>
            <!-- Fin 3ème post -->
        </div>
    </div>

    <div class="container mt-4">
        <div class="row ">

            <!-- 1er post -->
            <div class="col-lg-4 col-md-12">
                <!-- image -->
                <div class="card text-center ">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="../public/img/bo_bun_3.2.jpeg" class="img-fluid" alt="bo_bun"/>
                    </div>
                    <!-- titre + bouton direction recette -->
                    <div class="card-body">
                        <h5 class="card-title">Bò bún</h5>
                        <a href="bo_bun.php" type="button" class="btn btn-outline-primary btn-rounded btn-block">Recette</a>
                    </div>
                </div>
            </div>
            <!-- Fin 1er post -->

            <!-- 2ème post -->
            <div class="col-lg-4 col-md-12">
                <!-- image -->
                <div class="card text-center ">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="../public/img/banh_bao_3.jpg" class="img-fluid" alt="banh_bao"/>
                    </div>
                    <!-- titre + bouton direction recette -->
                    <div class="card-body">
                        <h5 class="card-title">Bánh Bao</h5>
                        <a href="bo_bun.php" type="button" class="btn btn-outline-primary btn-rounded btn-block">Recette</a>
                    </div>
                </div>
            </div>
            <!-- Fin 2ème post -->

            <!-- 3ème post -->
            <div class="col-lg-4 col-md-12">
                <!-- image -->
                <div class="card text-center ">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="../public/img/pho_3.jpg" class="img-fluid" alt="pho"/>
                    </div>
                    <!-- titre + bouton direction recette -->
                    <div class="card-body">
                        <h5 class="card-title">Phở</h5>
                        <a href="bo_bun.php" type="button" class="btn btn-outline-primary btn-rounded btn-block">Recette</a>
                    </div>
                </div>
            </div>
            <!-- Fin 3ème post -->
        </div>
    </div>



    </body>


    <!-- insertion en pied -->
    <?php require 'footer.php' ?>

    <!-- library JS-->
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <!-- Boostrap 5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <!-- Boostrap 4-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</html>

