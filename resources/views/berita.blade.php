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
                @foreach ($news as $n)
                    <div class="contenti text-center">
                        <img src="{{ asset('/img/beranda/HEHA.png') }}" class="card-img-top" alt="...">
                        <div class="contenti-body">
                            <h5 class="contenti-title">{{ $n->title }}</h5>
                            <p class="contenti-text">{{ Str::limit($n->content, 100) }}</p>
                            <hr>
                            <p class="contenti-textw"><img src="{{ asset('storage/'.$n->image ) }}" alt=""> 17
                                Agustus 1945</p>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="contenti text-center">
              <img src="{{ asset('/img/beranda/HEHA.png') }}" class="card-img-top" alt="...">
              <div class="contenti-body">
                <h5 class="contenti-title">Berita</h5>
                <p class="contenti-text">Ini isinya berita apa aja maunya maneh</p>
                <hr>
                <p class="contenti-textw"><img src="{{ asset('/img/beranda/jam.png') }}" alt=""> 17 Agustus 1945</p>
              </div>
            </div>
            <div class="contenti text-center">
              <img src="{{ asset('/img/beranda/HEHA.png') }}" class="card-img-top" alt="...">
              <div class="contenti-body">
                <h5 class="contenti-title">Berita</h5>
                <p class="contenti-text">Ini isinya berita apa aja maunya maneh</p>
                <hr>
                <p class="contenti-textw"><img src="{{ asset('/img/beranda/jam.png') }}" alt=""> 17 Agustus 1945</p>
              </div>
            </div>
            <div class="contenti text-center">
              <img src="{{ asset('/img/beranda/HEHA.png') }}" class="card-img-top" alt="...">
              <div class="contenti-body">
                <h5 class="contenti-title">Berita</h5>
                <p class="contenti-text">Ini isinya berita apa aja maunya maneh</p>
                <hr>
                <p class="contenti-textw"><img src="{{ asset('/img/beranda/jam.png') }}" alt=""> 17 Agustus 1945</p>
              </div>
            </div> --}}
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
