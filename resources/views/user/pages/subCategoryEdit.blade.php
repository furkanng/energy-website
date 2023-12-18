@extends('user.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="row g-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Ürün Grubu Düzenle</h6>
            <form method="POST" enctype="multipart/form-data"
                  action="{{route("panel.subcategory.update",["id" => $subcategory->id])}}">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label class="form-label">Ad</label>
                    <input type="text" class="form-control" name="name" value="{{$subcategory->name}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">İçerik</label>
                    <textarea type="text" class="form-control"
                              name="content" id="editor">{{$subcategory->content}}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Resim</label>
                    <input class="form-control" type="file" name="image" value="{{$subcategory->image}}">
                    @if(isset($subcategory->image))
                        <img src="{{config("app.url")."/storage/sub_categories/".$subcategory->image}}"
                             style="width: 300px"
                             class="mt-4">
                    @endif

                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="status"
                           {{$subcategory->status ? "checked" : ""}} id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Durum
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>

            <div class="d-flex justify-content-center">
                <a href="{{ route('panel.subcategory.destroy', $subcategory->id) }}"
                   onclick="event.preventDefault(); document.getElementById('delete-form-{{ $subcategory->id }}').submit();">
                    <button type="submit" class="btn btn-danger">Sil</button>
                </a>
                <form id="delete-form-{{ $subcategory->id }}"
                      action="{{ route('panel.subcategory.destroy', $subcategory->id) }}" method="POST"
                      style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </div>

        </div>
    </div>

@endsection
