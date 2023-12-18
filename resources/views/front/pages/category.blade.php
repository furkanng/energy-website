@extends('front.layout.app')

@section('title', 'Home Page')
@section('content')

    <style>
        .product-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
    </style>



    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Ürün Grupları</h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.product") }}"><img src="{{asset("front/assets/img/elektrik-motoru.jpg")}}"
                                                            class="rounded-circle img-fluid borderd product-image"
                                                            style="{witdh:10px}"></a>
                <h5 class="text-center mt-3 mb-3">Elektrik Motorları</h5>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.product") }}"><img
                        src="{{asset("front/assets/img/elektrik-malzemeleri-toptan.jpg")}}"
                        class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Elektrik Malzemeleri</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.product") }}"><img src="{{asset("front/assets/img/reduktor.png")}}"
                                                            class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Redüktörler</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.product") }}"><img src="{{asset("front/assets/img/aspirator.webp")}}"
                                                            class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Fan ve Aspiratörler</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.product") }}"><img src="{{asset("front/assets/img/manyetik-Fren.png")}}"
                                                            class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Manyetik Frenler</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.product") }}"><img src="{{asset("front/assets/img/kaplinkasnak.jpg")}}"
                                                            class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Kaplin ve Kasnaklar</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.product") }}"><img src="{{asset("front/assets/img/pompa.jpg")}}"
                                                            class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Pompalar</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.product") }}"><img
                        src="{{asset("front/assets/img/ag-og-dagitim-panolari.jpg")}}"
                        class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">AG OG Panoları</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.product") }}"><img src="{{asset("front/assets/img/otomasyon.jpg")}}"
                                                            class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Otomasyon</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.product") }}"><img src="{{asset("front/assets/img/cable.jpg")}}"
                                                            class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Kablo</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.product") }}"><img src="{{asset("front/assets/img/aydinlatma.jpg")}}"
                                                            class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Aydınlatma</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.product") }}"><img src="{{asset("front/assets/img/priz.webp")}}"
                                                            class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Anahtar Priz</h2>
            </div>
        </div>
    </section>

@endsection
