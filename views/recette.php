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

    <!-- 1er container -->
    <div class="container my-auto">
        <br>
        <div class="row justify-content-center my-auto">

            <!-- image -->
            <div class="col my-auto">
                <img src="../public/img/bo_bun_4.webp" alt="bo_bun" class="img-fluid rounded mx-5" style="width:70%; height:auto">
            </div>

            <!-- texte -->
            <div class="col my-auto">
                <h4 class="mb-3" style="font-family: 'Georgia', serif;
                    font-weight: bold;
                    text-align: left;
                    color: black"
                >
                    Bò bún (4 personnes)
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
