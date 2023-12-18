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
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Faaliyet Alanları Ayarları</h6>
            <form method="POST" action="{{route("panel.about.store")}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Faaliyet Alanı 1</label>
                    <div class="row">
                        <div class="col-3">
                            <span>Başlık</span>
                            <input type="text" class="form-control" name="jobs1_baslik"
                                   value="{{$about["jobs1_baslik"]}}">
                        </div>
                        <div class="col-9">
                            <span>İçerik</span>
                            <input type="text" class="form-control" name="jobs1"
                                   value="{{$about["jobs1"]}}">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Faaliyet Alanı 2</label>
                    <div class="row">
                        <div class="col-3">
                            <span>Başlık</span>
                            <input type="text" class="form-control" name="jobs2_baslik"
                                   value="{{$about["jobs2_baslik"]}}">
                        </div>
                        <div class="col-9">
                            <span>İçerik</span>
                            <input type="text" class="form-control" name="jobs2"
                                   value="{{$about["jobs2"]}}">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Faaliyet Alanı 3</label>
                    <div class="row">
                        <div class="col-3">
                            <span>Başlık</span>
                            <input type="text" class="form-control" name="jobs3_baslik"
                                   value="{{$about["jobs3_baslik"]}}">
                        </div>
                        <div class="col-9">
                            <span>İçerik</span>
                            <input type="text" class="form-control" name="jobs3"
                                   value="{{$about["jobs3"]}}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
        </div>
    </div>
@endsection
