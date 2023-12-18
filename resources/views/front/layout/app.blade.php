<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sion Enerji</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset("front/assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("front/assets/css/templatemo.css")}}">
    <link rel="stylesheet" href="{{asset("front/assets/css/custom.css")}}">
    <link rel="icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset("images/logo.png") }}" type="image/x-icon">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{asset("front/assets/css/fontawesome.min.css")}}">
</head>

<body>

@include("front.inc.navbar")

@yield('content')

@include("front.inc.footer")

<!-- Start Script -->
<script src="{{asset("front/assets/js/jquery-1.11.0.min.js")}}"></script>
<script src="{{asset("front/assets/js/jquery-migrate-1.2.1.min.js")}}"></script>
<script src="{{asset("front/assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("front/assets/js/templatemo.js")}}"></script>
<script src="{{asset("front/assets/js/custom.js")}}"></script>
<!-- End Script -->
</body>

</html>
