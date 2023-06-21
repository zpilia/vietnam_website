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
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <!-- Boostrap 4-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet"/>
    <!-- Font-awesome -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <title>Culture - Religion(s)</title>
</head>

    <!-- insertion entête -->
    <?php require 'header.php' ?>

    <body style="
        background: linear-gradient(45deg, #ffff00, #a7ddf1, #70db70);"
    >

    <!-- Titre -->
    <div class="title"
         style="font-family: 'Georgia', 'Times New Roman', serif;
                font-size: 40px;
                color: #e60000"
    >
        <h1 class="mt-5 fw-bold text-center">Les différentes spécialités vietnamiennes</h1>
    </div>

    <br>

    <!-- section ==> carousel avec chaque plat + image  -->
    <section class="pt-5 pb-5">
        <div class="container">

            <!-- bouton de contrôle -->
            <div class="row">
                <div class="col"></div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#myCarousel" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#myCarousel" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>

                <!-- carousel -->
                <div class="col-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            <!-- 1er page de carousel -->
                            <div class="carousel-item active">
                                <div class="row">

                                    <!-- 1er post -->
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <!-- Image -->
                                            <img class="img-fluid" alt="pho" src="../public/img/pho_4.jpg">
                                            <div class="card-body">
                                                <!-- Texte -->
                                                <h4 class="card-title text-center">Phở</h4>
                                                <hr>
                                                <p class="card-text text-justify">
                                                    Cette soupe à base de bouillon de viande et de nouilles de riz est aromatisée avec plusieurs épices et accompagnée de différents ingrédients.
                                                    Tu peux avoir des feuilles de basilic thaï, du piment, du citron vert ou encore de la coriandre.
                                                    <br><br>
                                                    Il se déguste de partout, du matin au soir. Tu en trouveras à tous les coins de rue !
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin 1er post -->

                                    <!-- 2ème post -->
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <!-- Image -->
                                            <img class="img-fluid" alt="bon_bun" src="../public/img/bo_bun.jpg">
                                            <div class="card-body">
                                                <!-- Texte -->
                                                <h4 class="card-title text-center">Bò bún</h4>
                                                <hr>
                                                <p class="card-text text-justify">
                                                    Ce plat se compose généralement de vermicelles de riz, accompagné de crudités (carotte, concombre, etc.) et de lamelles de bœuf.
                                                    <br><br>
                                                    Il se mange avec une sauce Nuoc Nam. On peut avoir des cacahuètes concassées ou des oignons frits par-dessus.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin 2ème post -->

                                    <!-- 3ème post -->
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <!-- Image -->
                                            <img class="img-fluid" alt="banh_bao" src="../public/img/banh_bao_2.jpg">
                                            <div class="card-body">
                                                <!-- Texte -->
                                                <h4 class="card-title text-center">Bánh Bao</h4>
                                                <hr>
                                                <p class="card-text text-justify">
                                                    Il s’agit d’une brioche farcie de viande, de légumes, d’œufs cuite à la vapeur dans des paniers en
                                                    bambou.
                                                    <br><br>
                                                    Elle existe également en version sucrée garnie de confiture de coco.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin 3ème post -->
                                </div>
                            </div>
                            <!-- Fin 1er page de carousel -->

                            <!-- 2ème page de carousel -->
                            <div class="carousel-item">
                                <div class="row">

                                    <!-- 1er post -->
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <!-- Image -->
                                            <img class="img-fluid" alt="nem" src="../public/img/nem_2.jpg">
                                            <div class="card-body">
                                                <!-- Texte -->
                                                <h4 class="card-title text-center">Nem</h4>
                                                <hr>
                                                <p class="card-text text-justify">
                                                    Il existe plusieurs types de nem, au porc, au poulet ou bien, avec des crustacés.
                                                    <br><br>
                                                    Avec tes nems, il y aura sans doute des feuilles de salade verte dans lesquelles tu peux enrouler le nem,
                                                    mais également, une sauce épicée !
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin 1er post -->

                                    <!-- 2ème post -->
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <!-- Image -->
                                            <img class="img-fluid" alt="banh_mi" src="../public/img/banh_mi_2.4.png">
                                            <div class="card-body">
                                                <!-- Texte -->
                                                <h4 class="card-title text-center">Bánh mi</h4>
                                                <hr>
                                                <p class="card-text text-justify">
                                                    Ce sandwich est composé de tranches de poulet ou de porc grillés ou de rousong (viande effilochée),
                                                    de crudités aigres-douces avec concombres et daikons (radis blanc) et toujours, de la coriandre et du
                                                    piment vert.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin 2ème post -->

                                    <!-- 3ème post -->
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <!-- Image -->
                                            <img class="img-fluid" alt="banh_xeo" src="../public/img/banh_xeo_2.jpg">
                                            <div class="card-body">
                                                <!-- Texte -->
                                                <h4 class="card-title text-center">Bánh xèo</h4>
                                                <hr>
                                                <p class="card-text text-justify">
                                                    Le bánh xèo est une crêpe croustillante farcie de viande, de crevettes et de légumes.
                                                    On la reconnaît par sa couleur jaune.
                                                    <br><br>
                                                    La pâte est composée de farine de riz, de lait de coco et de curcuma.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin 3ème post -->
                                </div>
                            </div>
                            <!-- Fin 2ème page de carousel -->

                            <!-- 3ème page de carousel -->
                            <div class="carousel-item">
                                <div class="row">

                                    <!-- 1er post -->
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <!-- Image -->
                                            <img class="img-fluid" alt="bun_cha" src="../public/img/bun_cha.jpg">
                                            <div class="card-body">
                                                <!-- Texte -->
                                                <h4 class="card-title text-center">Bun Cha Ha Noi</h4>
                                                <hr>
                                                <p class="card-text text-justify">
                                                    Il s’agit de porc grillé, que l’on trempe souvent dans le nuoc mam et que l’on sert accompagné de
                                                    vermicelles de riz, ainsi que bien entendu de différentes menthes.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin 1er post -->

                                    <!-- 2ème post -->
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <!-- Image -->
                                            <img class="img-fluid" alt="bun_bo_hue" src="../public/img/banh_bun_hue_2.jpeg">
                                            <div class="card-body">
                                                <!-- Texte -->
                                                <h4 class="card-title text-center">Bún bò Huế</h4>
                                                <hr>
                                                <p class="card-text text-justify">
                                                    Il est composé d’un bouillon épicé et pimenté, de vermicelles de riz (bún), de bœuf (bò) et de
                                                    différentes épices.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin 2ème post -->
                                </div>
                            </div>
                            <!-- Fin 3ème page de carousel -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </body>

    <!-- insertion en pied -->
    <?php require 'footer.php' ?>

    <!-- library JS-->
    <script src="../public/js/main.js"></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <!-- Boostrap 5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <!-- Boostrap 4-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</html>

