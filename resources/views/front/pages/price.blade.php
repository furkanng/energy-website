@extends('front.layout.app')

@section('title', 'Home Page')
@section('content')

    <section>
        <div class="row text-center py-5">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Katalog</h1>
            </div>
        </div>
        <hr style="width: 50%; margin-left: auto; margin-right: auto">
        @if($catalogs->count() !== 0)
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                    @foreach($catalogs as $catalog)
                        <div class="col custom-card">
                            <div class="card border-0 text-center h-100">
                                <a target="_blank" href="{{ config("app.url")."/storage/pdf/". $catalog["pdf"]  }}">
                                    <img class="img-fluid brand-img"
                                         src="{{ config("app.url")."/storage/catalog/". $catalog["image"]  }}"
                                         alt="Logo"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="p-5">
                <div class="h-100 py-5 services-icon-wap shadow border-0">
                    <div class="h1 text-success text-center"><i class="fas fa-exclamation-circle"></i></div>
                    <h2 class="h5 mt-4 text-center">Herhangi bir kayıt bulunamamıştır.</h2>
                </div>
            </div>
        @endif
    </section>
@endsection
