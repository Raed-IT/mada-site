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
                    <h2 class="mb-4">Why Choose Us</h2>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthographic.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center order-md-last">
                            <span class="flaticon-cloud"></span>
                        </div>
                        <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
                            <h3 class="heading">Super Fast Server</h3>
                            <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts it is an
                                almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-server"></span>
                        </div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Daily Backups</h3>
                            <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts it is an
                                almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center order-md-last">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
                            <h3 class="heading">Technical Services</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-life-insurance"></span>
                        </div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Secure and Reliable</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center order-md-last">
                            <span class="flaticon-cloud-computing"></span>
                        </div>
                        <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
                            <h3 class="heading">DNS Control</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-settings"></span>
                        </div>
                        <div class="media-body pl-4">
                            <h3 class="heading">24/7 Support</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">More than 12,000 websites trusted hosted</span>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="12000">0</strong>
                                    <span>CMS Installation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Awards Won</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="10000">0</strong>
                                    <span>Registered Domains</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="9000">0</strong>
                                    <span>Satisfied Customers</span>
                                </div>
                            </div>
                        </div>
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
                        <h2 class="mb-4">Our Main Services</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic. A small river named Duden flows by their place and supplies it with the
                            necessary regelialia. It is a paradisematic country.</p>
                    </div>
                </div>
                <div class="col-lg-6 py-5">
                    <div class="row">
                        <div class="col-md-6 ftco-animate">
                            <div class="media block-6 services border text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-cloud-computing"></span>
                                </div>
                                <div class="mt-3 media-body media-body-2">
                                    <h3 class="heading">Cloud VPS</h3>
                                    <p>Even the all-powerful Pointing has no control about the blind texts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ftco-animate">
                            <div class="media block-6 services border text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-cloud"></span>
                                </div>
                                <div class="mt-3 media-body media-body-2">
                                    <h3 class="heading">Share</h3>
                                    <p>Even the all-powerful Pointing has no control about the blind texts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ftco-animate">
                            <div class="media block-6 services border text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-server"></span>
                                </div>
                                <div class="mt-3 media-body media-body-2">
                                    <h3 class="heading">VPS</h3>
                                    <p>Even the all-powerful Pointing has no control about the blind texts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ftco-animate">
                            <div class="media block-6 services border text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-database"></span>
                                </div>
                                <div class="mt-3 media-body media-body-2">
                                    <h3 class="heading">Dedicated</h3>
                                    <p>Even the all-powerful Pointing has no control about the blind texts</p>
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
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Services</span>
                    <h2 class="mb-4">How it works</h2>
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
                    <h2>Recent Blog</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20"
                           style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                                <div><a href="#">May 8, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="100">
                        <a href="blog-single.html" class="block-20"
                           style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                                <div><a href="#">May 8, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="200">
                        <a href="blog-single.html" class="block-20"
                           style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                                <div><a href="#">May 8, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop