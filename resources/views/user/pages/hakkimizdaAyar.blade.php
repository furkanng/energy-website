@extends('user.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="row g-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Hakkımızda Ayarları</h6>
            <form method="POST" action="{{route("panel.about.store")}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Hakkımızda</label>
                    <textarea type="text" class="form-control" name="hakkimizda"
                    >{{$about["hakkimizda"]}}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Misyon</label>
                    <textarea type="text" class="form-control" name="misyon"
                    >{{$about["misyon"]}}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Vizyon</label>
                    <textarea type="text" class="form-control" name="vizyon"
                    >{{$about["vizyon"]}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
        </div>
    </div>
@endsection
