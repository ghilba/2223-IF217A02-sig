@extends('layout.app')
@section('main')
<div class="gamb"><img style="width: 100%; height: 200px;" src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg"></div>
<section class="dest">
    <div class="kirito">
        <div class="atkiri">
            <form class="buttony">
                <input class ="" type="text" placeholder="Nama" name="nama"><br>
                <input class ="" type="email" placeholder="Email" name="email"><br>
                <textarea class="" type="pesan" name="pesan" placeholder="Tulis pesan anda disini" maxlength="500"></textarea><br>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </div>
    <div class="kanan">
        <h6>Tentang Kami</h6>
        <img style="width: 422px; height: 240px;" src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg">
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