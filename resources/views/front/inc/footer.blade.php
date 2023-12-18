<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-6 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">Sion Enerji</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        {{$contact["contact_address"]}}
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none"
                           href="tel:{{$contact["contact_phone"]}}">{{$contact["contact_phone"]}}</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none"
                           href="mailto:{{$contact["contact_email"]}}">{{$contact["contact_email"]}}</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-6 pt-5 d-flex justify-content-end">
                <div>
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Hızlı Menü</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="{{ route("front.about") }}">Hakkımızda</a></li>
                        <li><a class="text-decoration-none" href="{{ route("front.category") }}">Ürün Grupları</a></li>
                        <li><a class="text-decoration-none" href="{{ route("front.price") }}">Fiyat Bilgisi</a></li>
                        <li><a class="text-decoration-none" href="{{ route("front.contact") }}">İletişim</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row text-light mb-4">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-auto me-auto">
                <ul class="list-inline text-left footer-icons">
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank"
                           href="{{$socialMedia["media_facebook"]}}"><i
                                class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank"
                           href="{{$socialMedia["media_instagram"]}}"><i
                                class="fab fa-instagram fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank"
                           href="{{$socialMedia["media_twitter"]}}"><i
                                class="fab fa-twitter fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank"
                           href="{{$socialMedia["media_youtube"]}}"><i
                                class="fab fa-youtube fa-lg fa-fw"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light">
                        Copyright &copy; 2021 Company Name
                        | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">Seda MALKOÇ</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->
