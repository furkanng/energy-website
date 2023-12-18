@extends('front.layout.app')

@section('title', 'Home Page')
@section('content')

    <div class="min-height" style="min-height: 221.3px;">

        <div class="breadcrumb-area wow fadeIn mt-2" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center p-4">
                        <div class="breadcrumb-text">
                            <h1>{{$category["name"]}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 50%; margin-left: auto; margin-right: auto">

        <div class="section-padding news-section four-column mb-3">
            <div class="container p-2">
                <div class="row">
                    @if($subCategories->count() !== 0)
                        @foreach($subCategories as $sub)
                            <div class="col-md-3 col-sm-6">
                                <div class="single-news-wrap wow fadeInUp"
                                     style="border-width: 1px; border-style: solid; border-color: lightgray lightgray rgb(160, 51, 99); border-image: initial; visibility: visible; animation-name: fadeInUp;">
                                    <a class="link" href="{{route("front.product",["seo_link" => $sub["seo_link"]])}}">
                                        <img src="{{ config("app.url")."/storage/sub_categories/". $sub["image"]  }}"
                                             style="max-width: 100%; height: auto; object-fit: cover;"
                                             class="img-responsive m-auto">
                                        <div class="news-text">
                                            <h6 class="text-center" style="color:#a03363">{{$sub["name"]}}</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="p-5">
                            <div class="h-100 py-5 services-icon-wap shadow border-0">
                                <div class="h1 text-success text-center"><i class="fas fa-exclamation-circle"></i></div>
                                <h2 class="h5 mt-4 text-center">Herhangi bir kayıt bulunamamıştır.</h2>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="pagination-container">
                            <ul class="pagination"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
