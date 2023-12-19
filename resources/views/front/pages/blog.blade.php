@extends('front.layout.app')

@section('title', 'Home Page')
@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center py-2">
                <div class="col-md-6">
                    <div class="card border-0">
                        <div class="card-body">
                            <img src="{{ config("app.url")."/storage/blogs/". $blog["image"]  }}" class="img-fluid mb-4"
                                 alt="Blog Image">
                            <h2 class="mb-3">{{$blog["title"]}}</h2>
                            <p class="lead">{!! $blog["content"] !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
