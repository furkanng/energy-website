@extends('user.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="row g-4">

        <div class="col">
            <div class="col-sm-12 mb-4">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Ürün Grubu Ekle</h6>
                    <form method="POST" enctype="multipart/form-data" action="{{route("panel.category.store")}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Ad</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Resim</label>
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
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Ürün Ekle</h6>
                    <form method="POST" enctype="multipart/form-data" action="{{route("panel.subcategory.store")}}">
                        @csrf
                        <label class="form-label">Ürün Grubu</label>
                        <select class="form-select mb-3" id="floatingSelect" name="category_id"
                                aria-label="Floating label select example">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="mb-3">
                            <label class="form-label">Ad</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Resim</label>
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
        </div>
        <div class="col">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Ürün Grupları (Düzenlemek için üstüne tıklayınız)</h6>
                    <ul class="sidebar-menu">
                        @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('panel.category.show', $category->id) }}">
                                    <div class="btn btn-sm btn-outline-primary m-1">
                                        {{ $category->name }}
                                    </div>
                                </a>

                                @if ($category->subcategory->isNotEmpty())
                                    <ul class="submenu">
                                        @foreach ($category->subcategory as $subcategory)
                                            <li>
                                                <a href="{{ route('panel.subcategory.show', $subcategory->id) }}">
                                                    <div class="btn btn-sm btn-outline-success my-1">
                                                        {{ $subcategory->name }}
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
