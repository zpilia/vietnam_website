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
                Banh lot - Khao lod song (4 personnes)
            </h4>
        </div>
    </div>

    <!-- container // Video + photo -->
    <div class="container">
        <div class="row gx-1">
            <div class="col-md-6">
                <img src="../public/img/banh_lot_3.jpg" class="img-fluid rounded-pill ms-5 mt-2" alt="banh_lot"
                     style="width:80%;
                               height:auto;">
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

            <div class="col-lg-3 col-md-6 my-auto">
                <ul class="form-check"
                    style="font-family: 'Georgia', sans-serif;
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
                <h5 class="text-decoration-underline"
                    style="font-family: 'Georgia', sans-serif; color: black;"
                >
                    Pour la marinade :
                </h5>

                <ul class="form-check"
                    style="font-family: 'Georgia', sans-serif;
                           font-size: 110%;
                           color: black;"
                >
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">400g de bœuf (ou poulet, ou</label><label>crevettes)</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1 gousse d'ail</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">3 cuillères à soupe de sauce de</label><label>poisson</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">3 cuillères à soupe de sauce d'huître</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1 branche de citronnelle</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1 grosse échalote ou un demi oignon</label>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="text-decoration-underline"
                    style="font-family: 'Georgia', sans-serif; color: black;"
                >
                    Pour la garniture :
                </h5>

                <ul class="form-check"
                    style="font-family: 'Georgia', sans-serif;
                           font-size: 110%;
                           color: black;"
                >
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">5 à 6 feuilles de Salade</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1 carotte</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">8 à 10 branches de coriandre</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">8 branches de menthe</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1 petit concombre</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1 poignée de cacahuètes</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">Soja (option)</label>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="text-decoration-underline"
                    style="font-family: 'Georgia', sans-serif; color: black;"
                >
                    Pour la sauce :
                </h5>

                <ul class="form-check"
                    style="font-family: 'Georgia', sans-serif;
                           font-size: 110%;
                           color: black;"
                >
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">3 piments frais</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1 gousse d'ail</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">3 cuillères à soupe de sucre</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">6 cuillères à soupe de sauce de</label><label>poisson</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">1/2 citron vert</label>
                    </li>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                        <label class="form-check-label" for="flexCheckDefault">20 cl d'eau</label>
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
                        Préparer la sauce : dans un bol, mettre les piments ciselés, le jus de citron, le sucre, la sauce de poisson, l’eau, l'ail haché.
                        Bien mélanger et réserver.
                    </li>
                    <li class="mb-3">
                        Préparer la marinade : émincer finement le bœuf, le déposer dans un saladier et y ajouter la citronnelle (la partie blanche) et
                        l'échalote émincées, l'ail écrasée, la sauce d'huître et la sauce de poisson. Bien mélanger l'ensemble et laisser mariner au moins
                        30 minutes.
                    </li>
                    <li class="mb-3">
                        Pour les vermicelles de riz, faire bouillir une casserole d'eau, y plonger les vermicelles et les faire cuire pendant 5 minutes
                        à feu moyen. Les retirer, rincer à l'eau froide et réserver.
                    </li>
                    <li class="mb-3">
                        Hacher les cacahuètes grossièrement au couteau, couper le concombre en bâtonnets et la carotte en fines juliennes.
                        Déchirer les feuilles de coriandre, effeuiller la menthe et couper en chiffonnade la salade.
                    </li>
                    <li class="mb-3">
                        Pour la cuisson de la viande, mettre 3 cuillères à soupe d'huile dans une sauteuse à feu vif.
                        Y faire revenir la viande marinée. Le temps de cuisson dépend de votre goût.
                    </li>
                    <li class="mb-3">
                        Etape finale : déposer dans un bol les vermicelles de riz, ajouter la salade, la menthe, la coriandre, le concombre,
                        le bœuf sauté et les juliennes de carottes. Ajouter la sauce et finir par les cacahuètes.
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

