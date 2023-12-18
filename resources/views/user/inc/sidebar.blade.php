<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{route("panel.home")}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary" style="font-size: larger"><i class="fa fa-hashtag me-2"></i>Yonetim Paneli</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset("user/img/user.jpg")}}" alt=""
                     style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Yonetici</h6>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route("panel.home")}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Panelim</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Site
                    Yönetimi</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route("panel.sosyalmedya.index")}}" class="dropdown-item">Sosyal Medya</a>
                    <a href="{{route("panel.iletisim.index")}}" class="dropdown-item">İletişim</a>
                    <a href="{{route("panel.about.index")}}" class="dropdown-item">Hakkımızda</a>
                </div>
            </div>
            <a href="{{route("panel.slider.index")}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Slider
                Yönetimi</a>
            <a href="{{route("panel.blog.index")}}" class="nav-item nav-link"><i class="fa fa-anchor me-2"></i>Blog
                Yönetimi</a>
            <a href="{{route("panel.category.index")}}" class="nav-item nav-link"><i class="fa fa-anchor me-2"></i>Ürün
                Yönetimi</a>
            <a href="{{route("panel.catalog.index")}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Fiyat
                Bilgisi</a>
            <a href="{{route("panel.brand.index")}}" class="nav-item nav-link"><i class="fa fa-award me-2"></i>Marka
                Yönetimi</a>
            <a href="{{route("panel.message.index")}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Mesajlar</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
