@extends('front.layout.app')

@section('title', 'Home Page')
@section('content')



<section>
    <div class="row text-center pt-4">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Katalog</h1>
        </div>
    </div>

<div class="container">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
    <!-- Card 1 -->
    <div class="col custom-card">
      <div class="card border-0 text-center h-100">
        <a href="https://cetinkayapano.com"><img class="img-fluid brand-img" src="{{asset("front/assets/img/cetinkaya-pano-logo.jpg")}}" alt="Logo"></a>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col custom-card">
      <div class="card border-0 text-center h-100">
        <a href="https://momentum.com.tr/"><img class="img-fluid brand-img" src="{{asset("front/assets/img/momentum-logo.jpg")}}" alt="Logo"></a>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col custom-card">
      <div class="card border-0 text-center h-100">
        <a href="https://birikimelektrik.com.tr/"><img class="img-fluid brand-img" src="{{asset("front/assets/img/birikim-logo.jpg")}}" alt="Logo"></a>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col custom-card">
      <div class="card border-0 text-center h-100">
        <a href="http://safakelektrik.com.tr/"><img class="img-fluid brand-img" src="{{asset("front/assets/img/safak-logo.jpg")}}" alt="Logo"></a>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="col custom-card p-4">
      <div class="card border-0 text-center h-100">
        <a href="https://www.uni-t.com.tr/"><img class="img-fluid brand-img" src="{{asset("front/assets/img/unit-logo.jpg")}}" alt="Logo"></a>
      </div>
    </div>

    <!-- Card 6 -->
    <div class="col custom-card  pt-3">
      <div class="card border-0 text-center h-100">
        <a href="https://www.bannerengineering.com/"><img class="img-fluid brand-img" src="{{asset("front/assets/img/banner-logo.jpg")}}" alt="Logo"></a>
      </div>
    </div>
  </div>
</div>
</section>
@endsection