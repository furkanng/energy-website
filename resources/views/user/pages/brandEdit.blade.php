@extends('user.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="row g-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Referans Düzenle</h6>
            <form method="POST" enctype="multipart/form-data"
                  action="{{route("panel.brand.update",["id" => $brand->id])}}">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label class="form-label">Resim</label>
                    <input class="form-control" type="file" name="image" value="{{$brand->image}}">
                    @if(isset($brand->image))
                        <img src="{{config("app.url")."/storage/brands/".$brand->image}}" style="width: 300px"
                             class="mt-4">
                    @endif

                </div>
                <div class="mb-3">
                    <label class="form-label">Sıra</label>
                    <input type="number" style="width: 15%" value="{{$brand->sira}}" class="form-control" name="sira">
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="status"
                           {{$brand->status ? "checked" : ""}} id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Durum
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
        </div>

    </div>

@endsection
