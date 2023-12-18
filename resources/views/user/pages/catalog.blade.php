@extends('user.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Fiyat Bilgisi Ekle</h6>
                <form method="POST" enctype="multipart/form-data" action="{{route("panel.catalog.store")}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Logo Ekle</label>
                        <input class="form-control" type="file" name="image">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Katalog Ekle (pdf)</label>
                        <input class="form-control" type="file" name="pdf">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="status" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Durum
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>

        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Fiyat Bilgileri</h6>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Pdf</th>
                        <th scope="col">Durum</th>
                        <th scope="col">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($catalogs as $catalog)
                        <tr>
                            <th scope="row">{{$catalog->id}}</th>
                            <td>@if(isset($catalog->image))
                                    <button type="button" class="btn btn-sm btn-success rounded-pill">Var</button>
                                @else
                                    <button type="button" class="btn btn-sm btn-danger rounded-pill">Yok</button>
                                @endif
                            </td>
                            <td>@if(isset($catalog->pdf))
                                    <button type="button" class="btn btn-sm btn-success rounded-pill">Var</button>
                                @else
                                    <button type="button" class="btn btn-sm btn-danger rounded-pill">Yok</button>
                                @endif</td>
                            <td>@if($catalog->status == 1)
                                    <button type="button" class="btn btn-sm btn-success rounded-pill">Aktif</button>
                                @else
                                    <button type="button" class="btn btn-sm btn-danger rounded-pill">Pasif</button>
                                @endif</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('panel.catalog.show', $catalog->id) }}">
                                            <i class="bx bx-edit-alt me-1"></i>Düzenle
                                        </a>
                                        <a class="dropdown-item" href="{{ route('panel.catalog.destroy', $catalog->id) }}"
                                           onclick="event.preventDefault(); document.getElementById('delete-form-{{ $catalog->id }}').submit();">
                                            <i class="bx bx-trash me-1"></i>Sil
                                        </a>
                                        <form id="delete-form-{{ $catalog->id }}"
                                              action="{{ route('panel.catalog.destroy', $catalog->id) }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>

@endsection
