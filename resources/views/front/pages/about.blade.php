@extends('front.layout.app')

@section('title', 'Home Page')
@section('content')
    <!-- Start Section -->
    <section class="container py-5">
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
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-3 pt-md-0" id="templatemo-slide-brand"
                                 data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">
                                    <!--First slide-->
                                    <div class="carousel-item">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <a href="https://cetinkayapano.com"><img class="img-fluid brand-img"
                                                                                         src="{{asset("front/assets/img/cetinkaya-pano-logo.jpg")}}"
                                                                                         alt="Logo"></a>
                                            </div>
                                            <div class="col-3">
                                                <a href="https://www.dundarelektrik.com.tr/"><img
                                                        class="img-fluid brand-img"
                                                        src="{{asset("front/assets/img/dundar-logo.jpg")}}" alt="Logo"></a>
                                            </div>
                                            <div class="col-3">
                                                <a href="https://momentum.com.tr/"><img class="img-fluid brand-img"
                                                                                        src="{{asset("front/assets/img/momentum-logo.jpg")}}"
                                                                                        alt="Logo"></a>
                                            </div>
                                            <div class="col-3">
                                                <a href="https://www.emaselectric.com/"><img class="img-fluid brand-img"
                                                                                             src="{{asset("front/assets/img/emas-logo.jpg")}}"
                                                                                             style="height:195;width:195"
                                                                                             alt="Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item ">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <a href="http://safakelektrik.com.tr/"><img class="img-fluid brand-img"
                                                                                            src="{{asset("front/assets/img/safak-logo.jpg")}}"
                                                                                            alt="Logo"></a>
                                            </div>
                                            <div class="col-3">
                                                <a href="https://www.dissan.com.tr/"><img class="img-fluid brand-img"
                                                                                          src="{{asset("front/assets/img/dissan-logo.jpg")}}"
                                                                                          alt="Logo"></a>
                                            </div>
                                            <div class="col-3">
                                                <a href="https://tpelectric.com.tr/en/"><img class="img-fluid brand-img"
                                                                                             src="{{asset("front/assets/img/tp-elektrik.jpg")}}"
                                                                                             alt="Logo"></a>
                                            </div>
                                            <div class="col-3">
                                                <a href="https://www.uni-t.com.tr/"><img class="img-fluid brand-img"
                                                                                         src="{{asset("front/assets/img/unit-logo.jpg")}}"
                                                                                         alt="Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item active">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <a href="https://www.bannerengineering.com/"><img
                                                        class="img-fluid brand-img"
                                                        src="{{asset("front/assets/img/banner-logo.jpg")}}" alt="Logo"></a>
                                            </div>
                                            <div class="col-3">
                                                <a href="https://omron.com.tr/tr/home"><img class="img-fluid brand-img"
                                                                                            src="{{asset("front/assets/img/omron-logo.jpg")}}"
                                                                                            alt="Logo"></a>
                                            </div>
                                            <div class="col-3">
                                                <a href="https://birikimelektrik.com.tr/"><img
                                                        class="img-fluid brand-img"
                                                        src="{{asset("front/assets/img/birikim-logo.jpg")}}" alt="Logo"></a>
                                            </div>
                                            <div class="col-3">
                                                <a href="https://acklighting.com/"><img class="img-fluid brand-img"
                                                                                        src="{{asset("front/assets/img/ack-logo.jpg")}}"
                                                                                        alt="Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>

        <section class="container py-5">
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
                        <p class="p-3">Tesisleriniz İçin Otomasyon ve Güvenilir Altyapı Kurulumları Gerçekleştiririz.</p>
                    </div>
                </div>

                <!-- Second Half -->
                <div class="col-md-4 pb-5 p-2">
                    <div class="h-100 py-5 services-icon-wap shadow">
                        <div class="h1 text-success text-center"><i class="fas fa-shopping-cart"></i></div>
                        <h3 class="h5 mt-4 text-center">Elektro Market</h3>
                        <p class="p-3">Binlerce farklı ürünümüzle tüm ihtiyaçlarınıza tek adresten ulaşabilirsiniz.</p>
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
