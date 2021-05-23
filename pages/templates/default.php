<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <!-- popper min JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Europa font family
    <link href="//db.onlinewebfonts.com/c/23c0fcab84d99da0de762de7e220a6e1?family=Europa" rel="stylesheet"
        type="text/css" /> -->
    <!-- Europa bold font family -->
    <link href="//db.onlinewebfonts.com/c/d3bfee78e8ead45d9057a95bb6ff5de8?family=Europa-Bold" rel="stylesheet" type="text/css" />
    <!-- boostrap datepicker css -->
    <link rel="stylesheet" href="css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker3.css.map">

    <!-- Bootstrap datepicker Js -->
    <script src="js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <meta name="description" content="site de voyage en ligne qui propose des hotels et aprtements saisiniére à moindre cout">
    <style>
        .form-check-input:checked {
            background-color: #333 !important;
            border-color: #333 !important;
        }

        .custom-control-input:checked~.custom-control-label::before {
            color: #fff;
            background-color: #212529 !important;
        }

        @font-face {
            font-family: "Europa Regular";
            src: url("font/regular/23c0fcab84d99da0de762de7e220a6e1.eot");
            /* IE9*/
            src: url("font/regular/23c0fcab84d99da0de762de7e220a6e1.eot?#iefix") format("embedded-opentype"),
                /* IE6-IE8 */
                url("font/regular/23c0fcab84d99da0de762de7e220a6e1.woff2") format("woff2"),
                /* chrome、firefox */
                url("font/regular/23c0fcab84d99da0de762de7e220a6e1.woff") format("woff"),
                /* chrome、firefox */
                url("font/regular/23c0fcab84d99da0de762de7e220a6e1.ttf") format("truetype"),
                /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
                url("font/regular/23c0fcab84d99da0de762de7e220a6e1.svg#Europa Regular") format("svg");

            /* iOS 4.1- */
        }

        @font-face {
            font-family: "Europa-Bold";
            src: url("font/regular-bold/d3bfee78e8ead45d9057a95bb6ff5de8.eot");
            /* IE9*/
            src: url("font/regular-bold/d3bfee78e8ead45d9057a95bb6ff5de8.eot?#iefix") format("embedded-opentype"),
                /* IE6-IE8 */
                url("font/regular-bold/d3bfee78e8ead45d9057a95bb6ff5de8.woff2") format("woff2"),
                /* chrome firefox */
                url("font/regular-bold/d3bfee78e8ead45d9057a95bb6ff5de8.woff") format("woff"),
                /* chrome firefox */
                url("font/regular-bold/d3bfee78e8ead45d9057a95bb6ff5de8.ttf") format("truetype"),
                /* chrome firefox opera Safari, Android, iOS 4.2+*/
                url("font/regular-bold/d3bfee78e8ead45d9057a95bb6ff5de8.svg#Europa-Bold") format("svg");
            /* iOS 4.1- */
        }

        * {
            font-family: "Europa Regular" !important;
        }

        b {
            font-family: "Europa-Bold" !important;
            font-style: normal;
            letter-spacing: .01em;
            line-height: 1.6em;
            text-transform: none;
        }

        td>label {
            font-family: "Europa-Bold" !important;
            font-size: 12px !important;
        }

        #navbarSupportedContent {
            transition: 1s;
        }
    </style>
    <script src="js/main.js"></script>
    <title>skytripplanner</title>
</head>

