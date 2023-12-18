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


    <!-- Start Banner Hero -->
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{asset("front/assets/img/slider1.jpg")}}" class="w-100 d-block" alt="First slide"/>
                <div class="carousel-caption d-none d-md-block">
                    <h3>Title</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset("front/assets/img/slider1.jpg")}}" class="w-100 d-block" alt="Second slide"/>
                <div class="carousel-caption d-none d-md-block">
                    <h3>Title</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset("front/assets/img/slider1.jpg")}}" class="w-100 d-block" alt="Third slide"/>
                <div class="carousel-caption d-none d-md-block">
                    <h3>Title</h3>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Ürün Grupları</h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.catalog") }}"><img src="{{asset("front/assets/img/elektrik-motoru.jpg")}}"
                                                             class="rounded-circle img-fluid borderd product-image"
                                                             style="{witdh:10px}"></a>
                <h5 class="text-center mt-3 mb-3">Elektrik Motorları</h5>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.catalog") }}"><img
                        src="{{asset("front/assets/img/elektrik-malzemeleri-toptan.jpg")}}"
                        class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Elektrik Malzemeleri</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.catalog") }}"><img src="{{asset("front/assets/img/reduktor.png")}}"
                                                             class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Redüktörler</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.catalog") }}"><img src="{{asset("front/assets/img/aspirator.webp")}}"
                                                             class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Fan ve Aspiratörler</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.catalog") }}"><img src="{{asset("front/assets/img/manyetik-Fren.png")}}"
                                                             class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Manyetik Frenler</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.catalog") }}"><img src="{{asset("front/assets/img/kaplinkasnak.jpg")}}"
                                                             class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Kaplin ve Kasnaklar</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.catalog") }}"><img src="{{asset("front/assets/img/pompa.jpg")}}"
                                                             class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Pompalar</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.catalog") }}"><img
                        src="{{asset("front/assets/img/ag-og-dagitim-panolari.jpg")}}"
                        class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">AG OG Panoları</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.catalog") }}"><img src="{{asset("front/assets/img/otomasyon.jpg")}}"
                                                             class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Otomasyon</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.catalog") }}"><img src="{{asset("front/assets/img/cable.jpg")}}"
                                                             class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Kablo</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.catalog") }}"><img src="{{asset("front/assets/img/aydinlatma.jpg")}}"
                                                             class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Aydınlatma</h2>
            </div>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="{{ route("front.catalog") }}"><img src="{{asset("front/assets/img/priz.webp")}}"
                                                             class="rounded-circle img-fluid borderd product-image"></a>
                <h2 class="h5 text-center mt-3 mb-3">Anahtar Priz</h2>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->



    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1 p-2">FAALİYET ALANLARI</h1>
            </div>
        </div>
        <div class="container m-3">
            <div class="row ">
                <!-- First Half -->
                <div class="col-md-4 pb-5 p-2">
                    <div class="h-100 py-5 services-icon-wap shadow border-0">
                        <div class="h1 text-success text-center"><i class="fas fa-gavel"></i></div>
                        <h2 class="h5 mt-4 text-center">Taahhüt İşlemleri</h2>
                        <p class="p-3">Tesisleriniz İçin Otomasyon ve Güvenilir Altyapı Kurulumları Gerçekleştiririz.</p>
                    </div>
                </div>

                <!-- Second Half -->
                <div class="col-md-4 pb-5 p-2">
                    <div class="h-100 py-5 services-icon-wap shadow">
                        <div class="h1 text-success text-center"><i class="fas fa-shopping-cart"></i></div>
                        <h3 class="h5 mt-4 text-center">Elektro Market</h3>
                        <p class="p-3">Binlerce farklı ürünümüzle tüm ihtiyaçlarınıza tek adresten ulaşabilirsiniz.</p>
                    </div>
                </div>
                <div class="col-md-4 pb-5 p-2">
                    <div class="h-100 py-5 services-icon-wap shadow">
                        <div class="h1 text-success text-center"><i class="fas fa-book-open"></i></div>
                        <h2 class="h5 mt-4 text-center">Otomasyon</h2>
                        <p class="p-3">Büyük Santraller ve Tesisler için Yedek Parça Çeşitliliği</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Start Featured Product -->

    @if(!empty($blogs))
        <section class="bg-light">
            <div class="container py-5">
                <div class="row text-center py-3">
                    <div class="col-lg-6 m-auto">
                        <h1 class="h1">Bloglar</h1>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card h-100">
                                <a href="{{ route("front.blog",["seo_link" => $blog["seo_link"]]) }}">
                                    <img src="{{ config("app.url")."/storage/blogs/". $blog["image"]  }}"
                                         class="card-img-top" style="height:400px">
                                </a>
                                <div class="card-body">
                                    <a href="{{ route("front.blog",["seo_link" => $blog["seo_link"]]) }}"
                                       class="h2 text-decoration-none text-dark m-auto ">{{$blog["title"]}}</a>
                                    <p class="card-text"><br>
                                        {{substr($blog["content"],0,240)."..."}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif




    <!-- End Featured Product -->

@endsection
