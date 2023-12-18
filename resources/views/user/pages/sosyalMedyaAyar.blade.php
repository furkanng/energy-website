@extends('user.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="row g-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Sosyal Medya Ayarları</h6>
            <form method="POST" action="{{route("panel.sosyalmedya.store")}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Facebook</label>
                    <input type="text" class="form-control" name="media_facebook"
                           value="{{$socialMedia["media_facebook"]}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">İnstagram</label>
                    <input type="text" class="form-control" name="media_instagram"
                           value="{{$socialMedia["media_instagram"]}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Twitter</label>
                    <input type="text" class="form-control" name="media_twitter"
                           value="{{$socialMedia["media_twitter"]}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Youtube</label>
                    <input type="text" class="form-control" name="media_youtube"
                           value="{{$socialMedia["media_youtube"]}}">
                </div>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
        </div>
    </div>
@endsection
