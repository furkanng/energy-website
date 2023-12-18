@extends('user.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="row g-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Blog Düzenle</h6>
            <form method="POST" enctype="multipart/form-data"
                  action="{{route("panel.blog.update",["id" => $blog->id])}}">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label class="form-label">Başlık</label>
                    <input type="text" class="form-control" name="title" value="{{$blog->title}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">İçerik</label>
                    <textarea type="text" class="form-control"
                              name="content" id="editor">{{$blog->content}}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Resim</label>
                    <input class="form-control" type="file" name="image" value="{{$blog->image}}">
                    @if(isset($blog->image))
                        <img src="{{config("app.url")."/storage/blogs/".$blog->image}}" style="width: 300px"
                             class="mt-4">
                    @endif

                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="status"
                           {{$blog->status ? "checked" : ""}} id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Durum
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
        </div>

    </div>

@endsection
