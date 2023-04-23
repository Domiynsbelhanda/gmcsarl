@extends('layouts.app')

@section('content')
    <section class="vs-hero-wrapper position-relative">
        <div class="vs-hero-carousel" data-height="980" data-container="1900" data-slidertype="responsive">
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                <img
                    width="1920" height="980" src="{{asset('assets/img/hero/hero-2-1.jpg')}}" class="ls-bg" alt="slider-bg">
                <img
                    width="664" height="522" src="{{asset('assets/img/hero/hero-shape-2-2.png')}}"
                    class="ls-l ls-hide-phone ls-img-layer d-hd-none" alt="image"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; top:463px; left:-6px;"
                    data-ls="offsetxin:left; offsetyin:bottom; durationin:1500; delayin:1400; easingin:easeOutQuint; offsetxout:left; offsetyout:bottom;">
                <img width="1923" height="90" src="{{asset('assets/img/hero/hero-shape-2-1.png')}}"
                     class="ls-l ls-hide-phone ls-img-layer d-hd-none" alt="hero shape"
                     style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:894px; left:-13px;"
                     data-ls="easingin:easeOutQuint; static:forever;">
                <div
                    style="-webkit-text-stroke: 1px rgba(255,255,255,0.10); font-size:300px; text-align:center; font-style:normal; text-decoration:none; text-transform:uppercase; font-weight:600; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; width:1700px; left:50%; top:290px; color:rgba(255, 255, 255, 0.05);"
                    class="ls-l ls-text-layer"
                    data-ls="durationin:1500; delayin:1000; parallax:true; parallaxlevel:8; parallaxaxis:x;">Solution
                </div>

                <h1 style="top:370px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:72px; color:#ffffff; font-family:Exo; width:1000px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Excellent IT services for</h1>
                <h1 style="top:455px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:72px; font-family:Exo; color:#ffffff; text-transform:none; background-color:transparent; background-repeat:no-repeat; cursor:auto; width:1000px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    your success</h1>
                <div
                    style="top:595px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:24px; width:1000px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group justify-content-center">
                        <a href="" class="vs-btn ls-hero-btn">A PROPOS<i class="far fa-arrow-right"></i></a>
                        <a href="" class="vs-btn style2 ls-hero-btn">VOIR PLUS<i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="z-index-common space-top" data-sec-pos="bottom" data-pos-amount="30px" data-pos-for="#aboutv2">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xxl-3 text-center text-xxl-start">
                    <div class="title-area">
                        <h2 class="sec-title3 h1">Nos services</h2></div>
                </div>
                <div class="col-xxl-9">
                    <div class="row vs-carousel feature-slide2 text-center text-xxl-start" data-slide-show="3"
                         data-md-slide-show="2">
                        <div class="col-xl-4">
                            <div class="feature-style2">
                                <div class="feature-icon"><img src="assets/img/icon/fe-2-2.png" alt="Features"></div>
                                <h3 class="feature-title h5"><a class="text-inherit">
                                    Production d'eau minerale
                                    </a></h3>
                                <p class="feature-text">Seize magnetic before visa alignment network wireless whereas
                                    frictionless</p><a href="" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a></div>
                        </div>
                        <div class="col-xl-4">
                            <div class="feature-style2">
                                <div class="feature-icon"><img src="assets/img/icon/fe-2-1.png" alt="Features"></div>
                                <h3 class="feature-title h5"><a class="text-inherit" href="">
                                        Imprimerie
                                    </a></h3>
                                <p class="feature-text">Seize magnetic before visa alignment network wireless whereas
                                    frictionless</p><a href="" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a></div>
                        </div>
                        <div class="col-xl-4">
                            <div class="feature-style2">
                                <div class="feature-icon"><img src="assets/img/icon/fe-2-3.png" alt="Features"></div>
                                <h3 class="feature-title h5"><a class="text-inherit" href="">
                                        Publicité
                                    </a></h3>
                                <p class="feature-text">Seize magnetic before visa alignment network wireless whereas
                                    frictionless</p><a href="service-details.html" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a></div>
                        </div>
                        <div class="col-xl-4">
                            <div class="feature-style2">
                                <div class="feature-icon"><img src="assets/img/icon/fe-2-4.png" alt="Features"></div>
                                <h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">App
                                        Development</a></h3>
                                <p class="feature-text">Seize magnetic before visa alignment network wireless whereas
                                    frictionless</p><a href="service-details.html" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="space" data-bg-src="assets/img/bg/ab-bg-2-1.jpg" id="aboutv2">
        <div class="container">
            <div class="row gx-60">
                <div class="col-xl-6 mb-50 mb-xl-0 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="img-box3">
                        <div class="img-1"><img src="assets/img/about/ab-2-1.jpg" alt="About image"></div>
                        <div class="img-2"><img src="assets/img/about/ab-2-2.jpg" alt="About image"></div>
                        <div class="award-box">
                            <div class="award-box__shape"></div>
                            <div class="award-box__icon"><i class="fal fa-award"></i></div>
                            <div class="media-body"><p class="award-box__number">100+</p>
                                <div class="award-box__text">Awards we won</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 align-self-center text-center text-xl-start"><span class="sec-subtitle"><i
                            class="fas fa-bring-forward"></i>ABOUT OUR COMPANY</span>
                    <h2 class="sec-title3 h1">Connecting people & technology</h2>
                    <p class="mb-4 pb-2 pe-xl-5">Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod ex
                        tempor
                        incididunt labore dolore magna aliquaenim ad minim veniam quis nostrud exercitation laboris.</p>
                    <div class="row gx-60 mb-4 pb-1 gy-2 text-start justify-content-center justify-content-xl-start">
                        <div class="col-auto">
                            <div class="about-media">
                                <div class="about-media__icon"><img src="assets/img/icon/ab-ic-2-1.png" alt="icon">
                                </div>
                                <div class="media-body"><h3 class="about-media__title h6">Provide Skills<br>Services
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="about-media">
                                <div class="about-media__icon"><img src="assets/img/icon/ab-ic-2-2.png" alt="icon">
                                </div>
                                <div class="media-body"><h3 class="about-media__title h6">Urgent Support<br>For Clients
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="contact.html" class="vs-btn">Get A Quote<i class="far fa-arrow-right"></i></a></div>
            </div>
        </div>
    </section>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-6 mb-30 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="img-box4">
                        <div class="img-1"><img src="assets/img/about/ab-3-1.jpg" alt="about image"></div>
                        <div class="img-2"><img src="assets/img/about/ab-3-2.jpg" alt="about image"></div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30 pt-10 pt-lg-0 text-center text-md-start"><span class="sec-subtitle"><i
                            class="fas fa-bring-forward"></i>Get best It solution 2022</span>
                    <h2 class="sec-title3 h1 mb-3 pb-3">Ready To Get Our Best Quality Services</h2>
                    <div class="media-order">
                        <div class="media-order__number">01</div>
                        <div class="media-body"><h3 class="media-order__title h6">We Deliver Perfect Solution</h3>
                            <p class="media-order__text">Rapidiously leverage existing quality services with wireless
                                bandwidth seize functionalized methods...</p></div>
                    </div>
                    <div class="media-order">
                        <div class="media-order__number">02</div>
                        <div class="media-body"><h3 class="media-order__title h6">Specialised Support Service</h3>
                            <p class="media-order__text">Rapidiously leverage existing quality services with wireless
                                bandwidth seize functionalized methods...</p></div>
                    </div>
                    <div class="media-order">
                        <div class="media-order__number">03</div>
                        <div class="media-body"><h3 class="media-order__title h6">We Deliver Perfect Solution</h3>
                            <p class="media-order__text">Rapidiously leverage existing quality services with wireless
                                bandwidth seize functionalized methods...</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
