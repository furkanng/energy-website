<!-- Start Top Nav -->
<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-between">
            <div>
                <i class="fa fa-envelope mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none"
                   href="mailto:{{$contact["contact_email"]}}">{{$contact["contact_email"]}}</a>
                <i class="fa fa-phone mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none"
                   href="tel:{{$contact["contact_phone"]}}">{{$contact["contact_phone"]}}</a>
            </div>
            <div>

                <a class="text-light" href="{{$socialMedia["media_facebook"]}}" target="_blank" rel="sponsored"><i
                        class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>


                <a class="text-light" href="{{$socialMedia["media_instagram"]}}" target="_blank"><i
                        class="fab fa-instagram fa-sm fa-fw me-2"></i></a>


                <a class="text-light" href="{{$socialMedia["media_twitter"]}}" target="_blank"><i
                        class="fab fa-twitter fa-sm fa-fw me-2"></i></a>


                <a class="text-light" href="{{$socialMedia["media_youtube"]}}" target="_blank"><i
                        class="fab fa-youtube fa-sm fa-fw"></i></a>
            </div>
        </div>
    </div>
</nav>
<!-- Close Top Nav -->

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand align-self-center" href="{{ route("front.home") }}">
            <img class="image-fluid rounded-3" src="{{ asset("images/logo.png") }}"
                 style="width: 225px; height: 100px;">
            <div style="width: 225px">
                <p style="font-family: 'Century'" class="d-flex justify-content-center p-0 m-0">Elektrik -
                    Otomasyon </p>
                <p style="font-family: 'Century'" class="d-flex justify-content-center p-0 m-0">Kesici ve Pano
                    Aksesuarları</p>
            </div>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#templatemo_main_nav" aria-controls="templatemo_main_nav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between"
             id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("front.home") }}">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("front.about") }}">Kurumsal</a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="btn-group">
                            <a class="btn nav-link" href="{{ route("front.category") }}">Ürün Grupları</a>
                            <button type="button" class="btn dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                @php $categories = \App\Models\Category::all(); @endphp
                                @foreach($categories as $sub)
                                    <a class="dropdown-item"
                                       href="{{ route("front.categoryShow",["seo_link" => $sub["seo_link"]]) }}">{{$sub["name"]}}</a>
                                @endforeach

                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("front.marka") }}">Markalar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("front.price") }}">Fiyat Listeleri</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("front.contact") }}" class="nav-link">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Close Header -->

<!-- Modal -->
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="w-100 pt-1 mb-5 text-right">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="get" class="modal-content modal-body border-0 p-0">
            <div class="input-group mb-2">
                <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                <button type="submit" class="input-group-text bg-success text-light">
                    <i class="fa fa-fw fa-search text-white"></i>
                </button>
            </div>
        </form>
    </div>
</div>
