<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
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

    <title>Beranda</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="/home">
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/">Beranda <spans class="sr-only">(current)</spans></a>
            <a class="nav-item nav-link" href="/berita">Berita</a>
            <a class="nav-item nav-link" href="/destinasi">Destinasi</a>
            <a class="nav-item nav-link" href="/kontak">Kontak</a>
            <a class="nav-item nav-link" href="#">Masuk</a>
            <a class="nav-item nav-link btn btn-primary" id="button" href="#">Daftar</a>
          </div>
        </div>
      </div>
    </nav>

    {{-- MAPS --}}
    <div id="map" style="width: 100%; height: 400px;"></div>
    <script>
      var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		// attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
		// 	'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
		// 	'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});

      var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
          // attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
          //   '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
          //   'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
          id: 'mapbox/satellite-v9'
        });


      var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          // attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

      var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
          // attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
          //   '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
          //   'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
          id: 'mapbox/dark-v10'
        });

      var map = L.map('map', {
        center: [-2.548926, 118.0148634],
        zoom: 5,
        layers: [peta1]
      });

      var baseMaps = {
        "OpenStreetMap": peta1,
        "Satelite": peta2,
        "Mapbox Streets": peta3,
        "Dark": peta4
      };

      var layerControl = L.control.layers(baseMaps).addTo(map);

    </script>

    <section class="destination" id="destination">
      <div class="container-2">
        <div class="row">
            <div class="col-sm-12">
            <h3 class="text-center">DESTINASI TERBARU</h3>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="card text-center">
              <img src="{{ asset('/img/beranda/HEHA.png') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">HeHa Ocean View</h5>
                <p class="card-text"><img src="{{ asset('/img/beranda/locate.png') }}" alt=""> Yogyakarta, Indonesia</p>
                <a href="#" class="btn" id="buttonBtn">kunjungi</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>