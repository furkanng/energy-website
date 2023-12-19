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
    <section class="container">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($sliders as $key => $slider)
                    <li data-bs-target="#carouselId" data-bs-slide-to="{{ $key }}"
                        class="{{ $key === 0 ? 'active' : '' }}" aria-current="{{ $key === 0 ? 'true' : 'false' }}"
                        aria-label="Slide {{ $key + 1 }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner" role="listbox" style="@media (min-width: 768px)  {
            height: 600px
            }">
                @foreach($sliders as $key => $slider)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <img src="{{ $slider['url'] }}" class="w-100 d-block" alt="Slide {{ $key + 1 }}"/>
                        <div class="carousel-caption d-none d-md-block">
                            <h3>{{ $slider['title'] }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-3">
        <div class="row text-center pt-3 mt-2">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Ürün Grupları</h1>
            </div>
        </div>
        <hr style="width: 50%; margin-left: auto; margin-right: auto">
        <div class="row">


            @foreach($categories as $category)
                <div class="col-12 col-md-3 p-5 mt-3">
                    <a href="{{route("front.categoryShow",["seo_link" => $category["seo_link"]]) }}">
                        <img src="{{ config("app.url")."/storage/categories/". $category["image"]  }}"
                             class="rounded-circle img-fluid borderd product-image"></a>
                    <h2 class="h5 text-center mt-3 mb-3">{{$category["name"]}}</h2>
                </div>
            @endforeach


        </div>
    </section>
    <!-- End Categories of The Month -->


    @if(!empty($general["jobs1_baslik"]) && !empty($general["jobs2_baslik"]) && !empty($general["jobs3_baslik"])
&& !empty($general["jobs1"]) && !empty($general["jobs2"]) && !empty($general["jobs3"]))
        <section class="container py-1">
            <div class="row text-center pt-5 pb-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1 p-2">Faaliyet Alanları</h1>
                </div>
            </div>
            <hr style="width: 50%; margin-left: auto; margin-right: auto">
            <div class="container m-3">
                <div class="row ">
                    <!-- First Half -->
                    @if(isset($general["jobs1_baslik"]) || isset($general["jobs1"]))
                        <div class="col-md-4 pb-5 p-2">
                            <div class="h-100 py-5 services-icon-wap shadow border-0">
                                <div class="h1 text-success text-center"><i class="fas fa-gavel"></i></div>
                                <h2 class="h5 mt-4 text-center">{{$general["jobs1_baslik"]}}</h2>
                                <p class="p-3">{{$general["jobs1"]}}</p>
                            </div>
                        </div>
                    @endif
                    <!-- Second Half -->
                    @if(isset($general["jobs2_baslik"]) || isset($general["jobs2"]))
                        <div class="col-md-4 pb-5 p-2">
                            <div class="h-100 py-5 services-icon-wap shadow">
                                <div class="h1 text-success text-center"><i class="fas fa-shopping-cart"></i></div>
                                <h3 class="h5 mt-4 text-center">{{$general["jobs2_baslik"]}}</h3>
                                <p class="p-3">{{$general["jobs2"]}}</p>
                            </div>
                        </div>
                    @endif
                    @if(isset($general["jobs3_baslik"]) || isset($general["jobs3"]))
                        <div class="col-md-4 pb-5 p-2">
                            <div class="h-100 py-5 services-icon-wap shadow">
                                <div class="h1 text-success text-center"><i class="fas fa-book-open"></i></div>
                                <h2 class="h5 mt-4 text-center">{{$general["jobs3_baslik"]}}</h2>
                                <p class="p-3">{{$general["jobs3"]}}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endif
    <!-- Start Featured Product -->

    @if($brands->count() !== 0)
        <section class="container py-3">
            <div class="row text-center pb-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1 p-2">Referanslar</h1>
                </div>
            </div>
            <hr style="width: 50%; margin-left: auto; margin-right: auto">
            <div class="row text-center mb-2">
                <div class="col-lg-9 m-auto">
                    <div id="brand-carousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($brands->chunk(4) as $chunk)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="row">
                                        @foreach($chunk as $brand)
                                            <div class="col-md-3">
                                                <img class="img-fluid brand-img"
                                                     src="{{ config("app.url")."/storage/brands/". $brand["image"] }}"
                                                     alt="Logo">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif


    <!-- Start Featured Product -->

    @if($blogs->count() !== 0)
        <section class="bg-light">
            <div class="container py-5">
                <div class="row text-center py-3">
                    <div class="col-lg-6 m-auto">
                        <h1 class="h1">Bloglar</h1>
                    </div>
                </div>
                <hr style="width: 50%; margin-left: auto; margin-right: auto">
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-12 col-md-4 mb-4 mt-2">
                            <div class="card h-100">
                                <a href="{{ route("front.blog",["seo_link" => $blog["seo_link"]]) }}">
                                    <img src="{{ config("app.url")."/storage/blogs/". $blog["image"]  }}"
                                         class="card-img-top" style="height:400px">
                                </a>
                                <div class="card-body">
                                    <a href="{{ route("front.blog",["seo_link" => $blog["seo_link"]]) }}"
                                       class="h2 text-decoration-none text-dark m-auto ">{{$blog["title"]}}</a>
                                    <p class="card-text"><br>
                                        {!! substr($blog["content"],0,240)."..." !!}
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
