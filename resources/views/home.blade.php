@extends('layouts.layout')
@section('content')
    <div class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <div class="container-fluid px-0">
            <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
                <img class="one-third js-fullheight align-self-end order-md-last img-fluid"
                     src="data:image/svg+xml;base64,{{ base64_encode($setting->hero_icon) }}" alt="">
                <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
                    <div class="text mt-5">
                        <span class="subheading">Isometric Hosting</span>
                        <h1 class="mb-3"><span>Design,</span> <span>Development,</span> <span>Hosting</span></h1>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <p><a href="#" class="btn btn-primary px-4 py-3">Get in touch</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section services-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4"> {{$setting->why_choose_us_label}}</h2>
                    <p>{{$setting->why_choose_us_desc}}</p>
                </div>
            </div>
            <div class="row">
                @foreach($chooseuses as $choose)
                    <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <img
                                    width="50px"
                                    src="data:image/svg+xml;base64,{{ base64_encode($choose->icon) }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
                                <h3 class="heading">{{$choose->title}}</h3>
                                <p class="mb-0">{{$choose->info}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">{{$setting->counter_label}}</span>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        @foreach($counters as $counter)
                            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="{{$counter->count}}">0</strong>
                                        <span>{{$counter->title}}</span>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-5">
                    <img src="data:image/svg+xml;base64,{{ base64_encode($setting->main_services_icon) }}"
                         class="img-fluid" alt="">
                    <div class="heading-section ftco-animate mt-5">
                        <h2 class="mb-4">{{$setting->main_services_label}}</h2>
                        <p>{{$setting->main_services_desc}}</p>
                    </div>
                </div>
                <div class="col-lg-6 py-5">
                    <div class="row">
                        @foreach($services as $service)
                            <div class="col-md-6 ftco-animate">
                                <div class="media block-6 services border text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <img
                                            width="50px"
                                            src="data:image/svg+xml;base64,{{ base64_encode($service->icon) }}"
                                            class="img-fluid" alt="">
                                    </div>
                                    <div class="mt-3 media-body media-body-2">
                                        <h3 class="heading">{{$service->title}}</h3>
                                        <p>{{$service->info}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">{{$setting->how_it_works_desc}}</span>
                    <h2 class="mb-4">{{$setting->how_it_works_label}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 nav-link-wrap mb-5 pb-md-5 pb-sm-1 ftco-animate">
                    <div class="nav ftco-animate nav-pills justify-content-center text-center" id="v-pills-tab"
                         role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-nextgen-tab" data-toggle="pill" href="#v-pills-nextgen"
                           role="tab" aria-controls="v-pills-nextgen" aria-selected="true">Next gen VPS</a>

                        <a class="nav-link" id="v-pills-performance-tab" data-toggle="pill" href="#v-pills-performance"
                           role="tab" aria-controls="v-pills-performance" aria-selected="false">Performance</a>

                        <a class="nav-link" id="v-pills-effect-tab" data-toggle="pill" href="#v-pills-effect" role="tab"
                           aria-controls="v-pills-effect" aria-selected="false">Effectiveness</a>
                    </div>
                </div>
                <div class="col-md-12 align-items-center ftco-animate">

                    <div class="tab-content ftco-animate" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-nextgen" role="tabpanel"
                             aria-labelledby="v-pills-nextgen-tab">
                            <div class="d-md-flex">
                                <div class="one-forth align-self-center">
                                    <img
                                        src="data:image/svg+xml;base64,{{ base64_encode($setting->how_it_works_icon) }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="one-half ml-md-5 align-self-center">
                                    <h2 class="mb-4">Next gen VPS hosting</h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                        right at the coast of the Semantics, a large language ocean.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate,
                                        quibusdam sunt iste dolores consequatur</p>
                                    <p><a href="#" class="btn btn-primary py-3">Get in touch</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-performance" role="tabpanel"
                             aria-labelledby="v-pills-performance-tab">
                            <div class="d-md-flex">
                                <div class="one-forth order-last align-self-center">
                                    <img src="images/undraw_visual_data_b1wx.svg" class="img-fluid" alt="">
                                </div>
                                <div class="one-half order-first mr-md-5 align-self-center">
                                    <h2 class="mb-4">Performance VPS hosting</h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                        right at the coast of the Semantics, a large language ocean.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate,
                                        quibusdam sunt iste dolores consequatur</p>
                                    <p><a href="#" class="btn btn-primary py-3">Get in touch</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-effect" role="tabpanel"
                             aria-labelledby="v-pills-effect-tab">
                            <div class="d-md-flex">
                                <div class="one-forth align-self-center">
                                    <img src="images/undraw_business_plan_5i9d.svg" class="img-fluid" alt="">
                                </div>
                                <div class="one-half ml-md-5 align-self-center">
                                    <h2 class="mb-4">Effective VPS hosting</h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                        right at the coast of the Semantics, a large language ocean.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate,
                                        quibusdam sunt iste dolores consequatur</p>
                                    <p><a href="#" class="btn btn-primary py-3">Get in touch</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2>{{$setting->recent_blog_label}}</h2>
                    <p>{{$setting->recent_blog_desc}}</p>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry">
                            <a href="blog-single.html" class="block-20"
                               style="background-image: url({{$blog->image}});">
                            </a>
                            <div class="text d-flex py-4">
                                <div class="meta mb-3">
                                    <div><a href="#">{{$blog->created_at->format('Y-m-d')}}</a></div>
                                    <div><a href="#">MADA</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> {{$blog->comments_count}}</a></div>
                                </div>
                                <div class="desc pl-3">
                                    <h3 class="heading"><a href="#">{{$blog->title}}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

@stop
