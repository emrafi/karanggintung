<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Ollie landing page.">
    <meta name="author" content="Devcrud">
    <title>Karanggintung</title>

    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('frontend/vendors/themify-icons/css/themify-icons.css') }}">

    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/vendors/owl-carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/owl-carousel/css/owl.theme.default.css') }}">

    <!-- Bootstrap + Ollie main styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/ollie.css') }}">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav id="scrollspy" class="navbar navbar-light bg-light navbar-expand-lg fixed-top" data-spy="affix"
        data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="frontend/imgs/brand.svg" alt=""
                    class="brand-img"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('pantau') }}">CCTV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                    <li class="nav-item ml-0 ml-lg-4">
                        <a class="nav-link btn btn-primary" href="{{ url('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <header id="home" class="header">
        <div class="overlay"></div>

        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="container">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="carousel-title">Karanggintung<br> Desa Aman</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="carousel-title">Karanggintung <br> Desa Tentram</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="carousel-title">Karanggintung <br> Desa Ramah</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- <section class="section" id="cctv">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="frontend/imgs/cctv1.png" alt="">
                </div>
                <div class="col-md-6">
                    <h1>Pantau Desa</h1>
                    <p>Memastikan pengawasan di segala sudut desa dan memberikan kenyamanan untuk seluruh masyarakat.
                    </p>
                    <a class="btn btn-primary" href="{{ url('pantau') }}">Cek CCTV</a>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="section" id="blog">
        <div class="container mb-3">
            <h6 class="xs-font mb-0">Aktual dan Terpercaya.</h6>
            <h3 class="section-title mb-5">Blog Kami</h3>

            <div class="blog-wrapper">
                <div class="img-wrapper">
                    <img src="frontend/imgs/img-3.jpg"
                        alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <div class="date-container">
                        <h6 class="day">29</h6>
                        <h6 class="mun">Jun</h6>
                    </div>
                </div>
                <div class="txt-wrapper">
                    <h4 class="blog-title">Lorem ipsum dolor.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum vitae ducimus dolor sed
                        numquam, assumenda non dolorem in facilis eius alias voluptates, fugit maiores aspernatur ad rem
                        saepe molestiae consequuntur. adipisicing elit. Repellat nam placeat laboriosam dolorum aperiam
                        fuga voluptate, quis ea vel ab sunt incidunt quasi, molestias atque deserunt voluptates quae
                        voluptatum sit.</p>

                    <a href="#" class="badge badge-info">Graphic Design</a>

                    <h6 class="blog-footer">
                        <a href="javascript:void(0)"><i class="ti-user"></i> Admin </a> |
                        <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 213 </a> |
                        <a href="javascript:void(0)"><i class="ti-comments"></i> 123</a>
                    </h6>
                </div>
            </div>
        </div>
    </section>


    <section class="section" id="about">
        <div class="container">
            <div class="row align-items-center mr-auto">
                <div class="col-md-4">
                    <h6 class="xs-font mb-0">Karanggintung Srawung.</h6>
                    <h3 class="section-title">Tentang Kami</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt, unde aperiam aliquid quia
                        repudiandae, ex harum quis amet delectus maxime, tempora possimus aut laboriosam magni corrupti
                        labore. Doloremque, sit?</p>

                    <a href="javascript:void(0)">Read more...</a>
                </div>
                <div class="col-sm-6 col-md-4 ml-auto">
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-calendar"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">15+</h4>
                            <p>onsectetur perspiciatis</p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-face-smile"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">125+</h4>
                            <p>onsectetur perspiciatis</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-star"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">3434+</h4>
                            <p>onsectetur perspiciatis</p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-user"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">80+</h4>
                            <p>onsectetur perspiciatis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="gallery">
        <div class="container">
            <h6 class="xs-font mb-0">Megutamakan kualitas.</h6>
            <h3 class="section-title pb-4">Produk Kami</h3>
        </div>

        <div id="owl-portfolio" class="owl-carousel owl-theme mt-4">
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="frontend/imgs/img-1.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page"
                    class="box-shadow">
                <h6 class="mt-3 mb-2">Fuga asperiores</h6>
                <p class="xs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a>
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="frontend/imgs/img-2.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page"
                    class="box-shadow">
                <h6 class="mt-3 mb-2">Voluptatibus iure!</h6>
                <p class="xs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a>
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="frontend/imgs/img-3.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page"
                    class="box-shadow">
                <h6 class="mt-3 mb-2">Autem minus animi</h6>
                <p class="xs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a>
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="frontend/imgs/img-4.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page"
                    class="box-shadow">
                <h6 class="mt-3 mb-2">Sed eligendi</h6>
                <p class="xs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a>
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="frontend/imgs/img-8.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page"
                    class="box-shadow">
                <h6 class="mt-3 mb-2">Totam eveniet assumenda!</h6>
                <p class="xs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a>
            <a href="javascript:void(0)" class="item expertises-item">
                <img src="frontend/imgs/img-9.jpg"alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page"
                    class="box-shadow">
                <h6 class="mt-3 mb-2">Sapiente dolore ut</h6>
                <p class="xs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </a>
        </div>
    </section>

    <section id="contact" class="section pb-0">
        <div class="container">
            <h6 class="xs-font mb-0">Mengedepankan pelayanan.</h6>
            <h3 class="section-title mb-5">Kontak Kami</h3>

            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-5">
                    <form class="contact-form">
                        <div class="form-row">
                            <div class="col form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="5" class="form-control"
                                placeholder="Your Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-none d-md-block order-1">
                    <ul class="list">
                        <li class="list-head">
                            <h6>INFORMASI</h6>
                        </li>
                        <li class="list-body">
                            <p class="py-2">Hubungi kami, balasan akan segera dikirimkan maksimal dalam 1 x 24 jam.
                            </p>
                            <p class="py-2"><i class="ti-location-pin"></i> Karanggintung, Sumbang, Banyumas, Jawa
                                Tengah</p>
                            <p class="py-2"><i class="ti-email"></i> karanggintungmakmur@gmail.com</p>
                            <p class="py-2"><i class="ti-microphone"></i> (123) 456-7890</p>

                        </li>
                    </ul>
                </div>
            </div>

            <footer class="footer mt-5 border-top">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 text-center text-md-left">
                        <p class="mb-0">Copyright
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; <a target="_blank" href="">emrv</a>
                        </p>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <div class="social-links">
                            <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    <!-- core  -->
    <script src="{{ asset('frontend/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('frontend/vendors/bootstrap/bootstrap.bundle.js') }}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{ asset('frontend/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- Owl carousel  -->
    <script src="{{ asset('frontend/vendors/owl-carousel/js/owl.carousel.js') }}"></script>

    <!-- Ollie js -->
    <script src="{{ asset('frontend/js/ollie.js') }}"></script>

</body>

</html>
