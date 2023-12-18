@extends('user.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="row g-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">İletişim Ayarları</h6>
            <form method="POST" action="{{route("panel.iletisim.store")}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Telefon</label>
                    <input type="text" class="form-control" name="contact_phone"
                           value="{{$contact["contact_phone"]}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Fax</label>
                    <input type="text" class="form-control" name="contact_fax"
                           value="{{$contact["contact_fax"]}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">İletişim Email</label>
                    <input type="text" class="form-control" name="contact_email"
                           value="{{$contact["contact_email"]}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">İletişim Adres</label>
                    <input type="text" class="form-control" name="contact_address"
                           value="{{$contact["contact_address"]}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">İletişim Harita (src içerisindeki yer)</label>
                    <input type="text" class="form-control" name="map_api"
                           value="{{$contact["map_api"]}}">
                </div>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
        </div>
    </div>
@endsection
