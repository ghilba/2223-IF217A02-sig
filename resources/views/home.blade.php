@extends('layout.app')
@section('main')
    <section class="map" id="map">
        {{-- MAPS --}}
        <div id="map" style="width: 100%; height: 400px;"></div>
        <script>
            var peta1 = L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    // attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    // 	'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    // 	'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox/streets-v11'
                });

            var peta2 = L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    // attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    //   '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    //   'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox/satellite-v9'
                });


            var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                // attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            });

            var peta4 = L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
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
    </section>

    {{-- destination --}}
    <section class="destination" id="destination">
        <div class="container-2">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center">DESTINASI TERBARU</h3>
                    <hr>
                </div>
            </div>

            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        @foreach ($destinations as $destination)
                            <div class="card swiper-slide">
                                <div class="kartu">
                                    <div class="card-image">
                                        <img src="/img/beranda/HEHA.png" alt="" class="card-img">
                                    </div>
                                    <div class="card-content">
                                        <h2 class="name">{{ $destination->title }}</h2>
                                        <p class="description">{{ $destination->city }}</p>
                                        <button class="buttone">Kunjungi</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        

                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- masuk sini -->

        </div>

    </section>
    <section class="splide" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide"><img style="width: 100%; height: 400px;"
                        src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg"></li>
                <li class="splide__slide"><img style="width: 100%; height: 400px;"
                        src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg"></li>
                <li class="splide__slide"><img style="width: 100%; height: 400px;"
                        src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg"></li>
            </ul>
        </div>
    </section>
    <section class="isi">
        <div class="row">
            <div class="cardo cardo-green">
                <b id="nbr">3</b>
                <div class="containere containere-green">
                    <p>Total Transaksi</p>
                </div>
            </div>
            <div class="cardo cardo-blue">
                <b id="nbre">1</b>
                <div class="containere containere-blue">
                    <p>Transaksi Lunas</p>
                </div>
            </div>
            <div class="cardo cardo-red">
                <b id="nbra">2</b>
                <div class="containere containere-red">
                    <p>Transaksi Belum Lunas</p>
                </div>
            </div>
        </div>
    </section>


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
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/splide.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/scripte.js"></script>
@endsection
