<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Yönetim Paneli</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset("user/img/favicon.ico")}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
          rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset("user/lib/owlcarousel/assets/owl.carousel.min.css")}}" rel="stylesheet">
    <link href="{{asset("user/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css")}}" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset("user/css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset("user/css/style.css")}}" rel="stylesheet">

</head>

<body>
<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner"
         class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Yükleniyor...</span>
        </div>
    </div>
    <!-- Spinner End -->


    @include("user.inc.sidebar")


    <!-- Content Start -->
    <div class="content">
        @include("user.inc.navbar")

        <div class="container-fluid pt-4 px-4">
            @yield("content")
        </div>

        @include("user.inc.footer")
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset("user/lib/chart/chart.min.js")}}"></script>
<script src="{{asset("user/lib/easing/easing.min.js")}}"></script>
<script src="{{asset("user/lib/waypoints/waypoints.min.js")}}"></script>
<script src="{{asset("user/lib/owlcarousel/owl.carousel.min.js")}}"></script>
<script src="{{asset("user/lib/tempusdominus/js/moment.min.js")}}"></script>
<script src="{{asset("user/lib/tempusdominus/js/moment-timezone.min.js")}}"></script>
<script src="{{asset("user/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js")}}"></script>
<script src="{{asset("ckeditor5/ckeditor.js")}}"></script>

<!-- İcon Kütüphaneleri -->
<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>

<!-- ckeditör Kütüphaneleri -->
<script src="{{asset("ckeditor5/ckeditor.js")}}"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>

<!-- alert time -->
<script>
    setTimeout(function () {
        document.getElementById('alert').style.display = 'none';
    }, 2000);
</script>

<!-- Template Javascript -->
<script src="{{asset("user/js/main.js")}}"></script>
</body>

</html>
