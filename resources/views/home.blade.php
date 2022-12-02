@extends('layout.app')
@section('main')
  <section class="map" id="map">
    {{-- MAPS --}}
    <div id="map" style="width: 100%; height: 500px;"></div>
  </section>
  
  {{-- destination --}}

<h1>COBA DULUUUU</h1>

<section id="featured-product" class="splide" aria-label="Splide Basic HTML Example">
  <div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide" id="kon">
        <div class="kartu">
          <div class="card-image">
            <img src="https://www.javatravel.net/wp-content/uploads/2022/05/Pondok-Pinus-Palutungan-Kuningan.jpg" alt="" class="card-img">
          </div>
          <div class="card-content">
            <h2 class="name">Palutungan</h2>
            <p class="description"><img src="{{ asset('/img/beranda/locate.png') }}" alt="">Yogyakarta</p>
            <button class="buttone">Kunjungi</button>
          </div>
        </div>
      </li>
      <li class="splide__slide" id="kon">
        <div class="kartu">
          <div class="card-image">
            <img src="https://www.javatravel.net/wp-content/uploads/2022/05/Pondok-Pinus-Palutungan-Kuningan.jpg" alt="" class="card-img">
          </div>
          <div class="card-content">
            <h2 class="name">Palutungan</h2>
            <p class="description"><img src="{{ asset('/img/beranda/locate.png') }}" alt="">Yogyakarta</p>
            <button class="buttone">Kunjungi</button>
          </div>
        </div>
      </li>
      <li class="splide__slide" id="kon">
        <div class="kartu">
          <div class="card-image">
            <img src="https://www.javatravel.net/wp-content/uploads/2022/05/Pondok-Pinus-Palutungan-Kuningan.jpg" alt="" class="card-img">
          </div>
          <div class="card-content">
            <h2 class="name">Palutungan</h2>
            <p class="description"><img src="{{ asset('/img/beranda/locate.png') }}" alt="">Yogyakarta</p>
            <button class="buttone">Kunjungi</button>
          </div>
        </div>
      </li>
      <li class="splide__slide" id="kon">
        <div class="kartu">
          <div class="card-image">
            <img src="https://www.javatravel.net/wp-content/uploads/2022/05/Pondok-Pinus-Palutungan-Kuningan.jpg" alt="" class="card-img">
          </div>
          <div class="card-content">
            <h2 class="name">Palutungan</h2>
            <p class="description"><img src="{{ asset('/img/beranda/locate.png') }}" alt="">Yogyakarta</p>
            <button class="buttone">Kunjungi</button>
          </div>
        </div>
      </li>
		</ul>
  </div>
</section>

  {{-- <section class="destination" id="destination">
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
                    <div class="card swiper-slide">
                    <div class="kartu">
                            <div class="card-image">
                            <img src="https://www.javatravel.net/wp-content/uploads/2022/05/Pondok-Pinus-Palutungan-Kuningan.jpg" alt="" class="card-img">
                            </div>


                        <div class="card-content">
                            <h2 class="name">Palutungan</h2>
                            <p class="description"><img src="{{ asset('/img/beranda/locate.png') }}" alt="">Yogyakarta</p>

                            <button class="buttone">Kunjungi</button>
                        </div>
                    </div>
                    </div>
                    <div class="card swiper-slide">
                    <div class="kartu">
                            <div class="card-image">
                            <img src="https://www.javatravel.net/wp-content/uploads/2022/05/Pondok-Pinus-Palutungan-Kuningan.jpg" alt="" class="card-img">
                            </div>

                        <div class="card-content">
                            <h2 class="name">Palutungan</h2>
                            <p class="description"><img src="{{ asset('/img/beranda/locate.png') }}" alt="">Yogyakarta</p>

                            <button class="buttone">Kunjungi</button>
                        </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                    <div class="kartu">

                            

                            <div class="card-image">
                            <img src="https://www.javatravel.net/wp-content/uploads/2022/05/Pondok-Pinus-Palutungan-Kuningan.jpg" alt="" class="card-img">
                            </div>


                        <div class="card-content">
                            <h2 class="name">Palutungan</h2>
                            <p class="description"><img src="{{ asset('/img/beranda/locate.png') }}" alt="">Yogyakarta</p>

                            <button class="buttone">Kunjungi</button>
                        </div>
                        </div>
                    </div>
  
                    <div class="card swiper-slide">
                        <div class="kartu">

                            

                            <div class="card-image">
                                <img src="https://www.javatravel.net/wp-content/uploads/2022/05/Pondok-Pinus-Palutungan-Kuningan.jpg" alt="" class="card-img">
                            </div>


                        <div class="card-content">
                            <h2 class="name">Palutungan</h2>
                            <p class="description"><img src="{{ asset('/img/beranda/locate.png') }}" alt="">Yogyakarta</p>

                            <button class="buttone">Kunjungi</button>
                        </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                    <div class="kartu">

                            

                            <div class="card-image">
                            <img src="/img/beranda/HEHA.png" alt="" class="card-img">
                            </div>


                        <div class="card-content">
                            <h2 class="name">Palutungan</h2>
                            <p class="description"><img src="{{ asset('/img/beranda/locate.png') }}" alt="">Yogyakarta</p>

                            <button class="buttone">Kunjungi</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        
    </div>
    
  </section> --}}

<section id="new-product" class="splide" aria-label="Splide Basic HTML Example">
  <div class="splide__track">
		<ul class="splide__list">
      <li class="splide__slide"><img style="width: 100%; height: 400px;" src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg"></li>
      <li class="splide__slide"><img style="width: 100%; height: 400px;" src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg"></li>
			<li class="splide__slide"><img style="width: 100%; height: 400px;" src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg"></li>
			<li class="splide__slide"><img style="width: 100%; height: 400px;" src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg"></li>
			<li class="splide__slide"><img style="width: 100%; height: 400px;" src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg"></li>
		</ul>
  </div>
</section>

<section class="isi">
<div class="cardse">
         <div class="servicese">
            <div class="contentie text-center">
              <div class="contentie-body">
                <h1>50</h1>
                <hr>
                <p><h3>Total Destinasi</h3></p>
              </div>
            </div>
            <div class="contentie text-center">
              <div class="contentie-body">
                <h1>50</h1>
                <hr>
                <p><h3>Total Destinasi</h3></p>
              </div>
            </div>
            <div class="contentie text-center">
              <div class="contentie-body">
                <h1>50</h1>
                <hr>
                <p><h3>Total Destinasi</h3></p>
              </div>
            </div>
         </div>
      </div>
</section>
<section>
  <footer class="footer">
    <div class="isif">
      <div class="teksto">
        <img class="genk" src="/img/beranda/line.png">
        <h1 class="nanya">PUNYA PERTANYAAN</h1>
        <p class="lanjut">untuk informasi lebih lanjut</p>
      </div>
      <div class="kunjung">
        <button class="buttonek">
          <h6 class="kaki">Kontak</h6>
          <img class="kak" src="{{ asset('/img/beranda/email.png') }}" alt="">
        </button>
      </div>
    </div>
  </footer>
</section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/splide.min.js"></script>
    <script src="js/map.js"></script>
    <script src="js/script.js"></script>
    <script src="js/scripte.js"></script>
@endsection
