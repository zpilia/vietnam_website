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
        <title>Recette(s) - Salade de papaye</title>
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
            <h2 style="font-family: 'Georgia', serif;
                        font-weight: bold;
                        text-align: center;
                        color: #e60000"
            >
                Salade de papaye (2 personnes)
            </h2>
        </div>
    </div>

    <!-- container // Video + photo -->
    <div class="container">
        <div class="row gx-1">
            <div class="col-md-6">
                <img src="../public/img/salade_papaye_5.jpg" class="img-fluid rounded-pill ms-5 mt-2" alt="salade_papaye"
                     style="width:80%;
                               height:auto;">
            </div>

            <div class="col-md-6">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/G0eQ19XBzAM" title="YouTube video player salade_papaye" class="rounded" allowfullscreen></iframe>
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
    <div class="container mb-4">
        <div class="title">
            <h4 style="font-family: 'Georgia', serif;
                        font-weight: bold;
                        text-align: center;
                        color: black">
                Ingrédients
            </h4>
        </div>
    </div>

    <!-- container // liste ingredient -->
    <div class="container">
        <div class="row gx-1 justify-content-center my-auto ">

            <div class="col-lg-4 col-md-12 my-auto">
                <ul class="form-check"
                    style="font-family: 'Georgia', sans-serif;
                           font-size: 110%;
                           color: black;"
                >
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1 papaye verte (recette avec 250 g de juliennes)</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1 haricot kilomètre</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1 gousse d'ail</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">2 piments (en fonction de l'intensité recherchée)</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1 cuillère à café de tamarin</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1 cuillère à soupe de sucre</label>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 my-auto">
                <ul class="form-check"
                    style="font-family: 'Georgia', sans-serif;
                           font-size: 110%;
                           color: black;"
                >
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">5 tomates cerises</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1/4 de citron vert</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1 cuillère à café de kapi (pâte de crevettes)</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1 cuillère à soupe de cacahuètes</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1 cuillère à soupe de crevettes séchées</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">4 cuillères à soupe de sauce poisson</label>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6">
                <h5 class="text-decoration-underline"
                    style="font-family: 'Georgia', sans-serif; color: black;"
                >
                    Pour accompagner :
                </h5>

                <ul class="form-check"
                    style="font-family: 'Georgia', sans-serif;
                           font-size: 110%;
                           color: black;"
                >
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">Vermicelles de riz (Bun)</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">Salade verte</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">Riz gluant</label>
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

    <!-- Titre 2 du contenu -->
    <div class="container mb-4">
        <div class="title">
            <h4 style="font-family: 'Georgia', serif;
                        font-weight: bold;
                        text-align: center;
                        color: black">
                Déroulement
            </h4>
        </div>
    </div>

    <!-- container // deroulement -->
    <div class="container">
        <div class="row gx-1 justify-content-center my-auto ">

            <div class="col-12 my-auto">
                <ol style="font-family: 'Georgia', sans-serif;
                           text-align: justify;
                           font-size: 110%;
                           color: black;">
                    <li class="mb-3">
                        Couper le haricot en tronçons de 5 cm environ, les tomates cerises en 4, éplucher la gousse d'ail, retirer le pédoncule du
                        piment et éplucher la papaye verte.
                    </li>
                    <li class="mb-3">
                        Découper la papaye verte en fines juliennes en suivant une des méthodes indiquée dans la vidéo.
                    </li>
                    <li class="mb-3">
                        Dans un mortier, mettre le ou les piments, l'ail, la moitié du sucre, écraser l'ail et le piment avec le pilon,
                        ajouter les cacahuètes, les crevettes séchées, les tronçons de haricot kilomètre et écraser de nouveau grossièrement.
                        <br><br>
                        Ajouter ensuite la papaye, les tomates, le reste de sucre, la sauce de poisson, la pâte de crevettes, le tamarin et
                        le jus de citron. Bien incorporer l'ensemble à l'aide du pilon et d'une cuillère en écrasant légèrement le tout.
                        <br><br>
                        Réajuster l’assaisonnement si nécessaire.
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

