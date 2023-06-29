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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <title>Histoire - Chronologie</title>
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
                color: black;
            }

            .circle {
                padding: 13px 20px;
                border-radius: 50%;
                background-color: white;
                color: black;
                max-height: 50px;
                z-index: 2;
            }

            .how-it-works.row .col-2 {
                align-self: stretch;
            }
            .how-it-works.row .col-2::after {
                content: "";
                position: absolute;
                border-left: 3px solid black;
                z-index: 1;
            }
            .how-it-works.row .col-2.bottom::after {
                height: 50%;
                left: 50%;
                top: 50%;
            }
            .how-it-works.row .col-2.full::after {
                height: 100%;
                left: calc(50% - 3px);
            }
            .how-it-works.row .col-2.top::after {
                height: 50%;
                left: 50%;
                top: 0;
            }

            .timeline div {
                padding: 0;
                height: 40px;
            }
            .timeline hr {
                border-top: 3px solid black;
                margin: 0;
                top: 17px;
                position: relative;
            }
            .timeline .col-2 {
                display: flex;
                overflow: hidden;
            }
            .timeline .corner {
                border: 3px solid black;
                width: 100%;
                position: relative;
                border-radius: 15px;
            }
            .timeline .top-right {
                left: 50%;
                top: -50%;
            }
            .timeline .left-bottom {
                left: -50%;
                top: calc(50% - 3px);
            }
            .timeline .top-left {
                left: -50%;
                top: -50%;
            }
            .timeline .right-bottom {
                left: 50%;
                top: calc(50% - 3px);
            }
        </style>

        <!-- Titre -->
        <div class="title">
            <h1 class="mt-4 fw-bold text-center">Dates importantes</h1>
        </div>

        <div class="container mt-5">
            <div class="container">

                <!--1 section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">300 000 - 500 000 av. J.C</div>
                    </div>
                    <div class="col-6 text-justify">
                        <p>
                            Des vestiges du paléolithique au site de NUI-DO (province de THANH HOA) confirme la présence humaine au Vietnam
                        </p>
                    </div>
                </div>
                <!--path between 1-2-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>

                <!--2 section-->
                <div class="row align-items-center justify-content-end how-it-works d-flex">
                    <div class="col-6 text-justify">
                        <p>
                            Plusieurs cultures s'épanouissent à l'époque mésolithique à BAC SON et HOA BINH...
                        </p>
                    </div>
                    <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">5 000 av. J.C.</div>
                    </div>
                </div>
                <!--path between 2-3-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>

                <!--3 section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1 000 av. J.C.</div>
                    </div>
                    <div class="col-6">
                        <p>
                            (L'âge de bronze) la civilisation DÔNG-SON est célèbre pour ses tambours en bronze (Trông Dông).
                        </p>
                    </div>
                </div>
                <!--path between 3-4-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>

                <!--4 section-->
                <div class="row align-items-center justify-content-end how-it-works d-flex">
                    <div class="col-6 text-justify">
                        <p>
                            Conquête du Vietnam par la Chine. Sous l'impulsion chinoise, le Vietnam passe à l'âge de fer, introduit le cheval, ouvre la route des épices.
                            Les Chinois imposent leur écriture et leur civilisation.
                        </p>
                    </div>
                    <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">111 av. J.C. à 938 ap. J.C.</div>
                    </div>
                </div>
                <!--path between 4-5-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>

                <!--5 section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">39 - 43 ap. J.C.</div>
                    </div>
                    <div class="col-6 text-justify">
                        <p>
                            Révolte des deux soeurs TRUNG écrasée par MA-YUAN.
                        </p>
                    </div>
                </div>
                <!--path between 5-6-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>

                <!--6 section-->
                <div class="row align-items-center justify-content-end how-it-works d-flex">
                    <div class="col-6 text-right">
                        <p>
                            Introduction du bouddhisme. HANOI s'appelle DAI-LA. Soulèvement de LY-BÔN.
                        </p>
                    </div>
                    <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">VIe siècle</div>
                    </div>
                </div>
                <!--path between 6-7-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>

                <!--7 section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">939</div>
                    </div>
                    <div class="col-6 text-justify">
                        <p>
                            Fin de la domination chinoise. NGÔ-QUYÊN vainquit l'envahisseur.
                        </p>
                    </div>
                </div>
                <!--path between 7-8-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>

                <!--8 section-->
                <div class="row align-items-center justify-content-end how-it-works d-flex">
                    <div class="col-6 text-right">
                        <p>
                            La dynastie des LE réorganise le pays qui s'appelle DAI CO VIET.
                        </p>
                    </div>
                    <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">980</div>
                    </div>
                </div>
                <!--path between 8-9-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>

                <!--9 section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1010 – 1225</div>
                    </div>
                    <div class="col-6 text-justify">
                        <p>
                            Époque des LY (1010 - 1225)
                        </p>
                    </div>
                </div>
                <!--path between 9-10-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>

                <!--10 section-->
                <div class="row align-items-center justify-content-end how-it-works d-flex">
                    <div class="col-6 text-justify">
                        <p>
                            Occupation chinoise de la dynastie MINH. LE LOI devient roi du DAI VIÊT. NGUYÊN-TRAI est son premier ministre.
                        </p>
                    </div>
                    <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1407 – 1427</div>
                    </div>
                </div>
                <!--path between 10-11-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>

                <!--11 section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1428 – 1787</div>
                    </div>
                    <div class="col-6 text-justify">
                        <p>
                            Dynastie LÊ. Sous l'inspiration de NGUYÊN- TRAI, le VIETNAM se dote d'un humaniste vietnamien: répartition des terres, abolition du servage,
                            la femme est mieux considérée. Institution morale civile laïque. Littérature : le Nôm.
                        </p>
                    </div>
                </div>
                <!--path between 11-12-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>

                <!--12 section-->
                <div class="row align-items-center justify-content-end how-it-works d-flex">
                    <div class="col-6 text-justify">
                        <p>
                            Sous le règne de LE-THANH-TON, le code HONG-DUC fut érigé pour réglementer les lois et principes en vigueur jusqu'à la fin du XVIII ème siècle
                        </p>
                    </div>
                    <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1460 – 1497</div>
                    </div>
                </div>
                <!--path between 12-13-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>

                <!--13 section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1527 – 1802</div>
                    </div>
                    <div class="col-6 text-justify">
                        <p>
                            Le VIETNAM est divisé entre 2 pouvoirs, au Nord le clan TRINH, au Centre: le clan NGUYÊN.
                        </p>
                    </div>
                </div>
                <!--path between 13-14-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>

                <!--14 section-->
                <div class="row align-items-center justify-content-end how-it-works d-flex">
                    <div class="col-6 text-right">
                        <p>
                            Révolte des frères TÂY-SON. La guerre des clans.
                        </p>
                    </div>
                    <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1771</div>
                    </div>
                </div>
                <!--path between 14-15-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>

                <!--15 section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1788</div>
                    </div>
                    <div class="col-6 text-justify">
                        <p>
                            NGUYÊN-HUÊ (un des frères TÂY-SON) réunifie le pays, prend le nom de QUANG TRUNG, choisit THANG LONG (HANOI aujourd'hui) comme capitale.
                        </p>
                    </div>
                </div>
                <!--path between 15-16-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>

                <!--16 section-->
                <div class="row align-items-center justify-content-end how-it-works d-flex">
                    <div class="col-6 text-justify">
                        <p>
                            GIA-LONG, NGUYÊN PHUC ANH s'installe à HUÊ, et s'appuie sur les missionnaires et les Français.
                            Gia Long fonde la dynastie des Nguyên. Le royaume s'appelle Viêt-Nam de 1804 à 1820, Dai-Nam à partir de 1820.
                            HUE devient Ville Impériale du Vietnam en 1802 Le pays a connu enfin la paix après une longue période de guerre entre les seigneurs du Nord et ceux du Sud.
                        </p>
                    </div>
                    <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1802 – 1883</div>
                    </div>
                </div>
                <!--path between 16-17-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>

                <!--17 section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1883 – 1908</div>
                    </div>
                    <div class="col-6 text-left">
                        <p>
                            Conquête de l'Indochine par la FRANCE (époque coloniale)
                        </p>
                    </div>
                </div>
                <!--path between 17-18-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>

                <!--18 section-->
                <div class="row align-items-center justify-content-end how-it-works d-flex">
                    <div class="col-6 text-right">
                        <p>
                            Occupation Japonaise.
                        </p>
                    </div>
                    <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1940</div>
                    </div>
                </div>
                <!--path between 18-19-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>

                <!--19 section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1945</div>
                    </div>
                    <div class="col-6 text-left">
                        <p>
                            Fin de la Dynastie Nguyen. Dernier Roi: Bao Dai
                        </p>
                    </div>
                </div>
                <!--path between 18-19-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>

                <!--20 section-->
                <div class="row align-items-center justify-content-end how-it-works d-flex">
                    <div class="col-6 text-right">
                        <p>
                            Début de la guerre d’Indochine
                        </p>
                    </div>
                    <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1946</div>
                    </div>
                </div>
                <!--path between 19-20-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>

                <!--21 section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1954</div>
                    </div>
                    <div class="col-6 text-justify">
                        <p>
                            Fin de la guerre d’Indochine. Par les accords de GENEVE, le VIETNAM se divise en deux au niveau du 17e parallèle.
                            Au sud, Ho Chi Minh dirige un État communiste ; au nord, le régime de Bao Dai est soutenu par les États-Unis.
                        </p>
                    </div>
                </div>
                <!--path between 20-21-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>

                <!--22 section-->
                <div class="row align-items-center justify-content-end how-it-works d-flex">
                    <div class="col-6 text-right">
                        <p>
                            Guerre entre le NORD et le SUD.
                        </p>
                    </div>
                    <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1963 – 1975</div>
                    </div>
                </div>
                <!--path between 21-22-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>

                <!--23 section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1976</div>
                    </div>
                    <div class="col-6 text-left">
                        <p>
                            Proclamation de la République Socialiste du VIETNAM.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </body>


    <!-- insertion en pied -->
    <?php require 'footer.php' ?>

    <!-- library JS-->
    <script type="text/javascript" src="../public/js/main.js"></script>
    <!-- Boostrap 5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Boostrap 4-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>

</html>

