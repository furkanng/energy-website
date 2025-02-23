@extends('front.layout.app')

@section('title', 'Home Page')
@section('content')

    <style>
        .services-icon-wap {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }

        .services-icon-wap .h1 {
            font-size: 3rem;
            color: #28a745;
        }

        .services-icon-wap h2 {
            font-size: 1.5rem;
            color: #333;
        }

        .contact-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #198754;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #fff;
            color: #198754;
        }
    </style>

    <section class="container py-3">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1 p-2">İletişim</h1>
            </div>
        </div>
        <hr style="width: 50%; margin-left: auto; margin-right: auto">
        <div class="container m-3">
            <div class="row ">
                <!-- First Half -->
                <div class="col-md-6 pb-5 p-2">
                    <div class="h-100 py-5 services-icon-wap shadow">
                        <div class="h1 text-success text-center"><i class="fas fa-envelope"></i></div>
                        <h2 class="h5 mt-4 text-center">Bizimle İletişime Geçin</h2>

                        <form action="{{route("panel.message.store")}}" class="contact-form"
                              enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <input required="" type="text" name="name" id="name" class="form-control"
                                       placeholder="Adı Soyadı">
                            </div>
                            <div class="form-group">
                                <input required="" type="email" name="email" id="email" class="form-control"
                                       placeholder="E-posta Adresi">
                            </div>
                            <div class="form-group">
                                <input required="" type="tel" name="phone" id="phone" class="form-control"
                                       placeholder="Telefon Numarası">
                            </div>
                            <div class="form-group">
                                <textarea required="" name="content" id="content" class="form-control" rows="5"
                                          placeholder="Mesajınız"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit">Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Second Half -->
                <div class="col-md-6">
                    <div class="contact-information wow fadeInRight"
                         style="visibility: visible; animation-name: fadeInRight;">
                        <h4 class="text-center">İletişim Bilgileri</h4>
                        <div class="address-wrap">
                            <h6>Adres</h6>
                            <p>{{$contact["contact_address"]}}</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="phone-number-wrap">
                                    <h6>Telefon</h6>
                                    <p>{{$contact["contact_phone"]}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="phone-number-wrap">
                                    <h6>E-posta</h6>
                                    <p>{{$contact["contact_email"]}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="phone-number-wrap">
                                    <h6>Faks</h6>
                                    <p>{{$contact["contact_fax"]}}</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p>
                                    <iframe style="border: 0;"
                                            src="{{$contact["map_api"]}}"
                                            width="100%" height="450" frameborder="0"
                                            allowfullscreen="allowfullscreen"></iframe>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
