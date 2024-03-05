<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <title>SMKN 2 Tangsel</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logo/logosmk.ico') }}">
</head>

<body>

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    <nav class="site-nav mb-5">
        <div class="pb-2 top-bar mb-3">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-lg-9">
                        <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> <span class="d-none d-lg-inline-block">Have a questions?</span></a>
                        <a href="tel:+0217319996" class="small mr-3"><span class="icon-phone mr-2"></span> <span class="d-none d-lg-inline-block">(021) 7319996</span></a>
                        <a href="mailto:smkn2tangsel@gmail.com" class="small mr-3"><span class="icon-envelope mr-2"></span> <span class="d-none d-lg-inline-block">smkn2tangsel@gmail.com</span></a>
                    </div>

                    <div class="col-6 col-lg-3 text-right">
                        <a href="login.html" class="small mr-3">
                            <span class="fas fa-chalkboard-teacher"></span>
                            E-Learning
                        </a>
                        <a href="http://172.18.224.4" target="_blank" class="small">
                            <span class="fas fa-file-alt"></span>
                            E-Rapor
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="sticky-nav js-sticky-header">
            <div class="container position-relative">
                <div class="site-navigation text-center">
                    <a href="{{ url('/') }}" class="logo menu-absolute m-0">
                        <img src="{{ asset('assets/images/logo/logosmk.png') }}" alt="Nama Logo" style="margin-top: -10px; width: 60px; height: 60px;">
                    </a>

                    <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
                        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Beranda</a></li>
                        <li class="has-children ">
                            <a class="{{ request()->is('profil') || request()->is('staff') || request()->is('strukturLembaga') ? 'active' : '' }}">Tentang</a>
                            <ul class="dropdown">
                                <li class="{{ request()->is('profil') ? 'active' : '' }}"><a href="{{ url('profil') }}">Profil Sekolah</a></li>
                                <li class="{{ request()->is('staff') ? 'active' : '' }}"><a href="{{ url('staff') }}">Guru & Staff</a></li>
                                <li class="{{ request()->is('strukturLembaga') ? 'active' : '' }}"><a href="{{ url('strukturLembaga') }}">Struktur Lembaga</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a class="{{ request()->is('dkv') || request()->is('akl') || request()->is('tkr') || request()->is('tsm') || request()->is('elin') ? 'active' : '' }}">Jurusan</a>
                            <ul class="dropdown">
                                <li class="{{ request()->is('dkv') ? 'active' : '' }}"><a href="{{ url('dkv') }}">DKV</a></li>
                                <li class="{{ request()->is('akl') ? 'active' : '' }}"><a href="{{ url('akl') }}">AKL</a></li>
                                <li class="{{ request()->is('tkr') ? 'active' : '' }}"><a href="{{ url('tkr') }}">TKR</a></li>
                                <li class="{{ request()->is('tsm') ? 'active' : '' }}"><a href="{{ url('tsm') }}">TSM</a></li>
                                <li class="{{ request()->is('elin') ? 'active' : '' }}"><a href="{{ url('elin') }}">ELIN</a></li>
                            </ul>
                        </li>
                        <li class="{{ request()->is('facility') ? 'active' : '' }}"><a href="{{ url('facility') }}" >Fasilitas</a></li>
                        <li class="{{ request()->is('extracurricular') ? 'active' : '' }}"><a href="{{ url('extracurricular') }}">Ekstrakulikuler</a></li>
                        <li class="{{ request()->is('bkk') ? 'active' : '' }}"><a href="{{ url('bkk') }}">BKK</a></li>
                        <li class="{{ request()->is('news') ? 'active' : '' }}"><a href="{{ url('news') }}">News</a></li>
                        <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="{{ url('contact') }}">Kontak</a></li>
                        <!-- <li class="has-children">
                            <a href="#">Dropdown</a>
                            <ul class="dropdown">
                                <li><a href="elements.html">Elements</a></li>
                                <li class="has-children">
                                    <a href="#">Menu Two</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Sub Menu One</a></li>
                                        <li><a href="#">Sub Menu Two</a></li>
                                        <li><a href="#">Sub Menu Three</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Menu Three</a></li>
                            </ul>
                        </li> -->
                    </ul>

                    <a href="#" class="btn-book btn btn-danger btn-lg menu-absolute">&nbsp &nbsp PPDB &nbsp &nbsp</a>
                    <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>

                </div>
            </div>
        </div>
    </nav>

    <div class="">
        @yield('content')
    </div>


    <div class="site-footer">


        <div class="container">

            <div class="row">
                <div class="col-lg-3 mr-auto">
                    <div class="widget">
                        <img src="{{ asset('assets/images/logo/logosmk.png') }}" alt="Nama Logo" style="margin-top: -10px; width: 100px; height: 100px;">
                        &nbsp
                        <p style="text-align: justify;">SMKN 2 Tangsel terus mengokohkan komitmennya sebagai pusat pendidikan unggulan yang menghasilkan lulusan siap menghadapi tantangan dan tumbuh bersama dalam dunia kerja.</p>
                    </div> <!-- /.widget -->
                    <div class="widget">
                        <h3>Lest Connect</h3>
                        <ul class="list-unstyled social">
                            <li><a href="https://www.instagram.com/official.smkn2tangsel?igsh=MTR1YTYwczNzenI0"><span class="icon-instagram"></span></a></li>
                            <li><a href="https://www.youtube.com/@smkn2tangerangselatan905"><span class="icon-youtube"></span></a></li>
                            <li><a href="https://www.tiktok.com/@officialsmkn2tangsel?is_from_webapp=1&sender_device=pc"><span class="fab fa-tiktok"></span></a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

                <div class="col-lg-2 ml-auto">
                    <div class="widget">
                        <h3>Use Full Links</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">PPDB</a></li>
                            <li><a href="#">E-Rapor</a></li>
                            <li><a href="#">E-Learning</a></li>
                            <li><a href="#">Portaldik</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->


                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Program Keahlian</h3>
                        <ul class="list-unstyled float-left links ">
                            <li><a href="{{ url('dkv') }}">Desain Komunikasi Visual</a></li>
                            <li><a href="{{ url('akl') }}">Akuntansi</a></li>
                            <li><a href="{{ url('tkr') }}">Teknik Kendaraan Ringan</a></li>
                            <li><a href="{{ url('tsm') }}">Teknik Sepeda Motor</a></li>
                            <li><a href="{{ url('elin') }}">Elektronika Industri</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->
                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Kontak</h3>
                        <ul class="list-unstyled links mb-4">
                            <li><a href="https://maps.app.goo.gl/AkyLqEurjBL2NJxw9" target="_blank"><address> JI Pondok Aren Raya No 52 Kecamatan Pondok Aren Kota Tangerang Selatan 15224</address></a></li>
                            <li><a href="tel://02173199960">(021) 7319996</a></li>
                            <li><a href="mailto:smkn2tangsel@gmail.com">smkn2tangsel@gmail.com</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

            </div> <!-- /.row -->

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p>Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script>. SMKN 2 Kota Tangerang Selatan. &mdash; Powered By <a href="https://idas.com">IDAS</a>
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('assets/js/aos.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/slider.js')}}"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

</body>

</html>