<body>
    <header class="fixed-top">
        <div class="notice ">
            <div class=" text-white p-2" style="background: #111;">
                <div class="container-fluid">
                    <small>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="18" style="position:relative;top:5px;" fill="#fff">
                            <path d="M 16 3.21875 L 15.125 4.71875 L 3.125 25.5 L 2.28125 27 L 29.71875 27 L 28.875 25.5 L 16.875 4.71875 Z M 16 7.21875 L 26.25 25 L 5.75 25 Z M 15 14 L 15 20 L 17 20 L 17 14 Z M 15 21 L 15 23 L 17 23 L 17 21 Z" />
                        </svg>
                        <u>Note COVID-19 :</u> &nbsp;Accéder aux Mésures prisent par Skytripplanner face à la
                        COVID-19</small>
                    <span class="float-right" id="close__notice">x</span>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-2 nav-shadow">
            <div class="container-fluid">
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);">
                        <path d="M4 6H20V8H4zM4 11H20V13H4zM4 16H20V18H4z"></path>
                    </svg>
                </button>
                <a class="navbar-brand text-uppercase" href="#"><img src="assets/logo.png" width="30" alt="">
                    <b>Skytripplanner</b></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" class="display-lg " id="Outline" viewBox="0 0 24 24">
                    <title>94 user</title>
                    <path d="M12,12A6,6,0,1,0,6,6,6.006,6.006,0,0,0,12,12ZM12,2A4,4,0,1,1,8,6,4,4,0,0,1,12,2Z" />
                    <path d="M12,14a9.01,9.01,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.01,9.01,0,0,0,12,14Z" />
                </svg>

                <div class="collapse navbar-collapse h100-sm shownavbar " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2  pl-3 mb-lg-0" id="toggle__div">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Forum</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="original.html"><small class="">Skytripplanner</small>
                                <sup><small>original</small></sup> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Aide</a>
                        </li>
                    </ul>
                    <form class="d-flex pl-3 pt-5  postion-absolute-lg">
                        <div class="mr-3 row">
                            <div class="col-lg-6">
                                <button class="btn btn-outline-black col-lg-12 pr-5 ">
                                    <small>
                                        Ajouter son
                                        etablissement
                                    </small>
                                </button>
                            </div>
                            <div class="col-lg-6 pt-15-sm">
                                <button class="btn btn-black col-lg-12 pl-3" style="margin-left: 20px;"><small>Inscription/connexion</small></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <div class="w-100 bg-white border-bottom  " style="font-size: 14px;overflow-x: scroll;z-index: 111;">
            <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active " id="home-tab" data-toggle="tab" href="#Hotels" role="tab" aria-controls="home" aria-selected="true">
                            Hotels
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " id="home-tab" data-toggle="tab" href="#Vols" role="tab" aria-controls="home" aria-selected="true">
                            Vols
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Locations_saisoniere" role="tab" aria-controls="contact" aria-selected="false">Locations saisoniére</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Locations_de_voitures" role="tab" aria-controls="profile" aria-selected="false">
                            Locations de voitures
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#sorties" role="tab" aria-controls="profile" aria-selected="false">
                            sorties
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <?= $content; ?>

    <footer>
        <footer class="bg-light">
            <div class=" border-top pl-4">
                <div class="col-lg-3 p-4">
                    <h4>
                        <b>
                            A propos
                        </b>
                    </h4><br>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Fonctionnement de skytripplanner</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                        <li>
                            <a href="#">Investisseurs</a>
                        </li>
                        <li>
                            <a href="#"> skytripplannerplus</a>
                        </li>
                        <li>
                            <a href="#">skytripplannerlux</a>
                        </li>
                        <li>
                            <a href="#">skytripplanner for work</a>
                        </li>
                        <li>
                            <a href="#">C'est possible grâce aux Hôtes</a>
                        </li>
                        <li>
                            <a href="#">Jeux olympiques</a>
                        </li>
                        <li>
                            <a href="#">Carrieres</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 p-4">
                    <h4>
                        <b>
                            Communauté
                        </b>
                    </h4><br>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Diversité et Intégration</a>
                        </li>
                        <li>
                            <a href="#">Accessibilité</a>
                        </li>
                        <li>
                            <a href="#">Partenaires Skytripplanner</a>
                        </li>
                        <li>
                            <a href="#"> Logement d' urgence</a>
                        </li>
                        <li>
                            <a href="#">Inviter des amis</a>
                        </li>
                        <li>
                            <a href="#">skytripplanner.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 p-4">
                    <h4>
                        <b>
                            Hôtes
                        </b>
                    </h4><br>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Héberger des voyageurs</a>
                        </li>
                        <li>
                            <a href="#">Organiser une expérience en ligne</a>
                        </li>
                        <li>
                            <a href="#">Acceuil Responsable</a>
                        </li>
                        <li>
                            <a href="#"> Centre de Ressources</a>
                        </li>
                        <li>
                            <a href="#">Community Center </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 p-4">
                    <h4>
                        <b>
                            Assistance
                        </b>
                    </h4><br>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Nos mesures face au COVID-19</a>
                        </li>
                        <li>
                            <a href="#">Centre d' aide</a>
                        </li>
                        <li>
                            <a href="#">Options d' annulation</a>
                        </li>
                        <li>
                            <a href="#"> Service d' aide</a>
                        </li>
                        <li>
                            <a href="#"> Confiance te sécurité</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-4">
                <div class="pb-2">
                    copyright skytripplanner, Inc . All rights reserved
                </div>
                <div class="row pl-4">
                    <a href="" class="text-dark"> Confidentialité</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="text-dark"> Conditions génerales</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="text-dark"> Plan du Site</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="text-dark"> Fonctionnement du Site</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="text-dark"> Info sur l'entreprise</a>
                </div>
            </div>
            <style>



            </style>
        </footer>
    </footer>
    <style>
        .list-unstyled>li>a {
            color: #111
        }

        .table__carousel tr td {
            width: 20px;
        }

        .cbtn {
            width: 8px;
            height: 10px;
            border-style: none;
            border-radius: 100%;
            background-color: #888;
        }

        .cbtn>.active {
            background-color: #111;
            width: 12px;
            height: 12px;

        }

        .postion-absolute-lg {
            position: absolute;
            right: 2px;
        }
    </style>


    <style>
        /* wrapper */
        .wraper-img2 {
            width: 258px;
            height: 160px;
            object-fit: cover;
        }

        .wrapper-item2 {
            width: 280px;
            margin-left: 10px;
        }

        .rounded-12px {
            border-radius: 22px;
        }

        .rounded-top-12px {
            border-top-right-radius: 22px;
            border-top-left-radius: 22px;
        }

        /* style TABS */
        .nav-tabs {
            border-bottom: none !important;
            white-space: nowrap;
            display: inline-flex;
            flex-wrap: nowrap;


        }

        .nav-tabs .nav-link {
            border: none;
            border-top-left-radius: 0 !important;
            border-top-right-radius: 0 !important;
            display: inline-block;
        }

        .nav-tabs .nav-link.active {
            color: #111;
            background-color: #fff;
            border-bottom: 4px solid #111;
        }

        .nav-tabs .nav-link {
            color: #333;
            background-color: #fff;
            text-transform: capitalize;
        }

        .bg-header {
            background-image: url(https://images.unsplash.com/photo-1513907404652-d138942b8859?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Njh8fHxlbnwwfHx8&auto=format&fit=crop&w=900&q=100&blur=1);
            /* background-repeat: no-repeat; */
            /* background-size: cover; */
            height: 200px;
        }

        .input-group-text {
            padding: 0 !important;
        }

        .span-icon {
            margin-right: 10px;
        }

        .col-6 {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 5px;
            padding-left: 15px;
        }

        .col-lg-12 {
            padding-right: 0 !important;
        }

        .rounded-10px {
            border-radius: 3rem;
        }

        input[type="text"] {
            border-style: none;
        }

        input[type="text"]:focus {
            outline: none;
        }

        label {
            /* text-transform: uppercase; */
            font-size: 14px;
            /* font-weight: bold; */
        }

        .modal__div {
            position: absolute;
            /* box-shadow: 0 0 30px rgba(14, 42, 71, .25); */
            animation: popover 0.1s cubic-bezier(0.39, 0.575, 0.565, 1);
            background-color: #fff;
            padding: 10px;
            top: 85px;
            width: 400px;
            height: fit-content;
            border-radius: 20px;
            display: none;
            z-index: 9999;
        }

        .shownavbar {


            transition-duration: width 2s;
            transition-property: all;


        }

        @keyframes shownavbar {
            from {
                transform: translateY(100px);
            }

            to {
                transform: translateY(0px);
            }
        }

        @keyframes popover {
            from {
                transform: translateY(100px);
            }

            to {
                transform: translateY(0px);
            }

        }

        .btn-black {
            background-color: #111;
            color: #fff;
        }

        .display-lg {
            display: none;
        }

        .activex {
            display: block !important;
        }

        ::-webkit-scrollbar {
            width: 0px;
            display: none;
        }

        .left-20 {
            left: 20px;
        }

        .city {
            background-color: #fff;
            color: #111;
            width: 100%;

        }

        .city:hover {
            background-color: #f1f1f1;
            border-radius: 15px;
            cursor: pointer;
        }

        .btn-outline-black {
            color: #222;
            border-color: #222;
            border: 1px solid #222;
            background-color: #fff;
        }

        .btn-outline-white {
            border: 1px solid #fff;
            color: #fff;
            background-color: transparent;
        }

        .gray-light-gradient {
            background-image: linear-gradient(to left, rgba(112, 112, 112, 0), rgba(61, 59, 59, 0.7));
            border-radius: 10px;
            height: fit-content;
        }

        .back {
            background-image: url(https://images.unsplash.com/photo-1610981109245-c3f748c98ad2?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fHBhcmlzJTIwZnJhbmNlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=100);
            border-radius: 10px;
            background-size: cover;
            background-repeat: no-repeat;
            background-origin: content-box;
            background-position: center;
        }

        .back3 {
            background-image: url(https://images.unsplash.com/photo-1568736772245-26914aae0b09?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fGJvcmRlYXV4fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=100);
            border-radius: 10px;
        }

        .back1 {
            background-image: url(https://images.unsplash.com/photo-1597225764524-beb6e071d9ff?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bmFudGVzfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=100);
            border-radius: 10px;
            height: 280px;
        }


        @media(max-width:992px) {
            .col-input-div {
                height: 55px;
                border-bottom: 1px solid #e4e4e4;
                border-left: 1px solid #e4e4e4;
                height: 65px;
                border-right: 1px solid #e4e4e4;
                padding: 12px;
            }

            .display-sm-none {
                display: none;
            }

            button[type="submit"] {
                height: 50px;
                width: 100%;
            }

            .pt-15-sm {
                padding-top: 15px;
                margin-left: -20px;
            }

            .left-20 {
                left: 1px;
            }

            .postion-absolute-lg {
                position: relative !important;
                right: 0px !important;
            }

            #toggle__div {
                padding-bottom: 10px;
                height: 100%;
            }

            .navbar {
                height: 100%;
                background-color: #111;
                /* padding-bottom: 150px !important; */
            }

            .navbar-collapse {
                padding-bottom: 180px !important;
            }

            .no-border-bottom {
                border-bottom: none !important;
                border-right: none !important;
                border-left: none !important;
            }

            .rounded-10px {
                border-radius: 10px;
            }

            .border-start {
                border-top: 1px solid #e9e9e9;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
            }

            .border-end {

                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            }

            .display-lg {
                display: block;
            }

            .modal__div {
                position: absolute;
                /* box-shadow: 0 0 30px rgba(14, 42, 71, .25); */
                background-color: rgba(1, 1, 1, 0.6);
                /* background-color: #fff; */
                padding: 10px;
                width: 100%;
                height: 100%;
                border-radius: 0px;
                top: 0;
                bottom: 1;
                right: 0;
                left: 0;
                position: fixed;
                z-index: 9999;

            }

            .modal__body {
                background-color: #fff;
                position: absolute;
                bottom: 1px;
                right: 0;
                left: 0;
                position: fixed;
                padding: 15px;
                border-top-left-radius: 15px;
                border-top-right-radius: 15px;
            }

            .datepicker table tr td {
                width: 30px;
                height: 30px;
                border-radius: 10px !important;
                font-size: 14px;

            }

            #close__notice {
                position: relative;
                top: -10px;
            }
        }

        .minus,
        .add {
            background-color: #ffff;
            border-style: none;
            width: 40px;
            height: 40px;
            border: 2px solid #999;
            border-radius: 100%;
            line-height: -50px;
            font-weight: bold;
            font-size: 20px;
            color: #666;
            cursor: pointer;
        }

        /* Dtaepicker */
        .datepicker table tr td {
            width: 50px;
            height: 50px;
            border-radius: 100%;
            font-size: 14px;

        }

        .datepicker table tr td.active:active,
        .datepicker table tr td.active.highlighted:active,
        .datepicker table tr td.active.active,
        .datepicker table tr td.active.highlighted.active {
            color: #fff;
            background-color: #212529;
            border-color: #222;
        }

        .datepicker table tr th {
            text-align: center;
            width: fit-content;
            height: fit-content;
            border: none;
            height: 50px;
            font-size: 11px;
            color: rgb(65, 63, 63);
            font-weight: 800;


        }

        .datepicker .datepicker-switch,
        .datepicker .prev,
        .datepicker .next,
        .datepicker tfoot tr th {
            cursor: pointer;
            font-weight: bold;
            text-transform: capitalize;
            font-size: 15px;
            color: #000;
        }
    </style>
</body>

</html>