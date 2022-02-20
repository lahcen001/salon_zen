<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="lux.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://use.fontawesome.com/7659e695e8.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Zen</title>
</head>



<body>
    <script>

        Number.prototype.format = function (n) {
            var r = new RegExp('\\d(?=(\\d{3})+' + (n > 0 ? '\\.' : '$') + ')', 'g');
            return this.toFixed(Math.max(0, Math.floor(n))).replace(r, '$&,');
        };

        $('.count').each(function () {
            $(this).prop('counter', 0).animate({
                counter: $(this).text()
            }, {
                duration: 10000,
                easing: 'easeOutExpo',
                step: function (step) {
                    $(this).text('' + step.format());
                }
            });
        });

    </script>


  

    <?php
	include 'navbar.php';
?>




    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <!-- <div class="carousel-item active">
                <img src="./img/Carousel/car1.png" class="d-block w-100" alt="...">
            </div> -->
            <div class="carousel-item active">
                <img src="./img/a_propos.png" class="d-block w-100" alt="...">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->

        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->

        </a>
    </div>







    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-5 mb-5">
                <div class=" our_story_2">
                    <h3 class="align-middle my-0 soyez_unique text-left">Soyez Unique</h3>

                    <h1 class="align-middle  our_story  ">Our Story</h1>
                </div>

            </div>
            <div class="col-md-8 mt-5 mb-5">
                <p class="align-middle">Présent depuis <span class="text-bold">2007</span> à <span
                        class="text-bold">Rabat</span> , SALON ZEN est un
                    univers entièrement
                    dédié à votre beauté et à votre bien-étre. Nous vous accueillons dans une
                    ambiance feutrée, élégante et reposante pour vous offrir des
                    prestations sur mesure qui mettront en valeur votre image
                    ainsi que votre personnalité.</p>
            </div>
        </div>
    </div>




    <div class="  text-right text-light  p-3 border1 bg2 "
        style=" background-image: url('./img/backgound/yassin_background.png');">
        <div class="col-md-12 d-flex justify-content-center  ">
            <!-- 
            <img src="./img/card3/yassin.png" class="card3" alt=""> -->


            <div class="body_cr">
                <input type="radio" name="position" />
                <input type="radio" name="position" />
                <input type="radio" name="position" checked />
                <input type="radio" name="position" />
                <input type="radio" name="position" />
                <main id="carousel">
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"></div>
                    <main>
            </div>


        </div>


        <div class="col-md-8 d-flex justify-content-center mx-auto my-3 text-center   ">

            <h1 class="title3 Luxia_1">Yassin lg</h1>
        </div>
        <div class="col-md-8 d-flex justify-content-center mx-auto my-3 text-center   ">
            <h3 class="title4 ">Un artiste passionné au sommet de son art ! </h3>
        </div>

        <div class="col-md-8 d-flex justify-content-center mx-auto my-3 text-center  ">
            <p>


                À la tête d’une équipe hautement qualifiée, Yassine IG, coiffeur professionnel, sublime les
                chevelures
                en maniant les pigments comme un virtuose. Son savoir-faire et sa technique toujours plus
                innovante
                et
                perfectionnée, ont fait de lui un AS de la coiffure. <br />
                Résultat, de nombreuses personnalités font
                appel à
                lui pour obtenir LA coloration idéale. Du simple balayage au blond platine, Yassine vous propose
                des
                prestations sur mesure et adaptées à vos besoins car chacune d'entre vous est unique.


            </p>
        </div>
    </div>






    <div class="container bg1 pt5">



    </div>


    <!-- /////////////////////////////////// -->


    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="script/jquery.rollingslider.js"></script>
    <script>
        $('#demo').RollingSlider({
            showArea: "#example",
            prev: "#jprev",
            next: "#jnext",
            moveSpeed: 300,
            autoPlay: false
        });
    </script>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>






    <!-- ////////////////////////////////////////// -->

    <footer class="bg-primary text-center text-lg-start" id="down">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">


                    <h5 class="text-light"> <img src="./img/logo.png" alt="" class="logo"> Salon Zen</h5>
                    <hr class="hr_footer">
                    <p class="text-light">

                        Retrouvez-nous sur les réseaux sociaux et abonnez-vous à pour suivre en temps réel toute
                        l'actualité de Salon Zen
                        Copyright © 2021 SalonZen
                    </p>
                    <div class="social-media">

                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">


                    <h5 class="text-light mt-4"> Info</h5>
                    <hr class="hr_footer">

                    <ul class="list-unstyled mb-0 my-3 contact1">
                        <li>
                            <a href="#!" class="text-light">zeninstitut09@gmail.com</a>
                        </li>
                        <li>
                            <a href="#!" class="text-light">+212 (0) 670040 408</a>
                        </li>
                        <li>
                            <a href="#!" class="text-light">Location</a>
                        </li>

                    </ul>


                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-light mt-4"> Map</h5>
                    <hr class="hr_footer">

                    <img src="./img/map.png" class="map" alt="">
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-light mt-4"> Telecharger l'application</h5>
                    <hr class="hr_footer">

                    <img src="./img/appStore.png" class="appStore" alt="">
                    <br>
                    <img src="./img/googlePlay.png" class="googlePlay" alt="">
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-right text-light bg-primary  p-3 border1">
            <div class="container ">
                <div class="copyrihgt">Copyright © 2021
                    <a class="text-light" href="https://slonzen.ma/">Salon Zen</a></div>

            </div>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- <a href="#">



        <i id="gotoup">
            <img class="scroll" src="./img/backgound/scroll.png" alt="">
        </i>

    </a>

    <a href="#down">



        <i id="gotoup1">
            <img class="scroll" src="./img/backgound/down.png" alt="">
        </i>

    </a> -->

    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-content-2">
                <span id="close">&times;</span>
            </div>
            <div class="modal-body">
                allerie.html
            </div>
        </div>

    </div>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementById("close");

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>


    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-content-2">
                <span id="close">&times;</span>
            </div>
            <div class="modal-body">
                <a type="button" href="a_propos.html" class="btn btn-primary m-2 ">Français</a>

                <a type="button" href="./en/a_propos.html" class="btn btn-white m-2">English</a>

                <a type="button" href="./ar/a_propos.html" class="btn btn-white m-2">العربية</a>
            </div>
        </div>

    </div>
    <!-- /////////////////////////////// -->



</body>

</html>