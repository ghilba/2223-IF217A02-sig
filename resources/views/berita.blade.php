@extends('layout.app')
@section('main')

<section class="beurita">
    <div class="gambarat">
      <div class="konteng">
        <h1 class="h1berita">BERITA PARIWISATA INDONESIA</h1>
        <button class="buttoneg">kunjungi</button>
      </div>
    </div>
<div class="cards">
         <div class="services">
           @foreach ($news as $news)
                    <div class="contenti contenti-1">
                        <div class="beurit"><img style="width: 233px;"
                                src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg">
                        </div>
                        <h2>
                            {{ $news->title }}
                        </h2>
                        <p>
                            {{ $news->content }}
                        </p>
                    </div>
                @endforeach
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
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/splide.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/scripte.js"></script>
@endsection

