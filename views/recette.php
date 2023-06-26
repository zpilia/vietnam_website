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


    <div class="container">
        <div class="description-page">
            <div class="header">
                <h1 class="logo">CodePenCooks</h1>
            </div>

            <figure>
                <img class="top-image" src="https://assets.codepen.io/652/shania-pinnata-7E-vKgzahd8-unsplash.jpg" alt="spaghetti with pesto sauce and cherry tomatoes.">
                <!-- full size image URL: https://images.unsplash.com/photo-1593253787226-567eda4ad32d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2434&q=80 -->
                <figcaption>Photo by Shania Pinnata</figcaption>
            </figure>

            <h1>Pasta with Pesto & Tomatoes</h1>
            <hr>

            <h3 role="doc-subtitle">This quick and delicious pasta dish is the perfect way to use up a summer bounty of basil and tomatoes! </h3>

            <div class="recipe_details">
                <ul>
                    <li><span class="iconify" data-icon="bi:clock-fill" data-inline="false"></span></li>
                    <li>PREP<br>5 mins</li>
                    <li>COOK<br>25 mins</li>
                    <li>TOTAL<br>30 mins</li>
                </ul>
                <ul class="servings">
                    <li><span class="iconify" data-icon="emojione-monotone:fork-and-knife" data-inline="false"></span></li>
                    <li>SERVINGS<br>4</li>
                </ul>
            </div>

        </div>

        <div class="sheet">
            <div class="ingredients">
                <ul class="ingredients-list">
                    <li>
                        <input type="checkbox" id="ing-1" />
                        <label for="ing-1">8 oz. spaghetti or linguine pasta</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ing-2" />
                        <label for="ing-2">2 cups fresh basil leaves + 4-8 leaves for garnish</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ing-3" />

                        <label for="ing-3">2 cloves garlic</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ing-4" />
                        <label for="ing-4">2 tbsp. pine nuts or blanched almonds</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ing-5" />
                        <label for="ing-5">1/2 cup olive oil</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ing-6" />

                        <label for="ing-6">1/2 cup grated Parmesan cheese + 2 tbsp for garnish</label>
                    </li>

                    <li>
                        <input type="checkbox" id="ing-7" />

                        <label for="ing-7">1/8 tsp salt</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ing-8" />
                        <label>1 pint cherry tomatoes</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ing-9" />
                        <label for="ing-9">1 tsp olive oil</label>
                    </li>
                </ul>

                <p class="variation">Variation: Got no time, or no fresh basil? Use a 6 ounce jar of prepared pesto instead.</p>
                <figure>
                    <img class="tomatoes" src="https://assets.codepen.io/652/tamanna-rumee-nswz6tIpgZk-unsplash.jpg" alt="tomato halves surrounded by basil leaves and peppercorns.">
                    <!-- full size image URL: https://images.unsplash.com/photo-1606923829579-0cb981a83e2e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80-->

                    <figcaption class="tomato-cap">Photo by Tamanna Rumee</figcaption>
                </figure>

            </div>

            <div class="process">
                <div class="description">
                    <p>Don't have a green thumb? Never fear! You can knock out this classic pasta dish in no time with a jar of prepared pesto sauce. </p>
                </div>

                <ol class="instructions">
                    <li>Bring 4 quarts of water to a rolling boil in a large pot. Salt the water generously and add the pasta. </li>
                    <li>While the pasta cooks, make the pesto.
                        <ul>
                            <li>Remove stems from basil leaves.</li>
                            <li>Put the basil, garlic, and pine nuts or almonds into the bowl of a food processor and pulse it a few times to chop them up.</li>
                            <li>Then, turn the food processor on and <strong>slowly</strong> pour the olive oil through the feeder tube to blend with the chopped herbs and nuts. </li>
                            <li>Process until all ingredients are fully blended, stopping the food processor to scrape down the sides occasionally to get it all mixed. </li>
                            <li>Turn off the food processor, and add the salt and Parmesan, then pulse a few times to blend.</li>
                        </ul>
                    </li>
                    <li>Heat a large skillet over medium heat. </li>
                    <li>Add the 1/2 tsp. olive oil to the heated skillet.</li>
                    <li>Add the cherry tomatoes to the skillet and let them blister, stirring occasionally and gently so they don't burst. </li>
                    <li>Remove tomatoes from the pan and set aside. </li>
                    <li>Drain the pasta, reserving 1/4 cup of the cooking water.</li>
                    <li>Return the pasta to the pot</li>
                    <li>Add the reserved cooking water and pesto to the pasta and stir to mix</li>
                    <li>Plate the pasta and add 6-8 tomatoes to each plate</li>
                    <li>Garnish with reserved basil leaves and Parmesean and serve. Buon Appetito!</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="close" id="close"><span class="iconify" data-icon="carbon:close-outline" data-inline="false"></span></div>

    <nav class="tabs">
        <input type="radio" id="ingredients" name="tabs" />
        <label for="ingredients" class="tab">Ingredients</label>
        <input type="radio" id="process" name="tabs" />
        <label for="process" class="tab">Process</label>
    </nav>


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
