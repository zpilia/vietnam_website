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
    <title>Histoire - Famille Royal</title>
</head>

    <!-- insertion entête -->
    <?php require 'header.php' ?>

    <body>

    <style>

        body {
            background: linear-gradient(45deg, #ffff00, #a7ddf1, #70db70);
        }

        .title {
            font-family: 'Georgia', 'Times New Roman', serif;
            font-size: 40px;
            color: #e60000;
        }

        p {

        }

        /*----------------genealogy-scroll----------*/

        .genealogy-scroll::-webkit-scrollbar {
            width: 5px;
            height: 8px;
        }
        .genealogy-scroll::-webkit-scrollbar-track {
            border-radius: 10px;
            background-color: #e4e4e4;
        }
        .genealogy-scroll::-webkit-scrollbar-thumb {
            background: #212121;
            border-radius: 10px;
            transition: 0.5s;
        }
        .genealogy-scroll::-webkit-scrollbar-thumb:hover {
            background: #d5b14c;
            transition: 0.5s;
        }


        /*----------------genealogy-tree----------*/
        .genealogy-body{
            white-space: nowrap;
            overflow-y: hidden;
            min-height: 500px;
            padding: 10px 50px 50px;
        }
        .genealogy-tree ul {
            padding-top: 20px;
            position: relative;
            padding-left: 0px;
            display: flex;
        }
        .genealogy-tree li {
            float: left; text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;
        }
        .genealogy-tree li::before, .genealogy-tree li::after{
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 2px solid #ccc;
            width: 50%;
            height: 18px;
        }
        .genealogy-tree li::after{
            right: auto; left: 50%;
            border-left: 2px solid #ccc;
        }
        .genealogy-tree li:only-child::after, .genealogy-tree li:only-child::before {
            display: none;
        }
        .genealogy-tree li:only-child{
            padding-top: 0;
        }
        .genealogy-tree li:first-child::before, .genealogy-tree li:last-child::after{
            border: 0 none;
        }
        .genealogy-tree li:last-child::before{
            border-right: 2px solid #ccc;
            border-radius: 0 5px 0 0;
            -webkit-border-radius: 0 5px 0 0;
            -moz-border-radius: 0 5px 0 0;
        }
        .genealogy-tree li:first-child::after{
            border-radius: 5px 0 0 0;
            -webkit-border-radius: 5px 0 0 0;
            -moz-border-radius: 5px 0 0 0;
        }
        .genealogy-tree ul ul::before{
            content: '';
            position: absolute; top: 0; left: 50%;
            border-left: 2px solid #ccc;
            width: 0; height: 20px;
        }
        .genealogy-tree li a{
            text-decoration: none;
            color: #666;
            font-family: arial, verdana, tahoma, sans-serif;
            font-size: 11px;
            display: inline-block;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }

        .genealogy-tree li a:hover+ul li::after,
        .genealogy-tree li a:hover+ul li::before,
        .genealogy-tree li a:hover+ul::before,
        .genealogy-tree li a:hover+ul ul::before{
            border-color:  #fbba00;
        }

        /*--------------memeber-card-design----------*/
        .member-view-box{
            padding:0 20px;
            text-align: center;
            border-radius: 4px;
            position: relative;
        }
        .member-image{
            width: 60px;
            position: relative;
        }
        .member-image img{
            width: 60px;
            height: 60px;
            border-radius: 6px;
            background-color :#000;
            z-index: 1;
        }
    </style>


        <!-- Titre -->
        <div class="title">
            <h1 class="mt-4 fw-bold text-center">Dynastie Nguyễn</h1>
        </div>

    <div class="body genealogy-body genealogy-scroll">
        <div class="genealogy-tree">
            <ul>
                <li>
                    <a href="javascript:void(0);">
                        <div class="member-view-box">
                            <div class="member-image">
                                <img src="../public/img/Gia_Long.jpg" alt="gia_long">
                                <div class="member-details">
                                    <h3>Gia Long</h3>
                                    <h5>1802 – 1819</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="active">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="member-view-box">
                                    <div class="member-image">
                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                        <div class="member-details">
                                            <h3>Member 1</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <ul >
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="member-view-box">
                                            <div class="member-image">
                                                <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                <div class="member-details">
                                                    <h3>Member 1-1</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="member-view-box">
                                            <div class="member-image">
                                                <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                <div class="member-details">
                                                    <h3>Member 1-2</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="member-view-box">
                                            <div class="member-image">
                                                <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                <div class="member-details">
                                                    <h3>Member 1-3</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                        <div class="member-details">
                                                            <h3>Member 1-3-1</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                        <div class="member-details">
                                                            <h3>Member 1-3-2</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                        <div class="member-details">
                                                            <h3>Member 1-3-3</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="member-view-box">
                                            <div class="member-image">
                                                <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                <div class="member-details">
                                                    <h3>Member 1-4</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="member-view-box">
                                            <div class="member-image">
                                                <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                <div class="member-details">
                                                    <h3>Member 1-5</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="member-view-box">
                                            <div class="member-image">
                                                <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                <div class="member-details">
                                                    <h3>Member 1-6</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="member-view-box">
                                            <div class="member-image">
                                                <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                <div class="member-details">
                                                    <h3>Member 1-7</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                        <div class="member-details">
                                                            <h3>Member 1-7-1</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                        <div class="member-details">
                                                            <h3>Member 1-7-2</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="member-view-box">
                                                            <div class="member-image">
                                                                <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                                <div class="member-details">
                                                                    <h3>Member 1-7-2-1</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="member-view-box">
                                                            <div class="member-image">
                                                                <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                                <div class="member-details">
                                                                    <h3>Member 1-7-2-2</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="member-view-box">
                                                            <div class="member-image">
                                                                <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                                <div class="member-details">
                                                                    <h3>Member 1-7-2-3</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                        <div class="member-details">
                                                            <h3>Member 1-7-3</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="member-view-box">
                                    <div class="member-image">
                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                        <div class="member-details">
                                            <h3>Member 2</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <ul class="active">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="member-view-box">
                                            <div class="member-image">
                                                <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                <div class="member-details">
                                                    <h3>John Doe</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                        <div class="member-details">
                                                            <h3>John Doe</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                        <div class="member-details">
                                                            <h3>John Doe</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                        <div class="member-details">
                                                            <h3>John Doe</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="member-view-box">
                                            <div class="member-image">
                                                <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                <div class="member-details">
                                                    <h3>John Doe</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                        <div class="member-details">
                                                            <h3>John Doe</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                        <div class="member-details">
                                                            <h3>John Doe</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                        <div class="member-details">
                                                            <h3>John Doe</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="member-view-box">
                                            <div class="member-image">
                                                <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                <div class="member-details">
                                                    <h3>John Doe</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                        <div class="member-details">
                                                            <h3>John Doe</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                        <div class="member-details">
                                                            <h3>John Doe</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member">
                                                        <div class="member-details">
                                                            <h3>John Doe</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    </body>




    <!-- insertion en pied -->
    <?php require 'footer.php' ?>

    <!-- library JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="../public/js/main.js"></script>
    <!-- Boostrap 5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Boostrap 4-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>

</html>
