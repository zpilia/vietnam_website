<!DOCTYPE html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/bootstrap.css">
        <link rel="stylesheet" href="../public/css/style.css">
        <title>Culture - Coutume</title>
    </head>

    <!-- insertion entête -->
    <?php require 'header.php'?>


    <body>

    <div class="title">
        <h1 class="mt-5 fw-bold text-center">Les différentes coutumes</h1>
    </div>

    <br>

    <ul class="cards">
        <li class="cards__item">
            <div class="card">
                <div class="card__image card__image--fence"></div>
                <div class="card__content">
                    <div class="card__title">Flex</div>
                    <p class="card__text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
                    <button class="btn btn--block card__btn">Button</button>
                </div>
            </div>
        </li>
        <li class="cards__item">
            <div class="card">
                <div class="card__image card__image--river"></div>
                <div class="card__content">
                    <div class="card__title">Flex Grow</div>
                    <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.</p>
                    <button class="btn btn--block card__btn">Button</button>
                </div>
            </div>
        </li>
        <li class="cards__item">
            <div class="card">
                <div class="card__image card__image--record"></div>
                <div class="card__content">
                    <div class="card__title">Flex Shrink</div>
                    <p class="card__text">This defines the ability for a flex item to shrink if necessary. Negative numbers are invalid.</p>
                    <button class="btn btn--block card__btn">Button</button>
                </div>
            </div>
        </li>
        <li class="cards__item">
            <div class="card">
                <div class="card__image card__image--flowers"></div>
                <div class="card__content">
                    <div class="card__title">Flex Basis</div>
                    <p class="card__text">This defines the default size of an element before the remaining space is distributed. It can be a length (e.g. 20%, 5rem, etc.) or a keyword. The auto keyword means "look at my width or height property."</p>
                    <button class="btn btn--block card__btn">Button</button>
                </div>
            </div>
        </li>
    </ul>



    </body>


    <!-- insertion en pied -->
    <?php require 'footer.php'?>

    <!-- fichier js -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
