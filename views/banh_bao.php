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
        <title>Recette(s) - Bánh Bao</title>
    </head>

    <!-- insertion entête -->
    <?php require 'header.php' ?>

    <body
        style="
                background: linear-gradient(45deg, #ffff00, #a7ddf1, #70db70);"
    >

    <!-- Titre du contenu -->
    <div class="container mt-4 mb-5">
        <div class="title">
            <h4 style="font-family: 'Georgia', serif;
                        font-weight: bold;
                        text-align: center;
                        color: black">
                Bánh Bao (8 brioches)
            </h4>
        </div>
    </div>

    <!-- container // Video + photo -->
    <div class="container">
        <div class="row gx-1">
            <div class="col-md-6">
                <img src="../public/img/banh_bao_2.jpg" class="img-fluid rounded-pill ms-5 mt-2" alt="banh_bao"
                     style="width:80%;
                               height:auto;">
            </div>

            <div class="col-md-6">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/gNdDxvAk0O4" title="YouTube video player banh_bao"  class="rounded" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin container // Video + photo -->

    <!-- container ligne séparation -->
    <div class="container mt-4 mb-4">
        <hr>
    </div>

    <!-- Titre 2 du contenu -->
    <div class="container">
        <div class="title">
            <h4 style="font-family: 'Georgia', serif;
                        font-weight: bold;
                        text-align: center;
                        color: black">
                Ingredients
            </h4>
        </div>
    </div>

    <!-- container // liste ingredient -->
    <div class="container">
        <div class="row justify-content-center my-auto ">

            <div class="col-lg-3 col-md-6 my-auto">
                <h5 style="font-family: 'Georgia', serif; color: black;" class="text-decoration-underline">
                    Pour la pâte :
                </h5>
                <ul class="form-check"
                    style="font-family: 'Georgia', serif;
                           font-size: 110%;
                           color: black;"
                >
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">350g de vermicelle de riz</label>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">

            </div>

            <div class="col-lg-3 col-md-6">

            </div>

            <div class="col-lg-3 col-md-6">

            </div>

        </div>
    </div>
    <!-- Fin container // liste ingredient -->








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

