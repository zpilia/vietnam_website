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
            font-family: 'Georgia', serif;
            text-align: justify;
            font-size: 100%;
            color: black;
        }

        h2 {
            font-family: 'Georgia', sans-serif;
            text-align: center;
            color: #ff3300;
        }

        h3 {
            font-family: 'Georgia', sans-serif;
            text-align: center;
            color: black;
        }

        h5 {
            font-family: 'Georgia', sans-serif;
            text-align: center;
            color: black;
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
        .genealogy-body {
            white-space: nowrap;
            overflow-y: hidden;
            min-height: 500px;
            padding: 10px 50px 50px;
            text-align: center;
        }

        .genealogy-tree {
            display: inline-block;
        }

        .genealogy-tree ul {
            padding-top: 20px;
            position: relative;
            padding-left: 0;
            display: flex;
            justify-content: center;
        }

        .genealogy-tree li {
            float: left;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;
        }

        .genealogy-tree li::before,
        .genealogy-tree li::after {
            content: "";
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 3px solid #ccc;
            width: 50%;
            height: 18px;
        }

        .genealogy-tree li::after {
            right: auto;
            left: 50%;
            border-left: 3px solid #ccc;
        }

        .genealogy-tree li:only-child::after,
        .genealogy-tree li:only-child::before {
            display: none;
        }

        .genealogy-tree li:only-child {
            padding-top: 0;
        }

        .genealogy-tree li:first-child::before,
        .genealogy-tree li:last-child::after {
            border: 0 none;
        }

        .genealogy-tree li:last-child::before {
            border-right: 3px solid #ccc;
            border-radius: 0 5px 0 0;
            -webkit-border-radius: 0 5px 0 0;
            -moz-border-radius: 0 5px 0 0;
        }

        .genealogy-tree li:first-child::after {
            border-radius: 5px 0 0 0;
            -webkit-border-radius: 5px 0 0 0;
            -moz-border-radius: 5px 0 0 0;
        }

        .genealogy-tree ul ul::before {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 3px solid #ccc;
            width: 0;
            height: 20px;
        }

        .genealogy-tree li a {
            text-decoration: none;
            color: #666;
            font-family: arial, verdana, tahoma, sans-serif;
            font-size: 11px;
            display: inline-block;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }

        .genealogy-tree li a:hover + ul li::after,
        .genealogy-tree li a:hover + ul li::before,
        .genealogy-tree li a:hover + ul::before,
        .genealogy-tree li a:hover + ul ul::before {
            border-color: #fbba00;
        }

        /*--------------member-card-design----------*/
        .member-view-box {
            margin: 0 auto;
            padding: 10px 10px;
            width: 200px;
            min-height: 75px;
            position: relative;
        }

        /* .member-image{
            width: 60px;
            position: relative;
        } */

        .member-image img {
            width: 60px;
            height: 60px;
            border-radius: 6px;
            background-color: #000;
            z-index: 1;
        }


    </style>


        <!-- Titre -->
        <div class="title">
            <h1 class="mt-4 fw-bold text-center">Dynastie Nguyễn</h1>
        </div>

<<<<<<< HEAD
        <!-- Section / Arbre généalogie -->
        <div class="section">
=======
        <div class="container-fluid">
>>>>>>> 7220e5c2e225df990ca94c0e9a9c43a8a6bbca79
                <div class="body genealogy-body genealogy-scroll">
                    <div class="genealogy-tree">
                        <ul>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="../public/img/Gia_Long.jpg" alt="gia_long">
                                            <div class="member-details">
                                                <h2>1</h2>
                                                <h3>Gia Long</h3>
                                                <h5>1802 – 1819</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="../public/img/Minh_Mang.jpg" alt="minh_mang">
                                                    <div class="member-details">
                                                        <h2>2</h2>
                                                        <h3>Minh Mang</h3>
                                                        <h5>1820 - 1840</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <ul class="">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="member-view-box">
                                                        <div class="member-image">
                                                            <img src="../public/img/Thieu_tri.webp" alt="thieu_tri">
                                                            <div class="member-details">
                                                                <h2>3</h2>
                                                                <h3>Thiêu-Tri</h3>
                                                                <h5>1841 - 1847</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <ul class="">
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <div class="member-view-box">
                                                                <div class="member-image">
                                                                    <img src="../public/img/Tu_Duc.jpg" alt="tu_duc">
                                                                    <div class="member-details">
                                                                        <h2>4</h2>
                                                                        <h3>Tu Duc</h3>
                                                                        <h5>1847 - 1883</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <div class="member-view-box">
                                                                <div class="member-image">
                                                                    <img src="../public/img/point_interro.webp" alt="thoai_thai">
                                                                    <div class="member-details">
                                                                        <h3>Prince<br>Thoai Thai</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <ul class="">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <div class="member-view-box">
                                                                        <div class="member-image">
                                                                            <img src="../public/img/point_interro.webp" alt="duc_duc">
                                                                            <div class="member-details">
                                                                                <h2>5</h2>
                                                                                <h3>Duc Duc</h3>
                                                                                <h5>1883</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <ul class="">
                                                                    <li>
                                                                        <a href="javascript:void(0);">
                                                                            <div class="member-view-box">
                                                                                <div class="member-image">
                                                                                    <img src="../public/img/Thanh_Thai.JPG" alt="thanh_thai">
                                                                                    <div class="member-details">
                                                                                        <h2>10</h2>
                                                                                        <h3>Thanh-Thai</h3>
                                                                                        <h5>1889 - 1907</h5>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <ul class="">
                                                                            <li>
                                                                                <a href="javascript:void(0);">
                                                                                    <div class="member-view-box">
                                                                                        <div class="member-image">
                                                                                            <img src="../public/img/duy_tan.JPG" alt="duy_tan">
                                                                                            <div class="member-details">
                                                                                                <h2>11</h2>
                                                                                                <h3>Duy-Tân</h3>
                                                                                                <h5>1907 - 1916</h5>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                        </ul>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <div class="member-view-box">
                                                                <div class="member-image">
                                                                    <img src="../public/img/point_interro.webp" alt="kien_thai">
                                                                    <div class="member-details">
                                                                        <h3>Prince<br>Kien Thai</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <ul class="">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <div class="member-view-box">
                                                                        <div class="member-image">
                                                                            <img src="../public/img/dongkhanh.jpg" alt="dong_khanh">
                                                                            <div class="member-details">
                                                                                <h2>9</h2>
                                                                                <h3>Dong Khanh</h3>
                                                                                <h5>1885 - 1889</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <ul class="">
                                                                    <li>
                                                                        <a href="javascript:void(0);">
                                                                            <div class="member-view-box">
                                                                                <div class="member-image">
                                                                                    <img src="../public/img/Khai_Dinh.jpg" alt="khai_dinh">
                                                                                    <div class="member-details">
                                                                                        <h2>12</h2>
                                                                                        <h3>Khai-Dinh</h3>
                                                                                        <h5>1916 - 1925</h5>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <ul class="">
                                                                            <li>
                                                                                <a href="javascript:void(0);">
                                                                                    <div class="member-view-box">
                                                                                        <div class="member-image">
                                                                                            <img src="../public/img/bao_dai.jpg" alt="bao_dai">
                                                                                            <div class="member-details">
                                                                                                <h2>13</h2>
                                                                                                <h3>Bao-Dai</h3>
                                                                                                <h5>1925 - 1945</h5>
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
                                                                            <img src="../public/img/Ham_Nghi.JPG" alt="ham_nghi">
                                                                            <div class="member-details">
                                                                                <h2>8</h2>
                                                                                <h3>Ham-Nghi</h3>
                                                                                <h5>1884 - 1885</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <div class="member-view-box">
                                                                        <div class="member-image">
                                                                            <img src="../public/img/Kien_Phuc.jpg" alt="kien_phuoc">
                                                                            <div class="member-details">
                                                                                <h2>7</h2>
                                                                                <h3>Kiên Phuoc</h3>
                                                                                <h5>1883 - 1884</h5>
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
                                                                    <img src="../public/img/Hiep_hoa.jpg" alt="hiep_hoa">
                                                                    <div class="member-details">
                                                                        <h2>6</h2>
                                                                        <h3>Hiêp Hoa</h3>
                                                                        <h5>1883</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
        <!-- Fin Section / Arbre généalogie -->

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
