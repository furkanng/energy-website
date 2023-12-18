@extends('user.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="row g-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Fiyat Bilgisi Düzenle</h6>
            <form method="POST" enctype="multipart/form-data"
                  action="{{route("panel.catalog.update",["id" => $catalog->id])}}">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label class="form-label">Logo</label>
                    <input class="form-control" type="file" name="image" value="{{$catalog->image}}">
                    @if(isset($catalog->image))
                        <img src="{{config("app.url")."/storage/catalog/".$catalog->image}}" style="width: 300px"
                             class="mt-4">
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">Pdf</label>
                    <input class="form-control" type="file" name="pdf" value="{{$catalog->pdf}}">
                    @if(isset($catalog->pdf))
                        <iframe class="mt-3" style="max-width: 300px" src="{{config("app.url")."/storage/pdf/".$catalog->pdf}}" title="pdf"></iframe>
                    @endif
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="status"
                           {{$catalog->status ? "checked" : ""}} id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Durum
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
        </div>

    </div>

@endsection
