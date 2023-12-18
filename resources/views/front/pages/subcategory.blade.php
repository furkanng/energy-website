@extends('front.layout.app')

@section('title', 'Home Page')
@section('content')

<div class="min-height" style="min-height: 221.3px;">

<div class="breadcrumb-area wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center p-4">
                <div class="breadcrumb-text">
                        <h1>Ürün Grup Detay</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-padding news-section four-column">
    <div class="container p-2">
        <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-news-wrap wow fadeInUp" style="border-width: 1px; border-style: solid; border-color: lightgray lightgray rgb(160, 51, 99); border-image: initial; visibility: visible; animation-name: fadeInUp;">
                        <a class="link" href="{{ route("front.product") }}">
                                <img src="{{asset("front/assets/img/voltlogo.jpg")}}" style="max-width: 100%; height: auto; object-fit: cover;" class="img-responsive m-auto">
                        <div class="news-text">
                            <h6 class="text-center" style="color:#a03363">Volt</h6>
                                <!--  <p>Gamak Elektrik Motorları Ankara Bayii Aydınlar Elektrik Ostim&#39;de en uygun fiyat ve en hızlı &#231;&#246;z&#252;mleriyle dikkat &#231;ekiyor. Gamak Motor Ankara ve Ostim i&#231;in Aydınlar&#39;ı arayın. </p>-->
                        </div>
                    </a>
                </div>
            </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-news-wrap wow fadeInUp" style="border-width: 1px; border-style: solid; border-color: lightgray lightgray rgb(160, 51, 99); border-image: initial; visibility: visible; animation-name: fadeInUp;">
                        <a class="link" href="{{ route("front.product") }}">
                                <img src="{{asset("front/assets/img/elk-motor-logo.jpg")}}" style="max-width: 100%; height: auto; object-fit: cover;" class="img-responsive mb20">
                        <div class="news-text">
                            <h6 class="text-center" style="color:#a03363">ELK Motor</h6>
                                <!--  <p>ELK Motor Ankara bayii Aydınlar Elektrik, ELK Elektrik Motor markasının elektrik motoru, frenli motor ve &#246;zel motorlarının satışını yapmaktadır.  Ankara ELK Elektrik Motorları bayii Aydınlar elektrik bayiler arasında uygun fiyat ve hızlı teslimatla &#246;ne &#231;ıkmaktadır.</p>-->
                        </div>
                    </a>
                </div>
            </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-news-wrap wow fadeInUp" style="border-width: 1px; border-style: solid; border-color: lightgray lightgray rgb(160, 51, 99); border-image: initial; visibility: visible; animation-name: fadeInUp;">
                        <a class="link" href="{{ route("front.product") }}">
                                <img src="{{asset("front/assets/img/omega-logo.jpg")}}" style="max-width: 100%; height: auto; object-fit: cover;" class="img-responsive mb20">
                        <div class="news-text">
                            <h6 class="text-center" style="color:#a03363">Omega</h6>
                                <!--  <p>Omega Elektrik Motorunun istenilen b&#252;t&#252;n &#231;eşitlerini bulabileceğiniz Ankara bayilerinden ilk sırada Aydınlar Elektrik yer almaktadır. Uygun fiyata Omega Elektrik Motoru Aydınlar Elektrik&#39;ten alınır. </p>-->
                        </div>
                    </a>
                </div>
            </div>
                <di class="col-md-3 col-sm-6">
                    <div class="single-news-wrap wow fadeInUp" style="border-width: 1px; border-style: solid; border-color: lightgray lightgray rgb(160, 51, 99); border-image: initial; visibility: visible; animation-name: fadeInUp;">
                        <a class="link" href="{{ route("front.product") }}">
                                <img src="{{asset("front/assets/img/gamaklogo.jpg")}}" style="max-width: 100%; height: auto; object-fit: cover;" class="img-responsive mb20">
                        <div class="news-text">
                            <h6 class="text-center" style="color:#a03363">Gamak Motor</h6>
                                <!--  <p>Volt Elektrik Motoru, Ankara Aydınlar Elektrik den hem hesaplı hem kolay ulaşımla temin edilir. Kaliteli hizmet i&#231;in tek se&#231;im Aydınlar Elektrik</p>-->
                        </div>
                    </a>
                </div>
            </di>

        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="pagination-container"><ul class="pagination"></ul></div>
            </div>
        </div>
    </div>
</div>
@endsection
