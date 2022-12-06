@extends('layout.app')
@section('main')
<div class="gambarat">
    <div class="konteng">
        <h1 class="h1kontak">KONTAK KAMI</h1>
        <button class="buttoneg">kunjungi</button>
    </div>
</div>
<section class="desti">
    <div class="kiritod">
    <div class="kiritoe">
        <h6>Tentang Kami</h6>
        <img class="gamkon" src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg">
        <p class="konk">Destinasi adalah Aplikasi Basis data dan pemetaan untuk untuk untuk untuk untuk</p>
        <img class="kank" src="{{ asset('/img/beranda/email.png') }}" alt="">
        <span class="kenk">Mail :</span>
        <span class="kunk">Ghilba@.com</span>
    </div>
    </div>
    <div class="kirito">
    <div class="kiritoe">
        <h6>KONTAK KAMI</h6>
        <form class="saran">
            <input class ="buttonyc" type="text" placeholder="Nama" name="nama"><br>
            <input class ="buttonyc" type="email" placeholder="Email" name="email"><br>
            <textarea class="buttonyce" type="pesan" name="pesan" placeholder="Tulis pesan anda disini"></textarea><br>
            <button class="kirim" type="submit">Kirim</button>
        </form>
    </div>
    </div>
</section>
@endsection