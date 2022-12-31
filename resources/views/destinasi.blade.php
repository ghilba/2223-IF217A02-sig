@extends('layout.app')
@section('main')
    <section>
        <div class="dest">
            <div class="kiri">
                <div class="atkiri">
                    <div class="atkir">
                        <h4>Pencarian Destinasi :</h4>
                        <hr>
                        <form class="d-flex buttony" method="get">
                            <input class="buttony_searche" type="search" id="search" name="search" aria-label="Search"
                                placeholder="Cari destinasi tempat wisata">
                            <select class="kategori" name="kategori" id="kategori">
                                <option value="">Semua Kategori</option>
                                <option value="budaya">Budaya</option>
                                <option value="Cagar Alam">Cagar Alam</option>
                                <option value="konfensi">Konfensi</option>
                                <option value="pertanian">Pertanian</option>
                            </select>
                        {{-- </form> --}}
                        <p class="pro">Provinsi</p>
                        {{-- <form class="buttonye"> --}}
                            <select class="buttonyet" name="province" id="province">
                                <option value="">Semua Provinsi</option>
                                <option value="jawa barat">Jawa Barat</option>
                                <option value="jawa timur">Jawa Timur</option>
                            </select><br>
                            <button class="cari" type="submit">Cari</button>
                        </form>
                    </div>
                </div>
                <div class="bawkir">
                    @foreach ($destinations as $destination)
                        <div class="horie" >
                            <div>
                                <img class="gakir"
                                    src="https://www.javatravel.net/wp-content/uploads/2022/05/Pondok-Pinus-Palutungan-Kuningan.jpg">
                            </div>
                            <div class="isik">
                                <div class="judul">{{ $destination->title }}</div>
                                <p class="isie">{{ $destination->description }}</p>
                                <div class="sisa">
                                    <hr>
                                    <div class="description"><img src="{{ asset('/img/beranda/locate.png') }}"
                                            alt="">{{ $destination->city }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="horie">
            <div>
              <img class="gakir" src="https://www.javatravel.net/wp-content/uploads/2022/05/Pondok-Pinus-Palutungan-Kuningan.jpg">
            </div>
            <div class="isik">
              <div class="judul">Palutungan</div>
              <p class="isie">Area nongkrong dengan spot foto nongkrong nongkrong nongkrong</p>
              <div class="sisa">
                <hr>
                <div class="description"><img src="{{ asset('/img/beranda/locate.png') }}" alt="">Yogyakarta</div>
              </div>
            </div>
          </div>
          <div class="horie">
            <div>
              <img class="gakir" src="https://www.javatravel.net/wp-content/uploads/2022/05/Pondok-Pinus-Palutungan-Kuningan.jpg">
            </div>
            <div class="isik">
              <div class="judul">Palutungan</div>
              <p class="isie">Area nongkrong dengan spot foto nongkrong nongkrong nongkrong</p>
              <div class="sisa">
                <hr>
                <div class="description"><img src="{{ asset('/img/beranda/locate.png') }}" alt="">Yogyakarta</div>
              </div>
            </div>
          </div>
          <div class="horie">
            <div>
              <img class="gakir" src="https://www.javatravel.net/wp-content/uploads/2022/05/Pondok-Pinus-Palutungan-Kuningan.jpg">
            </div>
            <div class="isik">
              <div class="judul">Palutungan</div>
              <p class="isie">Area nongkrong dengan spot foto nongkrong nongkrong nongkrong</p>
              <div class="sisa">
                <hr>
                <div class="description"><img src="{{ asset('/img/beranda/locate.png') }}" alt="">Yogyakarta</div>
              </div>
            </div>
          </div>
          <div class="horie">
            <div>
              <img class="gakir" src="https://www.javatravel.net/wp-content/uploads/2022/05/Pondok-Pinus-Palutungan-Kuningan.jpg">
            </div>
            <div class="isik">
              <div class="judul">Palutungan</div>
              <p class="isie">Area nongkrong dengan spot foto nongkrong nongkrong nongkrong</p>
              <div class="sisa">
                <hr>
                <div class="description"><img src="{{ asset('/img/beranda/locate.png') }}" alt="">Yogyakarta</div>
              </div>
            </div>
          </div>               --}}
                </div>
            </div>
            <div class="mapi" id="map" style="width: 100%; height: 100%;">
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
            </div>
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
