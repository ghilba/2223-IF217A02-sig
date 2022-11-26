<!doctype html>
<html lang="en">

<head>
    <script type="text/javascript" src="http://www.domainkamu.com/jquery.flexslider-min.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                slideshowSpeed: 1000,
                animationDuration: 1000
            });
        });
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/856c08272a.js" crossorigin="anonymous"></script>

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
        integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/splide.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    <title>Beranda</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="destination_img" src="{{ asset('/img/beranda/eufloria1.png') }}" alt="...">
            </a>
            {{-- search --}}
            <nav class="navbar navbar-dark">
                <div class="box">
                    <div class="container-fluid container-1">
                        <form class="d-flex button">
                            <img class="magnifier_icon" src="{{ asset('/img/beranda/magnifier.png') }}" alt="">
                            {{-- <span class="magnifier_icon"><i class="fa fa-search"></i></span> --}}
                            <input class="form-control button_search" type="search" id="search" aria-label="Search">
                            <button class="btn button_cari" type="submit">Cari</button>
                        </form>
                    </div>
                </div>
            </nav>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/">Beranda <spans class="sr-only">(current)</spans>
                        </a>
                    <a class="nav-item nav-link" href="/berita">Berita</a>
                    <a class="nav-item nav-link" href="/destinasi">Destinasi</a>
                    <a class="nav-item nav-link" href="/kontak">Kontak</a>
                    <a class="nav-item nav-link" href="#wrab"><button>Masuk</button></a>
                    <a class="nav-item nav-link btn btn-primary" id="button" href="#">Daftar</a>
                </div>
            </div>
        </div>
    </nav>
    <div href="" class="wrab" id="wrab">
        <div class="bg-color">
            <div class="modal" id="modal">
                <button class="bten3"><a href="">X</a></button>
                <h1 class="label">Masuk Destinasi</h1>
                <form action="" method="get" accept-charset="utf-8">
                    <input type="text" placeholder="Email" id="name">
                    <input type="password" placeholder="Password" id="sandi">
                    <button type="submit" class="bten2">Masuk</button>
                    <a href="#" class="lupa">Lupa Password?</a>
                    <p class="daftar"><a href="#">Daftar</a></p>
                </form>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
         integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
         integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
     </script>
     -->

    <script src="/js/swiper-bundle.min.js"></script>
    <script src="/js/splide.min.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/scripte.js"></script>

    <main>
        @yield('main')
    </main>
    @yield('js')

    <footer class="footer">
        <button>Kunjungi</button>
    </footer>
</body>

</html>
