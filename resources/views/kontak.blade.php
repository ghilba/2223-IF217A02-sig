@extends('layout.app')
@section('main')
<div class="gamb"><img style="width: 100%; height: 200px;" src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg"></div>
<section class="desti">
    <div class="kiritod">
    <div class="kiritode">
        <h6>Tentang Kami</h6>
        <img class="gamkon" src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg">
        <p>Destinasi adalah Aplikasi Basis data dan pemetaan untuk</p>
        <p><img src="{{ asset('/img/beranda/email.png') }}" alt="">Email : Ghilba@.com</p>
    </div>
    </div>
    <div class="kirito">
    <div class="kiritoe">
        <h6>KONTAK KAMI</h6>
        <form class="saran">
            <input class ="buttonyc" type="text" placeholder="Nama" name="nama"><br>
            <input class ="buttonyc" type="email" placeholder="Email" name="email"><br>
            <textarea class="buttonyce" type="pesan" name="pesan" placeholder="Tulis pesan anda disini"></textarea><br>
            <button type="submit">Kirim</button>
        </form>
    </div>
    </div>
</section>
@endsection