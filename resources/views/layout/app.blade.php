<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/856c08272a.js" crossorigin="anonymous"></script>

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/splide.min.css') }}">
    
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
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/">Beranda <spans class="sr-only">(current)</spans></a>
            <a class="nav-item nav-link" href="/berita">Berita</a>
            <a class="nav-item nav-link" href="/destinasi">Destinasi</a>
            <a class="nav-item nav-link" href="/kontak">Kontak</a>
            {{-- <a class="nav-item nav-link btn btn-primary" id="button" href="#">Masuk</a> --}}
            <button onclick="document.getElementById('id01').style.display='block'" class="nav-item nav-link btn btn-primary" id="button">Masuk</button>
            <div id="id01" class="modal"> 
              <form class="modal-content animate" action="/action_page.php" method="post">
                <div onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</div>
                <div class="kontener">
                  <h6>MASUK DESTINASI</h6>
                  <input class ="login" type="email" placeholder="Email" name="email"><br>
                  <input class ="login" type="password" placeholder="Password" name="password"><br>
                  <button class="kirime" type="submit">Masuk</button>
                  <a href="#" class="lupa">Lupa Password?</a>
                  <p><a class="daftar" href="#">Belum daftar</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </nav>

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     <!-- Option 2: Separate Popper and Bootstrap JS -->
     <!--
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     -->

     <script src="/js/swiper-bundle.min.js"></script>
     <script src="/js/splide.min.js"></script>
     <script src="/js/map.js"></script>
     <script src="/js/script.js"></script>
     <script src="/js/scripte.js"></script>
     <script src="/js/scripted.js"></script>
     
    <main>
        @yield('main')
    </main>
        @yield('js')
  </body>
</html>