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
        style="
            background: linear-gradient(45deg, #ffff00, #a7ddf1, #70db70);"
    >

    <!-- Titre -->
    <div class="title"
         style="font-family: 'Georgia', 'Times New Roman', serif;
                    font-size: 40px;
                    color: #e60000"
    >
        <h1 class="mt-5 fw-bold text-center">Les religions pratiquées</h1>
    </div>


    <!-- 1er container -->
    <div class="container">
        <!-- 1er post -->
        <div class="row gx-5 wow fadeIn mt-5">
            <!-- image -->
            <div class="col-lg-6 my-auto">
                <div class="view overlay">
                    <img src="../public/img/culte_ancetre_3.jpg.png" class="img-fluid" alt="culte_ancetre">
                    <div class="mask">
                    </div>
                </div>
            </div>

            <!-- information -->
            <div class="col-lg-6 my-auto">
                <h2 class="h2-responsive text-dark">Culte des ancêtres</h2>
                <hr>
                <p style="font-family: 'Georgia', serif;
                              text-align: justify;
                              font-size: 100%;
                              color: black;">
                    Le culte des ancêtres est le trait le plus saillant de la vie spirituelle vietnamienne.
                    Si un homme meurt sans descendance, si l’encens ne brûle plus sur l’autel, les âmes des disparus sont condamnées à une errance éternelle, faute d’être honorées aux dates anniversaires.
                    <br><br>
                    Dans chaque maison vietnamienne, l’autel des ancêtres occupe une place importante, il est le cœur du foyer.
                    Lorsqu’un Vietnamien décède, les membres de sa famille se ceignent la tête d’un bandeau blanc, couleur du deuil dans ce pays.
                </p>
            </div>
        </div>
        <!-- Fin 1er post-->
    </div>
    <!-- Fin 1er container -->

    <!-- 2ème container -->
        <div class="container">
            <!-- 2ème post -->
            <div class="row gx-5 wow fadeIn mt-5">
                <!-- information -->
                <div class="col-lg-6 my-auto">
                    <h2 class="h2-responsive text-dark">Bouddhisme</h2>
                    <hr>
                    <p style="font-family: 'Georgia', serif;
                              text-align: justify;
                              font-size: 100%;
                              color: black;">
                        Le bouddhisme est largement défini non pas comme une religion mais plutôt comme une philosophie orientale, fondée en Inde par Siddhârta Gautama
                        (vers 560-483 av. J.-C.), prince de la tribu des Sakya, connu sous le nom de Bouddha "l'Illuminé".
                        <br><br>
                        Le but de cette philosophie est de sortir du cycle des réincarnations et accéder au nirvana (affranchissement éternel de la succession d'épreuves qu'est la vie terrestre) ...
                    </p>
                    <br>
                </div>
                <!-- image -->
                <div class="col-lg-5 my-auto">
                    <div class="view overlay">
                        <img src="../public/img/bouddhisme_2.jpg" class="img-fluid mx-5" alt="bouddhisme">
                        <div class="mask">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin 2ème post-->
        </div>
    <!-- Fin 2ème container -->

    <!-- 3ème container -->
    <div class="container">
        <!-- 3ème post -->
        <div class="row gx-5 wow fadeIn mt-5">
            <!-- image -->
            <div class="col-lg-6 my-auto">
                <div class="view overlay">
                    <img src="../public/img/confucianisme.jpg" class="img-fluid" alt="confucianisme">
                    <div class="mask">
                    </div>
                </div>
            </div>

            <!-- information -->
            <div class="col-lg-6 my-auto">
                <h2 class="h2-responsive text-dark">Confucianisme</h2>
                <hr>
                <p style="font-family: 'Georgia', serif;
                              text-align: justify;
                              font-size: 100%;
                              color: black;">
                    Difficile de parler de religion transcendante avec le confucianisme qui ne se réfère à aucun dieu mais instaure une philosophie morale basée sur le respect de la
                    hiérarchie familiale et sociale, la bonté naturelle de l’homme et sa capacité à se perfectionner.
                    <br><br>
                    Inventé par Confucius (551-479 av. J.-C.), le confucianisme ne se préoccupe pas des origines du monde, ni des fins dernières de l'homme, mais il édicte un code moral basé sur 5 vertus :
                    l'humanisme, l'équité, l'urbanité, l'intelligence et l'honnêteté.
                </p>
            </div>
        </div>
        <!-- Fin 1er post-->
    </div>
    <!-- Fin 3ème container -->

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

