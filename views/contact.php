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
    <title>Contact</title>
</head>

    <!-- insertion entête + sendmail-->
    <?php
    require 'header.php';
    require 'sendmail.php'
    ?>

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
        <h1 class="mt-4 fw-bold text-center">Des question ? Contactez-moi !</h1>
    </div>

    <div class="container mt-5 mb-5">

        <!--Section: Content-->
        <section class="container my-auto py-auto z-depth-1">

            <!-- Grid row -->
            <div class="row">

                <div class="col-lg-4 col-md-12"></div>

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6">

                    <!-- Form with header -->
                    <div class="card">
                        <div class="card-body">
                            <!-- Body -->

                            <!-- TEST FORM RAJOUTE PAR MOI -->
                            <form action="contact.php" method="POST">
                                <div class="md-form">
                                    <input type="text" id="name" class="form-control" name="login" placeholder="Nom" required>
                                </div>
                                <br>

                                <div class="md-form">
                                    <input type="email" id="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <br>

                                <div class="md-form">
                                    <input type="text" id="subject" class="form-control" name="subject" placeholder="Objet" required>
                                </div>
                                <br>

                                <div class="md-form">
                                    <textarea id="text" class="form-control md-textarea" rows="3" name="content" placeholder="Contenu du message" required></textarea>
                                </div>
                                <br>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-info btn-rounded ml-0">Envoyer<i class="far fa-paper-plane ml-2"></i></button>
                                </div>
                                <!-- TEST FIN DE FORM -->
                            </form>
                        </div>
                    </div>
                    <!-- Form with header -->

                    <div class="col-lg-4 col-md-12"></div>

                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->

        </section>
        <!--Section: Content-->

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

