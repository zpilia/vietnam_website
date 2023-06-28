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
        <title>Recette(s) - Bò bún</title>
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
                Bò bún (4 personnes)
            </h2>
        </div>
    </div>

    <!-- container // Video + photo -->
    <div class="container">
        <div class="row gx-1">
            <div class="col-md-6">
                <img src="../public/img/bo_bun_5.jpg" class="img-fluid rounded-pill ms-5 mt-2" alt="bo_bun"
                     style="width:80%;
                           height:auto;">
            </div>

            <div class="col-md-6">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/ievMUS_tzjI" title="YouTube video player bo_bun" class="rounded" allowfullscreen></iframe>
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
                <p style="font-family: 'Georgia', sans-serif;
                          text-align: justify;
                          font-size: 110%;
                          color: black;"
                >
                    Avant la préparation réhydrater les champignons noirs.
                </p>
                <ol style="font-family: 'Georgia', sans-serif;
                           text-align: justify;
                           font-size: 110%;
                           color: black;">
                    <li class="mb-3">
                        Préparer la pâte : dans un saladier, mélanger la farine de blé, la farine de riz blanc, le sucre,
                        la levure boulangère et la levure chimique, ajouter progressivement l'eau puis pétrir une minute,
                        ajouter ensuite l'huile et pétrir de nouveau pendant 4 à 5 minutes, former une boule, couvrir et laisser
                        reposer entre 45 minutes et une heure.
                    </li>
                    <li class="mb-3">
                        Préparer la farce : mettre le porc haché dans un saladier, ajouter les champignons noirs et la carotte coupés en fines juliennes
                        et la cébette détaillée en rondelles. Découper la saucisse chinoise en 16 tranches et les œufs en 4, réserver ces 2 derniers.
                        <br><br>
                        Assaisonner la farce avec le sucre, la sauce d'huître, la sauce de poisson et le poivre.
                        Bien mélanger l'ensemble jusqu'à obtention d'une texture homogène (3 à 4 minutes environ).
                        Terminer en formant 8 boulettes avec cette farce et réserver au frais.
                    </li>
                    <li class="mb-3">
                        Une fois la pâte levée, fleurer la surface de travail, pétrir légèrement la pâte, former un boudin afin de la découper en 8 parts égales.
                        Reformer des boules avec ces 8 parts puis les étaler afin d'obtenir un disque d'environ 10 à 12 cm de diamètre.
                    </li>
                    <li class="mb-3">
                        Pour la confection des baos : déposer une boule de farce au centre d'un disque de pâte, y accoler un morceau d’œuf et
                        2 tranches de saucisses chinoises puis suivre la vidéo pour former votre brioche.
                    </li>
                    <li class="mb-3">
                        Déposer chaque brioche sur un petit morceau de papier sulfurisé puis les déposer dans un panier vapeur, les couvrir et
                        laisser reposer environ 15 minutes si vous les voulez plus gonflés puis les faire cuire pendant 15 minutes.
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
