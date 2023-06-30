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
        <title>Recette(s) - Banh lot</title>
    </head>

    <!-- insertion entête -->
    <?php require 'header.php' ?>

    <body>

        <style>

        body {
            background: linear-gradient(45deg, #ffff00, #a7ddf1, #70db70);
        }

        h2 {
            font-family: 'Georgia', serif;
            font-weight: bold;
            text-align: center;
            color: #e60000;
        }

        h4 {
            font-family: 'Georgia', serif;
            font-weight: bold;
            text-align: center;
            color: black
        }

        h5 {
            font-family: 'Georgia', sans-serif;
            color: black;
        }

        ul, ol {
            font-family: 'Georgia', sans-serif;
            font-size: 110%;
            color: black;
        }

        p {
            font-family: 'Georgia', sans-serif;
            text-align: justify;
            font-size: 110%;
            color: black;
        }

        img {
            width:80%;
            height:auto;
        }

    </style>

        <!-- Titre du contenu -->
        <div class="container mt-4 mb-5">
            <div class="title">
                <h2>
                    Banh lot - Khao lod song (4 personnes)
                </h2>
            </div>
        </div>

        <!-- container // Video + photo -->
        <div class="container">
            <div class="row gx-1">
                <div class="col-md-6">
                    <img src="../public/img/banh_lot_3.jpg" class="img-fluid rounded-pill ms-5 mt-2" alt="banh_lot">
                </div>

                <div class="col-md-6">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/PP3YpBhNSLw" title="YouTube video player banh_lot" class="rounded" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin container // Video + photo -->

        <!-- container ligne séparation -->
        <div class="container mt-4 mb-4">
            <hr>
        </div>
        <!-- Fin container ligne séparation -->

        <!-- Titre 2 du contenu -->
        <div class="container mb-4">
            <div class="title">
                <h4>
                    Ingrédients
                </h4>
            </div>
        </div>
        <!-- Fin Titre 2 du contenu -->

        <!-- container // liste ingredient -->
        <div class="container">
            <div class="row gx-1 justify-content-center my-auto ">

                <div class="col-lg-4 col-md-12 my-auto">
                    <ul class="form-check">
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">Une boite de lait de coco de 400 ml</label>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h5 class="text-decoration-underline">
                        Pour le sirop de caramel :
                    </h5>

                    <ul class="form-check">
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">160 g de sucre</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">20 cl d'eau</label>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h5 class="text-decoration-underline">
                        Pour les banh lot :
                    </h5>

                    <ul class="form-check">
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">25 g de farine de riz blanc</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">100 g d'amidon de soja</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">40 g de sucre</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">1/2 cuillère à café d'extrait de pandan</label>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- Fin container // liste ingredient -->

        <!-- container ligne séparation -->
        <div class="container mt-4 mb-4">
            <hr>
        </div>
        <!-- Fin container ligne séparation -->

        <!-- Titre 3 du contenu -->
        <div class="container mb-4">
            <div class="title">
                <h4>
                    Déroulement
                </h4>
            </div>
        </div>
        <!-- Fin Titre 3 du contenu -->

        <!-- container // deroulement -->
        <div class="container">
            <div class="row gx-1 justify-content-center my-auto ">

                <div class="col-12 my-auto">
                    <ol>
                        <li class="mb-3">
                            Faire le sirop de caramel : verser le sucre dans une casserole à feu moyen, faire caraméliser et lorsqu'il a pris
                            une couleur brune, couper le feu, ajouter l'eau (attention aux projections !!), remettre le feu, faire bouillir
                            5 minutes puis réserver.
                        </li>
                        <li class="mb-3">
                            Préparer un grand saladier d'eau froide avec des glaçons.
                        </li>
                        <li class="mb-3">
                            Pour les vermicelles de riz, faire bouillir une casserole d'eau, y plonger les vermicelles et les faire cuire pendant 5 minutes
                            à feu moyen. Les retirer, rincer à l'eau froide et réserver.
                        </li>
                        <li class="mb-3">
                            Dans une grande casserole, verser l'amidon de soja, la farine de riz blanc, le sucre, 1L d'eau et l'extrait de pandan,
                            bien mélanger, mettre sur feu moyen et remuer continuellement jusqu'à ce que cela épaississe puis réduire le feu et continuer
                            la cuisson encore 5 minutes tout en remuant, couper ensuite le feu.
                        </li>
                        <li class="mb-3">
                            Transférer une petite partie du mélange dans une écumoire placée au-dessus du saladier d'eau et à l'aide du marise,
                            presser sur la pâte afin de créer des filets qui vont se solidifier au contact de l'eau froide.
                        </li>
                        <li class="mb-3">
                            Pour le dressage : mettre les banh lot obtenus dans un verre, ajouter 4 cuillères à soupe de sirop de caramel puis
                            4 cuillères à soupe de lait de coco.
                        </li>
                    </ol>
                </div>

                <!-- bouton retour -->
                <div class="container text-center mt-4">
                    <a type="button" class="btn btn-link text-dark" href="recette.php">Retour</a>
                </div>
            </div>
        </div>
        <!-- Fin container // deroulement -->

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

