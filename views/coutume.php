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
    <title>Culture - Coutume(s)</title>
</head>

    <!-- insertion entête -->
    <?php require 'header.php' ?>

    <body
        style="
        background: linear-gradient(45deg, #ffff00, #a7ddf1, #70db70);"
    >

    <div class="title"
         style="font-family: 'Georgia', 'Times New Roman', serif;
                font-size: 40px;
                color: #e60000"
    >
        <h1 class="mt-5 fw-bold text-center">Les différents coutumes</h1>
    </div>

    <br>

    <!-- 1er container ==> 1er publication -->
    <div class="container my-auto">
        <br>
        <div class="row justify-content-center my-auto">

            <!-- image -->
            <div class="col my-auto">
                <img src="../public/img/tet.jpg" alt="tet" class="img-fluid rounded mx-5" style="width:70%; height:auto">
            </div>

            <!-- texte -->
            <div class="col my-auto">
                <h4 class="mb-3" style="font-family: 'Georgia', serif;
                    font-weight: bold;
                    text-align: left;
                    color: #ff1a1a"
                >
                    Nouvel An - Têt Nguyên Dán
                </h4>
                <p style="font-family: 'Georgia', serif;
                          text-align: justify;
                          font-size: 110%;
                          color: black;"
                >
                    Le « Tet Nguyen Dan » (le Nouvel An Vietnamien) est célébré au même moment que le Nouvel An chinois, entre mi-janvier et mi-février, selon les années.
                    Suivant les moyens de la famille, les festivités peuvent durer de 3 à 7 jours.
                    <br><br>
                    C'est l'occasion pour les vietnamiens de se retrouver autour de copieux repas et de mets festifs.
                    De petites enveloppes rouges garnies de quelques billets sont également offertes aux plus jeunes et aux aînés, comme autant de promesses de la fortune à venir au cours de l'année.
                </p>
            </div>
        </div>
    </div>

    <br>

    <!-- 2er container ==> 2er publication -->
    <div class="container my-auto">
        <br>
        <div class="row justify-content-center my-auto">

            <!-- texte -->
            <div class="col my-auto">
                <h4 class="mb-3" style="font-family: 'Georgia', serif;
                    font-weight: bold;
                    text-align: left;
                    color: #ff1a1a"
                >
                    Fête de la mi-automne - Tet Trung Thu
                </h4>
                <p style="font-family: 'Georgia', serif;
                          text-align: justify;
                          font-size: 110%;
                          color: black;"
                >
                    A l'origine, le Têt Trung Thu était dédié au culte à la lune, dont on espérait une saison florissante.
                    Aujourd'hui, la fête de la mi-automne est une fête haute en couleurs qui célèbre l'union familiale
                    et met à l'honneur les enfants, pour qui elle représente la fête la plus importante de l'année.
                    <br><br>
                    Célébrée le 15ème jour du 8ème mois lunaire, elle est avant tout un prétexte pour faire la fête en famille
                    ou entre amis autour de petits morceaux de « gâteau de lune », de chants et de parades illuminées de belles
                    lanternes en forme d’étoile, d’animal ou de lune.
                </p>
            </div>

            <!-- image -->
            <div class="col my-auto">
                <img src="../public/img/fete_mi_automne.jpg" alt="fete_mi_automne" class="img-fluid rounded ms-5 mt-2" style="width:70%; height:auto">
            </div>
        </div>
    </div>

    <br>

    <!-- 3eme container ==> 3er publication -->
    <div class="container my-auto">
        <br>
        <div class="row justify-content-center my-auto">

            <!-- image -->
            <div class="col my-auto">
                <img src="../public/img/m" alt="mort" class="img-fluid rounded mx-5" style="width:65%; height:auto">
            </div>

            <!-- texte -->
            <div class="col my-auto">
                <h4 class="mb-3" style="font-family: 'Georgia', serif;
                    font-weight: bold;
                    text-align: left;
                    color: #ff1a1a"
                >
                    Têt Thanh Minh - l'hommage aux morts
                </h4>
                <p class="mt-5" style="font-family: 'Georgia', serif;
                          text-align: justify;
                          font-size: 110%;
                          color: black;"
                >
                    Têt Thanh Minh est célébré au cours des premiers jours du 3ème mois lunaire. A cette occasion, les vietnamiens se rendent sur les tombes de leurs ancêtres.
                    Ils les nettoient et organisent une cérémonie pour leur rendre hommage.
                </p>
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
