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

    <body style="background: linear-gradient(45deg, #ffff00, #a7ddf1, #70db70);">

        <!-- Titre -->
        <div class="title"
             style="font-family: 'Georgia', 'Times New Roman', serif;
                            font-size: 40px;
                            color: #e60000"
        >
            <h1 class="mt-4 fw-bold text-center">Les lieux les plus important à visiter</h1>
        </div>

        <!-- Container - 1ère ligne -->
        <div class="container mt-4">
            <div class="row ">

                <!-- 1er post -->
                <div class="col-lg-4 col-md-12">
                    <div class="card  ">
                        <!-- Image -->
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="../public/img/hanoi.jpg" class="img-fluid" alt="hanoi"/>
                        </div>

                        <!-- Contenu -->
                        <div class="card-body">
                            <h4 class="card-title text-dark text-center">Hanoi</h4>
                            <hr>
                            <p class="card-text text-justify"
                               style="font-family: 'Georgia', serif;
                                      text-align: justify;
                                      font-size: 100%;
                                      color: black;"
                            >
                                La capitale vietnamienne est connue pour son ambiance si particulière, typiquement vietnamienne avec son agitation
                                et son ébullition qui est séduit par sa richesse culturelle dont le Temple de la Littérature,
                                le lac Hoan Kiem, le Mausolée Ho Chi Minh ou son formidable musée d’Ethnographie ne sont que quelques-uns des sites culturels emblématiques de la ville.
                            </p>
                            <hr>
                            <!-- Bouton -->
                            <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#myModal">
                                Localisation
                            </button>

                            <!-- Modal -->
                            <div class="modal top fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                <div class="modal-dialog modal-lg  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body mb-0 p-0">
                                            <!-- Google Maps -->
                                            <div id="map-container-google-16" class="z-depth-1-half map-container-9"
                                                 style="overflow:hidden;
                                                        padding-bottom:55%;
                                                        position:relative;
                                                        height:0;"
                                            >
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59585.969790435425!2d105.79296009040836!3d21.02775943883605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2sHano%C3%AF%2C%20District%20de%20Hoan%20Kiem%2C%20Hano%C3%AF%2C%20Vietnam!5e0!3m2!1sfr!2sfr!4v1687455326871!5m2!1sfr!2sfr"
                                                        frameborder="0" allowfullscreen
                                                        style="left:0;
                                                               top:0;
                                                               height:100%;
                                                               width:100%;
                                                               position:absolute;">
                                                </iframe>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin 1er post -->

                <!-- 2ème post -->
                <div class="col-lg-4 col-md-12">
                    <div class="card  ">
                        <!-- Image -->
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="../public/img/baie_dhalong_vietnam.jpg" class="img-fluid" alt="baie_dhalong"/>
                        </div>

                        <!-- Contenu -->
                        <div class="card-body">
                            <h4 class="card-title text-dark text-center">Baie d’Halong</h4>
                            <hr>
                            <p class="card-text text-justify"
                               style="font-family: 'Georgia', serif;
                                      text-align: justify;
                                      font-size: 100%;
                                      color: black;"
                            >
                                L’une des sept merveilles du monde moderne, la baie d’Halong se situe dans la province de Quang Ninh, à 160km à l’est de Hanoï.
                                <br><br>
                                On y admire quelque 1 969 îles et îlots rocheux jaillissant d’une mer émeraude. Ses paysages féeriques et ses grottes en font un chef-d’œuvre de la nature.
                            </p>
                            <hr>
                            <!-- Bouton -->
                            <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#myModal_2">
                                Localisation
                            </button>

                            <!-- Modal -->
                            <div class="modal top fade" id="myModal_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                <div class="modal-dialog modal-lg  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body mb-0 p-0">
                                            <!-- Google Maps -->
                                            <div id="map-container-google-16" class="z-depth-1-half map-container-9"
                                                 style="overflow:hidden;
                                                        padding-bottom:55%;
                                                        position:relative;
                                                        height:0;"
                                            >
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238637.4487194976!2d107.00954203101978!3d20.843408353365028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a5796518cee87%3A0x55c6b0bcc85478db!2sBaie%20de%20H%E1%BA%A1%20Long!5e0!3m2!1sfr!2sfr!4v1687529533133!5m2!1sfr!2sfr"
                                                        frameborder="0" allowfullscreen
                                                        style="left:0;
                                                               top:0;
                                                               height:100%;
                                                               width:100%;
                                                               position:absolute;"
                                                >
                                                </iframe>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin 2ème post -->

                <!-- 3ème post -->
                <div class="col-lg-4 col-md-12">
                    <div class="card  ">
                        <!-- Image -->
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="../public/img/sapa.jpg" class="img-fluid" alt="sapa"/>
                        </div>

                        <!-- Contenu -->
                        <div class="card-body">
                            <h4 class="card-title text-dark text-center">Sapa – la reine des montagnes</h4>
                            <hr>
                            <p class="card-text text-justify"
                               style="font-family: 'Georgia', serif;
                                      text-align: justify;
                                      font-size: 100%;
                                      color: black;"
                            >
                                La région de Sapa est la partie la plus haute du Vietnam avec le Mont Fansipan surnommé "le toit de l’Indochine".
                                Doté d’un climat frais toute l’année, le bourg de Sapa était la station climatique de l’époque coloniale.
                                Hors des rizières en terrasses à perte de vue, des montagnes, des ruisseaux...
                                <br><br>
                                Sapa est aussi le domicile d’un grand nombre des minorités ethniques dont la culture est très intéressante à découvrir.
                            </p>
                            <hr>
                            <!-- Bouton -->
                            <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#myModal_3">
                                Localisation
                            </button>

                            <!-- Modal -->
                            <div class="modal top fade" id="myModal_3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                <div class="modal-dialog modal-lg  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body mb-0 p-0">
                                            <!-- Google Maps -->
                                            <div id="map-container-google-16" class="z-depth-1-half map-container-9"
                                                 style="overflow:hidden;
                                                        padding-bottom:60%;
                                                        position:relative;
                                                        height:0;"
                                            >
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236225.6457131593!2d103.74100695476814!3d22.314867237618376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36cd40a503ec6395%3A0x49032814dedb2fb8!2sSa%20Pa%2C%20L%C3%A0o%20Cai%2C%20Vietnam!5e0!3m2!1sfr!2sfr!4v1687529884888!5m2!1sfr!2sfr"
                                                        frameborder="0" allowfullscreen
                                                        style="left:0;
                                                               top:0;
                                                               height:100%;
                                                               width:100%;
                                                               position:absolute;"
                                                >
                                                </iframe>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin 3ème post -->

            </div>
        </div>
        <!-- Fin Container - 1ère ligne -->

        <!-- Container - 2ème ligne -->
        <div class="container mt-4">
            <div class="row ">

                <!-- 1er post -->
                <div class="col-lg-4 col-md-12">
                    <div class="card  ">
                        <!-- Image -->
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="../public/img/Son_Doong_Cave.jpg" class="img-fluid" alt="phong_nha_ke_bang"/>
                        </div>

                        <!-- Contenu -->
                        <div class="card-body">
                            <h4 class="card-title text-dark text-center">Parc national - Phong Nha Ke Bang</h4>
                            <hr>
                            <p class="card-text text-justify"
                               style="font-family: 'Georgia', serif;
                                      text-align: justify;
                                      font-size: 100%;
                                      color: black;"
                            >
                                Le parc national de Phong Nha-Ke Bang, classé au patrimoine mondial de l’Unesco, est une merveille naturelle du Vietnam.
                                <br><br>
                                Ces fantastiques paysages karstiques abritent un nombre impressionnant de cavités et de grottes traversées par des rivières dont
                                la plus grande grotte du monde, la grotte Son Doong qui servit de décor au dernier film de King Kong.
                            </p>
                            <hr>
                            <!-- Bouton -->
                            <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#myModal_4">
                                Localisation
                            </button>

                            <!-- Modal -->
                            <div class="modal top fade" id="myModal_4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                <div class="modal-dialog modal-lg  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body mb-0 p-0">
                                            <!-- Google Maps -->
                                            <div id="map-container-google-16" class="z-depth-1-half map-container-9"
                                                 style="overflow:hidden;
                                                        padding-bottom:55%;
                                                        position:relative;
                                                        height:0;"
                                            >

                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.6244720142067!2d106.12916858202793!3d17.47767894068741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3138ba4e96f40ad5%3A0x5d3b4a2c611e58b0!2sPhong%20Nha%20-%20Ke%20Bang%20National%20Park!5e0!3m2!1sfr!2sfr!4v1687535843643!5m2!1sfr!2sfr"
                                                        frameborder="0" allowfullscreen
                                                        style="left:0;
                                                               top:0;
                                                               height:100%;
                                                               width:100%;
                                                               position:absolute;"
                                                >
                                                </iframe>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin 1er post -->

                <!-- 2ème post -->
                <div class="col-lg-4 col-md-12">
                    <div class="card  ">
                        <!-- Image -->
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="../public/img/hue.jpg" class="img-fluid" alt="hue"/>
                        </div>

                        <!-- Contenu -->
                        <div class="card-body">
                            <h4 class="card-title text-dark text-center">Hué – la Cité impériale</h4>
                            <hr>
                            <p class="card-text text-justify"
                               style="font-family: 'Georgia', serif;
                                      text-align: justify;
                                      font-size: 100%;
                                      color: black;"
                            >
                                Classée au patrimoine de l’Unesco, Hue subjugue les visiteurs par son impressionnant héritage de son passé glorieux puisqu’elle fut
                                capitale impériale du Vietnam sous la Dynastie des Nguyen de 1802 à 1945.
                                <br><br>
                                Incontournable d'un voyage au Vietnam, la ville possède également un formidable patrimoine culinaire et une douceur de vivre unique bercée
                                par la Rivière des Parfums.

                            </p>
                            <hr>
                            <!-- Bouton -->
                            <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#myModal_5">
                                Localisation
                            </button>

                            <!-- Modal -->
                            <div class="modal top fade" id="myModal_5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                <div class="modal-dialog modal-lg  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body mb-0 p-0">
                                            <!-- Google Maps -->
                                            <div id="map-container-google-16" class="z-depth-1-half map-container-9"
                                                 style="overflow:hidden;
                                                        padding-bottom:55%;
                                                        position:relative;
                                                        height:0;"
                                            >

                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61222.994877237616!2d107.53591346305022!3d16.45338642630526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a115e1a7935f%3A0xbf3b50af70b5c7b7!2zSHXhur8sIFRo4burYSBUaGnDqm4gSHXhur8sIFZpZXRuYW0!5e0!3m2!1sfr!2sfr!4v1687536210935!5m2!1sfr!2sfr"
                                                        frameborder="0" allowfullscreen
                                                        style="left:0;
                                                               top:0;
                                                               height:100%;
                                                               width:100%;
                                                               position:absolute;"
                                                >
                                                </iframe>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin 2ème post -->

                <!-- 3ème post -->
                <div class="col-lg-4 col-md-12">
                    <div class="card  ">
                        <!-- Image -->
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="../public/img/hoi_an_2.JPG" class="img-fluid" alt="hoi_an"/>
                        </div>

                        <!-- Contenu -->
                        <div class="card-body">
                            <h4 class="card-title text-dark text-center">Hoi An</h4>
                            <hr>
                            <p class="card-text text-justify"
                               style="font-family: 'Georgia', serif;
                                      text-align: justify;
                                      font-size: 100%;
                                      color: black;"
                            >
                                La région de Sapa est la partie la plus haute du Vietnam avec le Mont Fansipan surnommé "le toit de l’Indochine".
                                Doté d’un climat frais toute l’année, le bourg de Sapa était la station climatique de l’époque coloniale.
                                Hors des rizières en terrasses à perte de vue, des montagnes, des ruisseaux...
                                <br><br>
                                Sapa est aussi le domicile d’un grand nombre des minorités ethniques dont la culture est très intéressante à découvrir.
                            </p>
                            <hr>
                            <!-- Bouton -->
                            <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#myModal_6">
                                Localisation
                            </button>

                            <!-- Modal -->
                            <div class="modal top fade" id="myModal_6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                <div class="modal-dialog modal-lg  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body mb-0 p-0">
                                            <!-- Google Maps -->
                                            <div id="map-container-google-16" class="z-depth-1-half map-container-9"
                                                 style="overflow:hidden;
                                                        padding-bottom:60%;
                                                        position:relative;
                                                        height:0;"
                                            >
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122778.37554321792!2d108.3346715408288!3d15.918276471806571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31420dd4e1353a7b%3A0xae336435edfcca3!2zSOG7mWkgQW4sIFByb3ZpbmNlIGRlIFF14bqjbmcgTmFtLCBWaWV0bmFt!5e0!3m2!1sfr!2sfr!4v1687536965314!5m2!1sfr!2sfr"
                                                        frameborder="0"  allowfullscreen
                                                        style="left:0;
                                                               top:0;
                                                               height:100%;
                                                               width:100%;
                                                               position:absolute;"
                                                >
                                                </iframe>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin 3ème post -->

            </div>
        </div>
        <!-- Fin Container - 2ème ligne -->


        <!-- Container - 3ème ligne -->
        <div class="container mt-4">
            <div class="row ">

                <!-- 1er post -->
                <div class="col-lg-4 col-md-12">
                    <div class="card  ">
                        <!-- Image -->
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="../public/img/saigon.jpg" class="img-fluid" alt="ho_chi_minh"/>
                        </div>

                        <!-- Contenu -->
                        <div class="card-body">
                            <h4 class="card-title text-dark text-center">Ho Chi Minh - Ville</h4>
                            <hr>
                            <p class="card-text text-justify"
                               style="font-family: 'Georgia', serif;
                                      text-align: justify;
                                      font-size: 100%;
                                      color: black;"
                            >
                                Hô Chi Minh-Ville, l’ancienne Saigon est l’une des capitales économiques et culturelles de l’Asie du Sud-Est.
                                <br><br>
                                Mégalopole moderne, passionnante, gigantesque et métissée, tournée vers l’avenir sans pour autant renier son passé :
                                c’est ici que les vestiges de l’époque coloniale sont les plus visibles et mis en valeur, dans l’architecture comme dans la décoration.
                                Dans le paysage urbain, les témoignages de ce passé pas si lointain, où la ville s’appelait « la perle de l’Extrême-Orient ».
                            </p>
                            <hr>
                            <!-- Bouton -->
                            <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#myModal_7">
                                Localisation
                            </button>

                            <!-- Modal -->
                            <div class="modal top fade" id="myModal_7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                <div class="modal-dialog modal-lg  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body mb-0 p-0">
                                            <!-- Google Maps -->
                                            <div id="map-container-google-16" class="z-depth-1-half map-container-9"
                                                 style="overflow:hidden;
                                                        padding-bottom:55%;
                                                        position:relative;
                                                        height:0;"
                                            >
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501726.46045380377!2d106.41503196962296!3d10.754666397185357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2sH%C3%B4%20Chi%20Minh-Ville%2C%20H%C3%B4%20Chi%20Minh%2C%20Vietnam!5e0!3m2!1sfr!2sfr!4v1687537346186!5m2!1sfr!2sfr"
                                                        frameborder="0" allowfullscreen
                                                        style="left:0;
                                                               top:0;
                                                               height:100%;
                                                               width:100%;
                                                               position:absolute;"
                                                >
                                                </iframe>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin 1er post -->

                <!-- 2ème post -->
                <div class="col-lg-4 col-md-12">
                    <div class="card  ">
                        <!-- Image -->
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="../public/img/delta.jpg" class="img-fluid" alt="delta_mekongg"/>
                        </div>

                        <!-- Contenu -->
                        <div class="card-body">
                            <h4 class="card-title text-dark text-center">Delta du Mékong</h4>
                            <hr>
                            <p class="card-text text-justify"
                               style="font-family: 'Georgia', serif;
                                      text-align: justify;
                                      font-size: 100%;
                                      color: black;"
                            >
                                Cette immense plaine extrêmement fertile traversée par les neuf bras du fleuve légendaire Mékong est quadrillé par une multitude de canaux et
                                d’arroyos verdoyants, de rizières et de vergers, d’îles et de villages nonchalants.
                                <br><br>
                                Le bateau et le vélo sont le meilleur pour profiter pleinement de ce paradis terrestre habité par une population très accueillante.
                            </p>
                            <hr>
                            <!-- Bouton -->
                            <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#myModal_8">
                                Localisation
                            </button>

                            <!-- Modal -->
                            <div class="modal top fade" id="myModal_8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                <div class="modal-dialog modal-lg  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body mb-0 p-0">
                                            <!-- Google Maps -->
                                            <div id="map-container-google-16" class="z-depth-1-half map-container-9"
                                                 style="overflow:hidden;
                                                        padding-bottom:55%;
                                                        position:relative;
                                                        height:0;"
                                            >
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2013014.7982425906!2d105.13668865!3d9.794004450000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a09bba522eed6d%3A0xa5cd3e8fd29a2fe6!2sDelta%20du%20M%C3%A9kong%2C%20Vietnam!5e0!3m2!1sfr!2sfr!4v1687538549701!5m2!1sfr!2sfr"
                                                        frameborder="0" allowfullscreen
                                                        style="left:0;
                                                               top:0;
                                                               height:100%;
                                                               width:100%;
                                                               position:absolute;"
                                                >
                                                </iframe>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin 2ème post -->

                <!-- 3ème post -->
                <div class="col-lg-4 col-md-12">
                    <div class="card  ">
                        <!-- Image -->
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="../public/img/pho_quoc_2.jpg" class="img-fluid" alt="phu_quoc"/>
                        </div>

                        <!-- Contenu -->
                        <div class="card-body">
                            <h4 class="card-title text-dark text-center">L’île de Phu Quoc</h4>
                            <hr>
                            <p class="card-text text-justify"
                               style="font-family: 'Georgia', serif;
                                      text-align: justify;
                                      font-size: 100%;
                                      color: black;"
                            >
                                Phu Quoc contentera les amateurs de belles plages, de sable blanc, de cocotiers langoureux et de nature préservée puisqu'elle abrite en son sein un parc national.
                                <br><br>
                                L'île est également connue pour son poivre et sa sauce de poisson de grande qualité et pour ses formidables fruits de mer.
                            </p>
                            <hr>
                            <!-- Bouton -->
                            <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#myModal_9">
                                Localisation
                            </button>

                            <!-- Modal -->
                            <div class="modal top fade" id="myModal_9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                                <div class="modal-dialog modal-lg  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body mb-0 p-0">
                                            <!-- Google Maps -->
                                            <div id="map-container-google-16" class="z-depth-1-half map-container-9"
                                                 style="overflow:hidden;
                                                        padding-bottom:55%;
                                                        position:relative;
                                                        height:0;"
                                            >
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251290.06721921675!2d103.64557391358252!3d10.228697088500148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a78c62b49eda17%3A0x8aa79fbbdd72cdb!2zUGjDuiBRdeG7kWM!5e0!3m2!1sfr!2sfr!4v1687538731273!5m2!1sfr!2sfr"
                                                        frameborder="0" allowfullscreen
                                                        style="left:0;
                                                               top:0;
                                                               height:100%;
                                                               width:100%;
                                                               position:absolute;"
                                                >
                                                </iframe>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin 3ème post -->

            </div>
        </div>
        <!-- Fin Container - 3ème ligne -->


    </body>

    <!-- insertion en pied -->
    <?php require 'footer.php' ?>

    <!-- library JS-->
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <!-- Boostrap 5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <!-- Boostrap 4-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</html>
