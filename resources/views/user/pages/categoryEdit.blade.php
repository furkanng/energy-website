@extends('user.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="row g-4">
        <div class="bg-light rounded h-100 p-4">
            <div class="row">
                <div class="col"><h6 class="mb-4">Ürün Grubu Düzenle</h6></div>
                <div class="col"><p>Not: Silinmesi durumunda bu gruba ait olan alt gruplar ve ürünler de
                        silinecektir.</p>
                </div>
            </div>


            <form method="POST" enctype="multipart/form-data"
                  action="{{route("panel.category.update",["id" => $category->id])}}">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label class="form-label">Başlık</label>
                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Resim</label>
                    <input class="form-control" type="file" name="image" value="{{$category->image}}">
                    @if(isset($category->image))
                        <img src="{{config("app.url")."/storage/categories/".$category->image}}" style="width: 300px"
                             class="mt-4">
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">Sıra</label>
                    <input type="number" style="width: 15%" class="form-control" value="{{$category->sira}}" name="sira">
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="status"
                           {{$category->status ? "checked" : ""}} id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Durum
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>

            <div class="d-flex justify-content-center">
                <a href="{{ route('panel.category.destroy', $category->id) }}"
                   onclick="event.preventDefault(); document.getElementById('delete-form-{{ $category->id }}').submit();">
                    <button type="submit" class="btn btn-danger">Sil</button>
                </a>
                <form id="delete-form-{{ $category->id }}"
                      action="{{ route('panel.category.destroy', $category->id) }}" method="POST"
                      style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </div>

        </div>
    </div>

@endsection
