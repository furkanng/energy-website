@extends('user.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Marka Ekle</h6>
                <form method="POST" enctype="multipart/form-data" action="{{route("panel.brand.store")}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Logo</label>
                        <input class="form-control" type="file" name="image">
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
                <h6 class="mb-4">Markalar</h6>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Resim</th>
                        <th scope="col">Durum</th>
                        <th scope="col">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($brands as $brand)
                        <tr>
                            <th scope="row">{{$brand->id}}</th>
                            <td>@if(isset($brand->image))
                                    <button type="button" class="btn btn-sm btn-success rounded-pill">Var</button>
                                @else
                                    <button type="button" class="btn btn-sm btn-danger rounded-pill">Yok</button>
                                @endif</td>
                            <td>@if($brand->status == 1)
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
                                        <a class="dropdown-item" href="{{ route('panel.brand.show', $brand->id) }}">
                                            <i class="bx bx-edit-alt me-1"></i>Düzenle
                                        </a>
                                        <a class="dropdown-item" href="{{ route('panel.brand.destroy', $brand->id) }}"
                                           onclick="event.preventDefault(); document.getElementById('delete-form-{{ $brand->id }}').submit();">
                                            <i class="bx bx-trash me-1"></i>Sil
                                        </a>
                                        <form id="delete-form-{{ $brand->id }}"
                                              action="{{ route('panel.brand.destroy', $brand->id) }}" method="POST"
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
