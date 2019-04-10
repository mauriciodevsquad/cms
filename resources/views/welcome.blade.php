@extends('layouts.app')

@section('meta')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <meta property="og:title" content="Pronto - Client Management Software">
    <meta property="og:description" content="Whether you are a plumber or a multi-million dollar consultant, Pronto has all the tools needed to
                        manage your clients and consultations. Whatever your industry is, Pronto is ready to help you.">
    <meta property="og:image" content="http://cms.test/thumbnail.jpg">
    <meta property="og:url" content="http://cms.test">

    <meta name="twitter:title" content="Pronto - Client Management Software">
    <meta name="twitter:description" content="Whether you are a plumber or a multi-million dollar consultant, Pronto has all the tools needed to
                        manage your clients and consultations. Whatever your industry is, Pronto is ready to help you.">
    <meta name="twitter:image" content="http://cms.test/thumbnail.jpg">

    <link href="css/style.css" rel="stylesheet">

@endsection


@section('content')

<!--==========================
  Intro Section
============================-->
<section id="intro" class="clearfix">
    <div class="container">

        <div class="intro-img">
            <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>

        <div class="intro-info">
            <h2>Managing clients<br>the <span>easy</span> way.<br></h2>
            <div>
                <a href="{{route('register')}}" class="btn-get-started scrollto">Get Started</a>
                <a href="#about" class="btn-services scrollto">Learn More</a>
            </div>
        </div>

    </div>
</section><!-- #intro -->

<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>The best solution for your <strike>team</strike> <span style="color: #C1172B">Dream</span></h3>
                <p>Whether you are a plumber or a multi-million dollar consultant, Pronto has all the tools needed to
                    manage your clients and consultations.</p>
            </header>

            <div class="row about-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <p>
                        One of the hassles of being a consultant or business owner is that you need a place keep your
                        contacts and consults together. Pronto lets you manage all of that with a simple and sleek
                        design. Great fit for:
                    </p>

                    <div class="icon-box wow fadeInUp">
                        <div class="icon"><i class="fa fa-briefcase"></i></div>
                        <h4 class="title"><a>Business Consultant</a></h4>
                        <p class="description">Manage your consultations and assign them to someone in your team. If you
                            work solo, keep track of who needs you.</p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-wrench"></i></div>
                        <h4 class="title"><a>Handyman</a></h4>
                        <p class="description">Host a Request Form online so people can reach you at all times. Then
                            message past clients and offer your services.</p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon"><i class="fa fa-book"></i></div>
                        <h4 class="title"><a>Tutor</a></h4>
                        <p class="description">Students needing your help multiple times a week? No problem. Manage
                            different types of meeting such as homework, Spanish conversation, etc. </p>
                    </div>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="img/about-img.svg" class="img-fluid" alt="">
                </div>
            </div>

            <div class="row about-extra">
                <div class="col-lg-6 wow fadeInUp">
                    <img src="img/about-extra-2.svg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                    <h4>Organize your clients and when they need you</h4>
                    <p>
                        One of the hassles of being a consultant is to remember and keep track of all you clients, so you can contact and follow up with them. Pronto makes this process easy and simple and keeps a list of all your clients!
                    </p>
                    <p>
                        Also, if a existing client or a new one needs you, Pronto creates a web page where they can request
                        your services. This allows you to publish and share on social media your business and consultation.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- #about -->

    <!--==========================
      Pricing Section
    ============================-->
    <section id="pricing" class="wow fadeIn">
        <div class="container">
            <header class="section-header">
                <h3>Pricing</h3>
                <p>Pronto is an open source project. In other words, it's free!</p>
            </header>

            <div class="row row-eq-height justify-content-center">

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="">U$0</i>
                        <div class="card-body">
                            <h5 class="card-title">FREE</h5>
                            <p class="card-text">No credit card required.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row counters">
                <div class="col-12 text-center">
                    <a href="/register" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3>Services</h3>
                <p>Here is what Pronto can offer you. Yes, it's awesome, we know.</p>
            </header>

            <div class="row">

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-chatboxes-outline" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a>Request Form Online</a></h4>
                        <p class="description">Create a request page where clients and leads can ask for your services.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
                        <h4 class="title"><a>Client Management</a></h4>
                        <p class="description">Query through your clients and follow up on requests.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #services -->

<!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="section-bg" style="background: #004a99;">
        <div class="container">

            <header class="section-header">
                <h3 style="color: #ffffff !important;">Testimonials</h3>
            </header>

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="owl-carousel testimonials-carousel wow fadeInUp">

                        <div class="testimonial-item">
                            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                            <h3>David Aguilar</h3>
                            <h4>Student</h4>
                            <p>
                                Pronto is incredibly easy to use and I absolutely recommend it. An easy way to manage clients.
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                            <h3>Vitali Karmanov</h3>
                            <h4>Software Engineer</h4>
                            <p>
                                I love how Pronto has such a simple and intuitive design. I absolutely recommend it for those that want to keep track of their clients and consultations!
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                            <h3>Valeria Butler</h3>
                            <h4>Musician</h4>
                            <p>
                                I have always wondered how would I manage my students and clients in an easy way. I have to look no further. Pronto is the best way!
                            </p>
                        </div>

                    </div>

                </div>
            </div>


        </div>
    </section><!-- #testimonials -->


    <!--==========================
      Demo Section
    ============================-->
    <section id="clients" class="section-bg">

        <div class="container">

            <div class="section-header">
                <h3>Demo</h3>
                <p>Here is a video explaining how Pronto works. So easy anyone can do it!</p>
            </div>

            <div class="col-12 text-center">
                <iframe class="demo-video" src="https://www.youtube.com/embed/8kMVq1CxvLE?start=6" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container-fluid">

            <div class="section-header">
                <h3>Contact Us</h3>
            </div>

            <div class="row wow fadeInUp">

                <div class="col-12">
                    <div class="row">
                        <div class="col-md-5 info">
                            <i class="ion-ios-location-outline"></i>
                            <p>Salt Lake City, UT, USA</p>
                        </div>
                        <div class="col-md-4 info">
                            <i class="ion-ios-email-outline"></i>
                            <p>kiyama14@gmail.com</p>
                        </div>
                        <div class="col-md-3 info">
                            <i class="ion-ios-telephone-outline"></i>
                            <p>+1 801 897 9002</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->

</main>

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-info">
                    <h3>Pronto</h3>
                    <p>
                        Whether you are a plumber or a multi-million dollar consultant, Pronto has all the tools needed to
                        manage your clients and consultations. Whatever your industry is, Pronto is ready to help you.
                        </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Overview</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        Salt Lake City, UT<br>
                        United States <br>
                        <strong>Phone:</strong> +1 801 897 9002<br>
                        <strong>Email:</strong> kiyama14@gmail.com<br>
                    </p>
                </div>

            </div>
        </div>
    </div>

</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

@endsection

@section('bottom-meta')

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/mobile-nav/mobile-nav.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>


@endsection
