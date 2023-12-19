@extends('front.layout.app')

@section('title', 'Home Page')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ config("app.url")."/storage/sub_categories/". $subCategory["image"] }}" alt="Ürün Resmi"
                     class="img-fluid" style="border: 1px solid #ddd;">
            </div>

            <div class="col-md-6">
                <h2 class="mb-4">{{$subCategory["name"]}}</h2>
                <p>{!! $subCategory["content"] !!}</p>
                @php $category = \App\Models\Category::where("id",$subCategory["category_id"])->first() @endphp
                <p class="mt-4">Ürün Grubu: <span class="text-success">{{$category["name"]}}</span></p>

            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">

            </div>
        </div>
    </div>

@endsection
