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
    @if(!empty($about["jobs1_baslik"]) && !empty($about["jobs2_baslik"]) && !empty($about["jobs3_baslik"])
&& !empty($about["jobs1"]) && !empty($about["jobs2"]) && !empty($about["jobs3"]))
        <section class="container py-1">
            <div class="row text-center pt-5 pb-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1 p-2">Faaliyet Alanları</h1>
                </div>
            </div>
            <hr style="width: 50%; margin-left: auto; margin-right: auto">
            <div class="container m-3">
                <div class="row ">
                    <!-- First Half -->
                    @if(isset($about["jobs1_baslik"]) || isset($about["jobs1"]))
                        <div class="col-md-4 pb-5 p-2">
                            <div class="h-100 py-5 services-icon-wap shadow border-0">
                                <div class="h1 text-success text-center"><i class="fas fa-gavel"></i></div>
                                <h2 class="h5 mt-4 text-center">{{$about["jobs1_baslik"]}}</h2>
                                <p class="p-3">{{$about["jobs1"]}}</p>
                            </div>
                        </div>
                    @endif
                    <!-- Second Half -->
                    @if(isset($about["jobs2_baslik"]) || isset($about["jobs2"]))
                        <div class="col-md-4 pb-5 p-2">
                            <div class="h-100 py-5 services-icon-wap shadow">
                                <div class="h1 text-success text-center"><i class="fas fa-shopping-cart"></i></div>
                                <h3 class="h5 mt-4 text-center">{{$about["jobs2_baslik"]}}</h3>
                                <p class="p-3">{{$about["jobs2"]}}</p>
                            </div>
                        </div>
                    @endif
                    @if(isset($about["jobs3_baslik"]) || isset($about["jobs3"]))
                        <div class="col-md-4 pb-5 p-2">
                            <div class="h-100 py-5 services-icon-wap shadow">
                                <div class="h1 text-success text-center"><i class="fas fa-book-open"></i></div>
                                <h2 class="h5 mt-4 text-center">{{$about["jobs3_baslik"]}}</h2>
                                <p class="p-3">{{$about["jobs3"]}}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endif
@endsection
