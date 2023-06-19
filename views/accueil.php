<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- library CSS-->
    <link href="../public/css/bootstrap.css">
    <!-- Boostrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Boostrap 4-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <title>Accueil</title>
</head>

    <!-- insertion entête -->
    <?php require 'header.php' ?>

    <body
        style="background: linear-gradient(-45deg, #ffff00, #a7ddf1, #70db70);
        height: 200vh;"
    >

    <!--Présentation du pays -->

    <!-- Titre -->
    <div class="title">
        <h1 class="mt-4 fw-bold text-center">Terre de courage et de ténacité</h1>
    </div>

    <!-- Container -->
    <div class="container mt-4 mb-5">
        <div class="row justify-content-center mt-2">

            <div class="col-lg-5">
                <img src="../public/img/pays_3.png" class="img-fluid w-50 m-5">
            </div>

            <div class="col-md-5">
                <p class="mt-5">Le Vietnam est un pays du sud-est de l’Asie qui s’étend sur toute la longueur de la péninsule
                    indochinoise (le Laos et le Cambodge) et que baigne la mer de Chine sur son flanc oriental.
                    <br><br>
                    Possédant une superficie de totale de 331 699 km² sous forme d’un immense S. Il est bordé par la mer de Chine,
                    le golfe du Tonkin et le golfe de Thaïlande.
                    <br><br>
                    Le Vietnam est constitué de trois grands ensembles : le Vietnam septentrional, central et méridional.
                </p>
            </div>

            <br>

            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4">
                    <ol class="mt-5">
                        <li>Le Nord-ouest (Tây Bắc)</li>
                        <br>
                        <li>Le Nord-est (Đông Bắc)</li>
                        <br>
                        <li>Le Delta du Fleuve Rouge (Đồng bằng sông Hồng)</li>
                        <br>
                        <li>La Côte centrale du Nord (Bắc Trung Bộ)</li>
                        <br>
                        <li>La Côte centrale du sud (Nam Trung Bộ)</li>
                        <br>
                        <li>Les Montagnes Centrales (Tây Nguyên)</li>
                        <br>
                        <li>Le Sud-est (Đông Nam Bộ)</li>
                        <br>
                        <li>Le Delta du Mékong (Đồng bằng sông Cửu Long)</li>
                    </ol>
                </div>

                <div class="col-lg-6">
                    <img src="../public/img/carte_viet_region.png" class="img-fluid w-50 m-2">
                </div>
            </div>
        </div>


    </body>


    <!-- insertion en pied -->
    <?php require 'footer.php' ?>

    <!-- library JS-->
    <!-- Boostrap 5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Boostrap 4-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>

</html>