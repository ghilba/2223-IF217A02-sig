@extends('layout.app')
@section('main')
    <section class="beurita">
        <div class="gamb"><img style="width: 100%; height: 200px;"
                src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg"></div>
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
                {{-- <div class="contenti contenti-2">
               <div class="beurit"><img style="width: 233px;" src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg"></div>
               <h2>
                  Berita
               </h2>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error?
               </p>
            </div>
            <div class="contenti contenti-3">
               <div class="beurit"><img style="width: 233px;" src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg"></div>
               <h2>
                  Berita
               </h2>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error?
               </p>
            </div>
         </div> --}}
            </div>
    </section>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/splide.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/scripte.js"></script>
@endsection
