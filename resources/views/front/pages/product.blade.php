@extends('front.layout.app')

@section('title', 'Home Page')
@section('content')

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center py-2">
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="{{ asset("front/assets/img/manyetik-Fren.png") }}" class="img-fluid mb-4" alt="Blog Image" style="width: 100%; height: 400px">
                        <ul class="lead pt-5">
                            <li>Ray Klemensler</li>
                            <li>Endüstriyel Röleler</li>
                            <li>Pano Aksesuarları</li>
                            <li>Plotter ve Aksesuarlar</li>
                            <li>Etiketleme Çözümleri</li>
                            <li>Termal Yazıcı ve Çözümleri</li>
                            <li>Evomax Ürünleri</li>
                            <li>Yüksük ve Pabuçlar Yazılım ve Sürücüler</li>
                        </ul>
                        <p class="pt-5">Molwex Ankara Bayii Aydınlar Elektrik Ostim'de en uygun fiyat ve en hızlı çözümleriyle dikkat çekiyor. Molwex Ankara ve Ostim için Aydınlar'ı arayın.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
