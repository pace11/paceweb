<?php
include("lib/koneksi.php");
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <!--Designerd by: http://bootstrapthemes.co-->
    <head>
        <meta charset="utf-8">
        <title>PaceGagah | Official Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootnavnew.css">


        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/styleku.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->

                <div class="container">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                            <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">

                            <img src="assets/images/logopacee.png" class="logo logo-display m-top-10" alt="">
                            <img src="assets/images/logopace.png" class="logo logo-scrolled" alt="">

                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li><a href="#hello">Hello</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#skill">Skill</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>


                <!-- Start Side Menu -->
                <div class="side">
                    <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                    <div class="widget">
                        <h6 class="title">Custom Pages</h6>
                        <ul class="link">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h6 class="title">Additional Links</h6>
                        <ul class="link">
                            <li><a href="#">STT PLN Jakarta</a></li>
                            <li><a href="#">Anjungan Mahasiswa</a></li>
                            <li><a href="#">Lab Komputer STT PLN Jakarta</a></li>
                            <li><a href="#">My Blog</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Side Menu -->

            </nav>


            <!--Home Sections-->

            <section id="hello" class="home bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <!-- <div class="home_text">
                                <h1 class="text-white">WE’RE <br /> CREATIVE DESIGNERS!</h1>
                            </div> -->

                            <!-- <div class="home_btns m-top-40">
                                <a href="https://bootstrapthemes.co" target="_blank" class="btn btn-primary m-top-20">GET STARTED</a>
                                <a href="https://bootstrapthemes.co" target="_blank" class="btn btn-default m-top-20">DOWNLOAD NOW</a>
                            </div> -->

                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->


            <!--About Sections-->
            <section id="about" class="about roomy-100">
                <?php
                include("page/about.php");
                 ?>
            </section> <!--End off About section -->


            <!-- bagian section skills -->
            <section id="skill" class="skill roomy-100">
                <?php
                include("page/skills.php");
                 ?>
            </section>

            <!-- bagian section kontak -->
            <section id="contact" class="contact bg-mega fix">
                <?php
                include("page/contact.php");
                 ?>
            </section>

            <!-- scroll up-->
            <div class="scrollup">
                <a href="#"><i class="fa fa-chevron-up"></i></a>
            </div><!-- End off scroll up -->

            <footer id="footer" class="footer bg-black">
                <div class="container">
                    <div class="row">
                        <div class="main_footer text-center p-top-40 p-bottom-30">
                            <p class="wow fadeInRight" data-wow-duration="1s">
                                Made with
                                <i class="fa fa-heart"></i>
                                by
                                <a target="_blank" href="https://bootstrapthemes.co">Bootstrap Themes</a>
                                2016. All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

            <!-- JS includes -->

            <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
            <script src="assets/js/vendor/bootstrap.min.js"></script>

            <script src="assets/js/jquery.magnific-popup.js"></script>
            <script src="assets/js/jquery.easing.1.3.js"></script>
            <script src="assets/js/slick.min.js"></script>
            <script src="assets/js/jquery.collapse.js"></script>
            <script src="assets/js/bootsnav.js"></script>
            <script src="assets/js/plugins.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>
