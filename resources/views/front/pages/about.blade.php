@extends('front.layout.app')

@section('title', 'Home Page')
@section('content')
    <!-- Start Section -->
    <section class="container py-2">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1 p-2">Hakkımızda</h1>
                <p>
                    {{$about["hakkimizda"]}}
                </p>
            </div>
        </div>
        <div class="container m-3">
            <div class="row ">
                <!-- First Half -->
                <div class="col-md-6 pb-5 p-2">
                    <div class="h-100 py-5 services-icon-wap shadow">
                        <div class="h1 text-success text-center"><i class="fas fa-globe"></i></div>
                        <h2 class="h5 mt-4 text-center">Vizyonumuz</h2>
                        <p class="p-3">{{$about["vizyon"]}}</p>
                    </div>
                </div>

                <!-- Second Half -->
                <div class="col-md-6 pb-5 p-2">
                    <div class="h-100 py-5 services-icon-wap shadow">
                        <div class="h1 text-success text-center"><i class="fas fa-dot-circle"></i></div>
                        <h2 class="h5 mt-4 text-center">Misyonumuz</h2>
                        <p class="p-3">{{$about["misyon"]}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->
    <section class="py-5">
        <section class="container py-3">
            <div class="row text-center pt-5 pb-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1 p-2">FAALİYET ALANLARI</h1>
                </div>
            </div>
            <div class="container m-3">
                <div class="row ">
                    <!-- First Half -->
                    <div class="col-md-4 pb-5 p-2">
                        <div class="h-100 py-5 services-icon-wap shadow border-0">
                            <div class="h1 text-success text-center"><i class="fas fa-gavel"></i></div>
                            <h2 class="h5 mt-4 text-center">Taahhüt İşlemleri</h2>
                            <p class="p-3">Tesisleriniz İçin Otomasyon ve Güvenilir Altyapı Kurulumları
                                Gerçekleştiririz.</p>
                        </div>
                    </div>

                    <!-- Second Half -->
                    <div class="col-md-4 pb-5 p-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <div class="h1 text-success text-center"><i class="fas fa-shopping-cart"></i></div>
                            <h3 class="h5 mt-4 text-center">Elektro Market</h3>
                            <p class="p-3">Binlerce farklı ürünümüzle tüm ihtiyaçlarınıza tek adresten
                                ulaşabilirsiniz.</p>
                        </div>
                    </div>
                    <div class="col-md-4 pb-5 p-2">
                        <div class="h-100 py-5 services-icon-wap shadow">
                            <div class="h1 text-success text-center"><i class="fas fa-book-open"></i></div>
                            <h2 class="h5 mt-4 text-center">Otomasyon</h2>
                            <p class="p-3">Büyük Santraller ve Tesisler için Yedek Parça Çeşitliliği</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
