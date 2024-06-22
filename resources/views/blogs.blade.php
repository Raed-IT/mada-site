@extends('layouts.layout')
@section('content')

    <div class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/hero.png')}});"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-start">
                <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
                    <p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{ route('home')}}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Blog</span></p>
                    <h1 class="mb-3 bread">Blog</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry">
                            <a href="{{route('showPost',$blog->id)}}" class="block-20"
                               style="background-image: url({{$blog->image}});">
                            </a>
                            <div class="text d-flex py-4">
                                <div class="meta mb-3">
                                    <div><a href="#">{{$blog->created_at->format('Y-m-d')}}</a></div>
                                    <div><a href="#">MADA</a></div>
                                    <div><a href="#" class="meta-chat"><span
                                                class="icon-chat"></span> {{$blog->comments_count}}</a></div>
                                </div>
                                <div class="desc pl-3">
                                    <h3 class="heading"><a href="{{route('showPost',$blog->id)}}">{{$blog->title}}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$blogs->links()}}
{{--            <div class="row mt-5">--}}
{{--                <div class="col text-center">--}}
{{--                    <div class="block-27">--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">&lt;</a></li>--}}
{{--                            <li class="active"><span>1</span></li>--}}
{{--                            <li><a href="#">2</a></li>--}}
{{--                            <li><a href="#">3</a></li>--}}
{{--                            <li><a href="#">4</a></li>--}}
{{--                            <li><a href="#">5</a></li>--}}
{{--                            <li><a href="#">&gt;</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>

@endsection
