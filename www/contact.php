<?php include_once "validation_contact.php"; ?>

<!doctype html>

<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CopyPasta Restaurant - Infos Pratiques</title>

    <style>

        .map {
            height: 400px;
            width: 100%;
        }

        


    </style>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/css/ol.css">
    <!-- END Openlayers map API -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Bootstrap fontawesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="/css/aPropos.css">
    <link type="text/css" rel="stylesheet" href="/css/carteRestaurant.css">
    <link type="text/css" rel="stylesheet" href="/css/copyPasta.css">
    <link type="text/css" rel="stylesheet" href="/css/index.css">
</head>

<body class="">

<!-- banderole vidéo -->
<header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="../BooststrapAbreha/images/Banderole vidéo.mp4" type="video/mp4">
    </video>
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class=" display-4"></h1>
                <p class="lead mb-0"></p>
            </div>
        </div>
    </div>
</header>


<!-- LOGO + NAVBAR -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark" id="main-nav">
    <div class="container">
        <div class="fonts">
            <a href="index.html" class="navbar-brand">CopyPasta</a>
        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-1">
                    <a href="index.html" class="nav-link">Accueil</a>
                </li>
                <li class="nav-item mr-1">
                    <a href="apropos.html" class="nav-link">A Propos</a>
                </li>
                <li class="nav-item mr-1">
                    <a href="carteRestaurant.html" class="nav-link">Carte des Plats</a>
                </li>
                <li class="nav-item mr-1">
                    <a href="contact.html" class="nav-link">Infos Pratiques</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="" style="margin:14px;">

    <!--  Bloc infos pratiques -->

    <div class="container" style="min-width: 250px; max-width: 850px; margin-top:1rem; margin-bottom:1rem;">

        <div class="card-group shadow row">

            <!-- Module adresse -->

            <div class="card col-md-3 col-sm-4" style="padding:0; margin-bottom:0;">

                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-utensils"></i> CopyPasta</h4>
                    <p class="card-text"><small class="text-muted">Spécialités italiennes <i
                            class="fas fa-pizza-slice"></i></small></p>
                    <h5><span class="badge badge-success"><i class="fas fa-clock"></i> Lu-ve 12:00-23:00</span></h5>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Rue Tribuzio 45</li>
                    <li class="list-group-item"><i class="fas fa-city"></i> 1205 Genève</li>
                    <li class="list-group-item"><i class="fas fa-phone"></i> 022 745 12 34</li>
                </ul>

            </div>

            <!--  Module slider principal avec légende sur photos -->

            <div class="card col-md-9 col-sm-8" style="margin:0; padding:1rem;">

                <div id="carouselAdresse1" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">

                            <img src="assets/images/contact/antipasti.jpg" style="margin:auto; max-width:100%;" alt="Card image"
                                 class="d-block w-100">

                            <div class="carousel-caption d-none d-sm-block bg-success rounded shadow-lg">
                                <h5>Antipasti</h5>
                                <p class="blockquote-footer text-white font-italic">"Finché c'è vita c'è speranza."</p>
                            </div>

                        </div>

                        <div class="carousel-item">

                            <img src="assets/images/contact/platti.jpg" style="margin:auto; max-width:100%;" alt="Card image"
                                 class="d-block w-100">

                            <div class="carousel-caption d-none d-sm-block bg-warning rounded shadow-lg">
                                <h5>Primi e secondi piatti</h5>
                                <p class="blockquote-footer text-white font-italic">"Chi sta bene con sè, sta bene con
                                    tutti."</p>
                            </div>

                        </div>

                        <div class="carousel-item">

                            <img src="assets/images/contact/dolce.jpg" style="margin:auto; max-width:100%;" alt="Card image"
                                 class="d-block w-100">

                            <div class="carousel-caption d-none d-sm-block bg-danger rounded shadow-lg">
                                <h5>Dolce</h5>
                                <p class="blockquote-footer text-white font-italic">"Chi asperttar puote, viene a cio
                                    che vuole."</p>
                            </div>

                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#carouselAdresse1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Précédent</span></a>
                    <a class="carousel-control-next" href="#carouselAdresse1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Suivant</span></a>

                </div>

            </div>

        </div>

    </div>

    <!--  Bloc réservations -->

    <div class="container" style="min-width: 250px; max-width: 850px; margin-bottom:1rem;">

        <div class="card-group shadow row">

            <!--  Module slider (visible uniquement sur écrans de taille moyenne et supérieure) -->

            <div class="card col-md-6 col-sm-5 d-sm-flex" style="margin:0; padding:1rem; display:none; ">

                <div id="carouselFormulaire1" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="assets/images/contact/resto01.jpg" style="margin:auto; max-width:100%;" alt="Card image"
                                 class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/contact/resto02.jpg" style="margin:auto; max-width:100%;" alt="Card image"
                                 class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/contact/resto03.jpg" style="margin:auto; max-width:100%;" alt="Card image"
                                 class="d-block w-100">
                        </div>

                    </div>

                </div>

            </div>

            <!--  Module de formulaire -->

            <div class="card col-md-6 col-sm-7" style="margin:0; padding:0;">

                <div class="card-body" style="margin:0; padding:0;">
                    <h4 class="card-header border-0">Réservations <i class="far fa-comment"></i></h4>
                </div>

                <div class="card-body">

                    <div class="container">
                        <form class="needs-validation" method="post" action="contact.php">

                            <div class="mb-3">
                                <p></p>
                                <label for="firstName">Prénom</label>
                                <input type="text" name="firstname" class="form-control" id="firstName" placeholder="" value=""required />
                                <div class="invalid-feedback">
                                    Ce champ ne peut pas être vide.
                                

                            </div>

                            <div class="mb-3">

                        
                                <label for="lastName">Nom</label>
                                <input type="text" name="lastname" class="form-control" id="lastName" placeholder="" value="" required />

                                <div class="invalid-feedback">
                                    Ce champ ne peut pas être vide.
                                </div>

                            </div>

                            <div class="mb-3">
                            
                                <label for="email">Email</span></label>
                                <input type="email" name="email" class="form-control" id="email"
                                       placeholder="votreadresse@exemple.ch" required />

                                <div class="invalid-feedback">
                                    Entrez un email valide.
                                </div>

                            </div>


                            <hr class="mb-4" />
                            <input class="btn btn-info btn-lg btn-block"
                                    type="submit" value="Valider" />

                        </form>

                    </div>

                </div>

            </div>

            <!--  Module slider (visible uniquement sur mobiles) -->

            <div class="card col-12 d-sm-none" style="margin:0; padding:1rem;">

                <div id="carouselFormulaire2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="assets/images/contact/thumb01.jpg" style="margin:auto; max-width:100%;" alt="Card image"
                                 class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/contact/thumb02.jpg" style="margin:auto; max-width:100%;" alt="Card image"
                                 class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/contact/thumb03.jpg" style="margin:auto; max-width:100%;" alt="Card image"
                                 class="d-block w-100">
                        </div>

                        <a class="carousel-control-prev" href="#carouselFormulaire2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Précédent</span></a>
                        <a class="carousel-control-next" href="#carouselFormulaire2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span></a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--  Bloc localisation -->

    <div class="container" style="min-width: 250px; max-width: 850px; margin-bottom:1rem;">

        <div class="card-group shadow row">

            <div class="card col-md-6 col-sm-5 d-sm-flex" style="margin:0; padding:0;">

                <div class="card-body" style="margin:0; padding:0;">
                    <h4 class="card-header border-0">Localisation <i class="fas fa-map-marked-alt"></i>
                        <span class="badge badge-info d-sm-none float-right" style="cursor:pointer;" id="btnHide"
                              onclick="toggleView()">Cacher <i class="fas fa-chevron-up"></i></span>
                        <span class="badge badge-info d-sm-none float-right" style="display:none; cursor:pointer;"
                              id="btnShow" onclick="toggleView()">Montrer <i class="fas fa-chevron-down"></i></span>
                    </h4>
                </div>

                <!--  Module map API (visible uniquement sur mobiles)  -->

                <div class="card-body d-sm-none" id="mapAPI" style="margin:0; padding:1rem;">

                    <div id="map" class="map"></div>

                </div>

                <!--  Module map API (visible uniquement sur écrans de taille moyenne et supérieure)  -->

                <div class="card-body d-sm-block" id="mapAPI2" style="display:none; margin:0; padding:1rem;">

                    <div id="map2" class="map"></div>

                </div>

            </div>

            <!--  Module slider (visible uniquement sur mobiles) -->

            <div class="card col-12 d-sm-none" style="margin:0; padding:1rem;">

                <div id="carouselLocalisation1" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="assets/images/contact/thumb04.jpg" style="margin:auto; max-width:100%;" alt="Card image"
                                 class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/contact/thumb05.jpg" style="margin:auto; max-width:100%;" alt="Card image"
                                 class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/contact/thumb06.jpg" style="margin:auto; max-width:100%;" alt="Card image"
                                 class="d-block w-100">
                        </div>

                        <a class="carousel-control-prev" href="#carouselLocalisation1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Précédent</span></a>
                        <a class="carousel-control-next" href="#carouselLocalisation1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span></a>

                    </div>

                </div>

            </div>

            <!--  Module slider (visible uniquement sur écrans de taille moyenne et supérieure)  -->

            <div class="card col-lg-6 d-sm-flex" id="carouselMap2" style="display:none; margin:0; padding:1rem;">

                <div id="carouselLocalisation2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="assets/images/contact/resto04.jpg" style="margin:auto; max-width:100%;" alt="Card image"
                                 class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/contact/resto07.jpg" style="margin:auto; max-width:100%;" alt="Card image"
                                 class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/contact/resto06.jpg" style="margin:auto; max-width:100%;" alt="Card image"
                                 class="d-block w-100">
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!----------- Footer ------------>
<div class="">
    <section style="height:80px;"></section>
    <div class="row" style="text-align:center;">
        <h2></h2>
    </div>

    <footer class="footer-bs">
        <div class="row">
            <div class="col-md-3 footer-brand animated fadeInLeft">
                <h2 class="footfont">CopyPasta</h2>
                <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies.
                    Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex
                    mi ut sem.</p>
                <p>© 2014 Banda Digital Agency, All rights reserved</p>
            </div>
            <div class="col-md-4 footer-nav animated fadeInUp">
                <h4>Menu —</h4>
                <div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">A Propos</a></li>
                        <li><a href="#">La Carte des Plats</a></li>
                        <li><a href="#">Infos Pratiques</a></li>

                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 footer-social animated fadeInDown">
                <h4>Follow Us</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">RSS</a></li>
                </ul>
            </div>

            <div class="col-md-3 footer-ns animated fadeInRight">
                <h4>Newsletter</h4>
                <p>Pour recevoir toutes les informations concernant le restaurant CopyPasta</p>
                <p>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Inscrivez-vous...">
                    <span class="input-group-btn">
                          <button class="btn btn-default" type="button"><span
                                  class="glyphicon glyphicon-envelope"></span></button>
                        </span>
                </div><!-- /input-group -->
                </p>
            </div>
        </div>

        <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>
    </footer>
    <section style="text-align:center; margin:10px auto;"><p>Designed by Banda Digital Agency <a
            href="http://enfoplus.net">Dario/Axel/Norah/Brusk/Abreha</a></p></section>

</div>

<!-- Openlayers custom scripts -->
<script src="js/openLayers.js"></script>
<!-- START Openlayers map API -->
<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js"></script>
<!-- Bootstrap scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

</body>

</html>
