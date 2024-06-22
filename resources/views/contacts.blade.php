@extends('layouts.layout')
@section('content')
    <div class="hero-wrap hero-wrap-2" style="background-image: url({{asset('/images/hero.png')}});"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-start">
                <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
                    <p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{ route('home')}}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>About</span></p>
                    <h1 class="mb-3 bread">About</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                </div>
                <div class="w-100"></div>

                <div class="col-md-3">
                    <p><span>Phone:</span> <a href="tel://{{$setting->phone}}">{{$setting->phone}}</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a
                            href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                </div>

            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row block-9">

                <div class="col-md-6 pr-md-5">
                    <form action="{{route('contacts.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" value="{{old('name')}}" class="form-control"
                                   placeholder="Your Name">
                            @error('name')
                            <span style="color: red" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" value="{{old('email')}}" class="form-control"
                                   placeholder="Your Email">
                            @error('email')
                            <span style="color: red" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <textarea name="message" value="{{old('message')}}" id="" cols="30" rows="7"
                                      class="form-control"
                                      placeholder="Message"></textarea>
                            @error('message')
                            <span style="color: red" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6"  >
                    {!! $setting->map !!}
                 </div>
            </div>
        </div>
    </section>

@endsection
