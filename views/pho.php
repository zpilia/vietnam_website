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
        <title>Recette(s) - Phở</title>
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
                    Phở (4 personnes)
                </h2>
            </div>
        </div>
        <!-- Fin Titre du contenu -->

        <!-- container // Video + photo -->
        <div class="container">
            <div class="row gx-1">
                <div class="col-md-6">
                    <img src="../public/img/pho_4.jpg" class="img-fluid rounded-pill ms-5 mt-2" alt="pho">
                </div>

                <div class="col-md-6">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/FuuBxOJpHZk" title="YouTube video player php" class="rounded" allowfullscreen></iframe>
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

                <div class="col-lg-3 col-md-6 my-auto">
                    <ul class="form-check">
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">
                                400 g de pâtes de riz 5 mm </label>(réhydrater minimun 2h avant)<label>
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="text-decoration-underline">
                        Pour le bouillon :
                    </h5>

                    <ul class="form-check">
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">500 g de jarret de bœuf avec os</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">4 anis étoilées</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">
                                1/2 cuillère à soupe de grains de </label><label>poivre noir
                            </label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">1 petit bâton de cannelle</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">3 clous de girofle</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">
                                1 cuillère à soupe de graines de </label><label>coriandre
                            </label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">1 oignon</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">1 carotte</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">1 morceau de gingembre de 7 cm</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">
                                1 cuillère à soupe de graines de </label><label>fenouil
                            </label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">2 cardamomes noires</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">3 cuillères à soupe sauce poisson</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">Sel</label>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="text-decoration-underline">
                        Pour la garniture :
                    </h5>

                    <ul class="form-check">
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">
                                200 g de bœuf (pièce à fondue ou </label><label>rumsteck)
                            </label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">
                                16 boulettes de bœuf (rayon surgelé </label><label>des épiceries asiatiques)
                            </label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">1/2 oignon</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">1 branche de cébette</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">Germes de soja</label>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="text-decoration-underline">
                        Accompagnements :
                    </h5>

                    <ul class="form-check">
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">Sauce hoisin</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">Sriracha</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">1/2 citron</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">Menthe</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">Coriandre</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault">2 piments</label>
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
        <!-- Titre 3 du contenu -->

        <!-- container // deroulement -->
        <div class="container">
            <div class="row gx-1 justify-content-center my-auto ">

                <div class="col-12 my-auto">
                    <ol>
                        <li class="mb-3">
                            Pour le bouillon : éplucher et couper en 2 l'oignon, éplucher la carotte et retirer les extrémités, couper le gingembre en
                            2 dans sa longueur.
                            Torréfier les épices dans une poêle à feu doux, les transférer ensuite dans un sachet à thé puis bien le
                            fermer à l'aide d'une ficelle. Mettre les demis oignons à griller côté coupé dans une poêle, réserver.
                            Pour le gingembre, le faire griller des 2 côtés directement sur le feu.
                            Blanchir le jarret de bœuf dans l'eau bouillante pendant 5 minutes. Puis bien le rincer.
                            <br><br>
                            Placer le jarret dans une cocote minute ainsi que l'oignon grillé, le gingembre, la carotte, le sachet d'épices,
                            2,5 L d'eau et une cuillère à café de sel. Fermer et faire cuire pendant 45 minutes.
                        </li>
                        <li class="mb-3">
                            Couper la cébette en rondelles, couper finement l'oignon, détailler 4 petits quartiers de citron, couper en fines rondelles
                            les piments, émincer finement le bœuf. Disposer sur une assiette les germes de soja, la menthe, la coriandre, les piments et
                            le citron qui serviront d'accompagnement à la soupe.
                        </li>
                        <li class="mb-3">
                            Une fois le temps de cuisson terminé, retirer le jarret et débarrasser des éléments aromatiques.
                            Ajouter la sauce poisson et les boulettes de bœuf et prolonger la cuisson de 5 minutes. Réajuster l'assaisonnement si nécessaire.
                        </li>
                        <li class="mb-3">
                            Découper en fines tranches le jarret de bœuf. Mettre une casserole d'eau à bouillir et y faire ramollir les pâtes de riz 30 secondes.
                        </li>
                        <li class="mb-3">
                            Pour la préparation finale : mettre des pâtes de riz dans un bol, ajouter des germes de soja sur un côté, des tranches de bœuf crues
                            sur les pâtes ainsi que des tranches de jarret, ajouter des boulettes de bœuf et du bouillon. Terminer par l'oignon finement émincé
                            et par des rondelles de cébette.
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

