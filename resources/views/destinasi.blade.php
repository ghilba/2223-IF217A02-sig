@extends('layout.app')
@section('main')
<section class="dest">
    <div class="kiri">
        <div class="atkir">
            <h4>Pencarian Destinasi :</h4>
            <hr>
            <form class="d-flex buttony">
                <input class="buttony_searche" type="search" id="search" aria-label="Search" placeholder="Cari destinasi tempat wisata">
                <select name="tempat" id="tempat">
                    <option value="">Semua Kategori</option>
                    <option value="budaya">Budaya</option>
                    <option value="Cagar Alam">Cagar Alam</option>
                    <option value="konfensi">Konfensi</option>
                    <option value="pertanian">Pertanian</option>
                </select>
            </form>
            <p>Provinsi</p>
        </div>
        <div class="bawkir">
            <h4>overflow ini</h4>
        </div>
    </div>
    <div id="map" style="width: 100%; height: 500px;">
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
    </div>
</section>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/splide.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/scripte.js"></script>
@endsection