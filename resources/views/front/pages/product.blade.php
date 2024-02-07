@extends('front.layout.app')

@section('title', 'Home Page')
@section('content')

    <div class="container mt-3">
        <div class="row">

            <div class="col-9">
                <div style="position: relative; width: 100%; height: 200px;">
                    @if(!empty($subCategory['kapak_url']))
                        <img src="{{ $subCategory['kapak_url'] }}" alt="Ürün Resmi" class="img-fluid"
                             style="position: absolute; width: 100%; height: 200px; top: 0; left: 0; border: 1px solid #0c4128;">
                    @else
                        <div alt="Ürün Resmi" class="img-fluid"
                             style="position: absolute; width: 100%; height: 200px; top: 0; left: 0; border: 3px solid #0c4128;">
                        </div>
                    @endif
                    <img src="{{ config('app.url').'/storage/sub_categories/'. $subCategory['image'] }}"
                         alt="Ürün Resmi" class="img-fluid"
                         style="position: absolute; width: 150px; height: auto; border: 2px solid #0c4128; top: 150px; left: 0px;">
                </div>

                <div class="d-flex justify-content-center mt-5">
                    <h2 style="font-family: 'Times New Roman'" class="mb-4">{{$subCategory["name"]}}</h2>

                </div>
                <hr style="width: 60%; margin-left: auto; margin-right: auto; height: 2px; background: #0c4128">


                <div id="content">
                    {!! $subCategory["content"] !!}
                </div>
            </div>
            <div class="col-3">

                @php $category = \App\Models\Category::find($subCategory["category_id"]) @endphp
                @php
                    $keys = \App\Models\SubCategory::where('category_id', $subCategory['category_id'])
                               ->where('id', '<>', $subCategory['id'])
                               ->orderBy('sira', 'asc')->get();
                @endphp

                <div class="d-flex justify-content-center mt-5"><h4>{{$category->name}}</h4></div>
                <hr style="width: 60%; margin-left: auto; margin-right: auto; height: 1px; background: #0c4128">
                <ul class="list-group">
                    @foreach($keys as $key)
                        <li class="list-group-item"><a
                                href="{{route("front.product",["seo_link" => $key["seo_link"]])}}">{{$key["name"]}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <style>
                .list-group {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                    background-color: #f5f5f5; /* Liste için arka plan rengi */
                }

                .list-group-item {
                    padding: 10px 15px;
                    background-color: #f5f5f5; /* Liste öğeleri için arka plan rengi */
                    border: none; /* Liste öğeleri arasındaki border'ı kaldır */
                }

                .list-group-item a {
                    text-decoration: none; /* Linklerin altındaki çizgiyi kaldır */
                    color: black; /* Link metni rengi */
                    display: block; /* Tüm alanı tıklanabilir yap */
                }

                .list-group-item:hover {
                    background-color: #e9ecef; /* Hover durumunda arka plan rengi */
                }
            </style>
        </div>
    </div>

@endsection
