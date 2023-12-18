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


    <section class="container py-5 mb-3">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Ürün Grupları</h1>
            </div>
        </div>
        <hr style="width: 50%; margin-left: auto; margin-right: auto">
        <div class="row">
            @foreach($categories as $category)
                <div class="col-12 col-md-3 p-5 mt-3">
                    <a href="{{ route("front.categoryShow",["seo_link" => $category["seo_link"]]) }}"><img
                            src="{{ config("app.url")."/storage/categories/". $category["image"]  }}"
                            class="rounded-circle img-fluid borderd product-image"></a>
                    <h2 class="h5 text-center mt-3 mb-3">{{$category["name"]}}</h2>
                </div>
            @endforeach

        </div>
    </section>

@endsection
