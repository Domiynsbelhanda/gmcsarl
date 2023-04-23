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
    <section class="space">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area"><span class="sec-subtitle">Great Team Members</span>
                        <h2 class="sec-title3 h1">We Have Expert Team</h2></div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a href="team-details.html"><img src="assets/img/team/t-2-1.jpg" alt="image"></a>
                            <div class="team-social"><a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i
                                        class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a>
                                <a
                                    href="#"><i class="fab fa-behance"></i></a> <a href="#"><i
                                        class="fab fa-youtube"></i></a></div>
                        </div>
                        <div class="team-content"><h3 class="team-title h5"><a class="text-inherit"
                                                                               href="team-details.html">Grayson
                                    Gabriel</a>
                            </h3>
                            <p class="team-degi">Cheif Expert</p></div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a href="team-details.html"><img src="assets/img/team/t-2-2.jpg" alt="image"></a>
                            <div class="team-social"><a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i
                                        class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a>
                                <a
                                    href="#"><i class="fab fa-behance"></i></a> <a href="#"><i
                                        class="fab fa-youtube"></i></a></div>
                        </div>
                        <div class="team-content"><h3 class="team-title h5"><a class="text-inherit"
                                                                               href="team-details.html">Samuel
                                    Thomas</a>
                            </h3>
                            <p class="team-degi">Cheif Expert</p></div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a href="team-details.html"><img src="assets/img/team/t-2-3.jpg" alt="image"></a>
                            <div class="team-social"><a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i
                                        class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a>
                                <a
                                    href="#"><i class="fab fa-behance"></i></a> <a href="#"><i
                                        class="fab fa-youtube"></i></a></div>
                        </div>
                        <div class="team-content"><h3 class="team-title h5"><a class="text-inherit"
                                                                               href="team-details.html">William
                                    Lucas</a>
                            </h3>
                            <p class="team-degi">Cheif Expert</p></div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a href="team-details.html"><img src="assets/img/team/t-2-4.jpg" alt="image"></a>
                            <div class="team-social"><a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i
                                        class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a>
                                <a
                                    href="#"><i class="fab fa-behance"></i></a> <a href="#"><i
                                        class="fab fa-youtube"></i></a></div>
                        </div>
                        <div class="team-content"><h3 class="team-title h5"><a class="text-inherit"
                                                                               href="team-details.html">Daniel
                                    Matthew</a>
                            </h3>
                            <p class="team-degi">Cheif Expert</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="space" data-bg-src="assets/img/bg/counter-bg-2-1.jpg">
        <div class="container">
            <div class="row justify-content-between gy-4">
                <div class="col-6 col-lg-auto">
                    <div class="counter-media">
                        <div class="counter-media__icon"><img src="assets/img/icon/count-1-1.png" alt="icon"></div>
                        <div class="media-body"><span class="counter-media__number h1 text-white">858</span>
                            <p class="counter-media__title text-white">Successful Projects</p></div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="counter-media">
                        <div class="counter-media__icon"><img src="assets/img/icon/count-1-2.png" alt="icon"></div>
                        <div class="media-body"><span class="counter-media__number h1 text-white">650</span>
                            <p class="counter-media__title text-white">Media Activities</p></div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="counter-media">
                        <div class="counter-media__icon"><img src="assets/img/icon/count-1-3.png" alt="icon"></div>
                        <div class="media-body"><span class="counter-media__number h1 text-white">567</span>
                            <p class="counter-media__title text-white">Skilled Experts</p></div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="counter-media">
                        <div class="counter-media__icon"><img src="assets/img/icon/count-1-4.png" alt="icon"></div>
                        <div class="media-body"><span class="counter-media__number h1 text-white">28k</span>
                            <p class="counter-media__title text-white">Happy Clients</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <section class="space-top space-extra-bottom" data-bg-src="assets/img/bg/sr-bg-2-1.jpg">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area"><span class="sec-subtitle">WHAT WE’RE OFFERING</span>
                        <h2 class="sec-title3 h1">Available Services</h2></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-style2">
                        <div class="service-img"><span class="service-number">01</span> <img
                                src="assets/img/service/sr-2-1.jpg" alt="image"></div>
                        <div class="service-content">
                            <div class="service-shape" data-bg-src="assets/img/shape/sr-bg-shape-2-1.png"></div>
                            <h3 class="service-title h5"><a href="service-details.html">Digital Marketing</a></h3>
                            <p class="service-text">Intrinsicly reinvent virtual imperatives methods of empowerment and
                                revolutionary quality...</p><a href="service-details.html" class="link-btn">Read Details<i
                                    class="far fa-arrow-right"></i></a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-style2">
                        <div class="service-img"><span class="service-number">02</span> <img
                                src="assets/img/service/sr-2-2.jpg" alt="image"></div>
                        <div class="service-content">
                            <div class="service-shape" data-bg-src="assets/img/shape/sr-bg-shape-2-1.png"></div>
                            <h3 class="service-title h5"><a href="service-details.html">Web Development</a></h3>
                            <p class="service-text">Intrinsicly reinvent virtual imperatives methods of empowerment and
                                revolutionary quality...</p><a href="service-details.html" class="link-btn">Read Details<i
                                    class="far fa-arrow-right"></i></a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-style2">
                        <div class="service-img"><span class="service-number">03</span> <img
                                src="assets/img/service/sr-2-3.jpg" alt="image"></div>
                        <div class="service-content">
                            <div class="service-shape" data-bg-src="assets/img/shape/sr-bg-shape-2-1.png"></div>
                            <h3 class="service-title h5"><a href="service-details.html">Software Services</a></h3>
                            <p class="service-text">Intrinsicly reinvent virtual imperatives methods of empowerment and
                                revolutionary quality...</p><a href="service-details.html" class="link-btn">Read Details<i
                                    class="far fa-arrow-right"></i></a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-style2">
                        <div class="service-img"><span class="service-number">04</span> <img
                                src="assets/img/service/sr-2-4.jpg" alt="image"></div>
                        <div class="service-content">
                            <div class="service-shape" data-bg-src="assets/img/shape/sr-bg-shape-2-1.png"></div>
                            <h3 class="service-title h5"><a href="service-details.html">Machine Learning</a></h3>
                            <p class="service-text">Intrinsicly reinvent virtual imperatives methods of empowerment and
                                revolutionary quality...</p><a href="service-details.html" class="link-btn">Read Details<i
                                    class="far fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space-top">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-between">
                <div class="col-lg-auto text-center text-lg-start">
                    <div class="title-area"><span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Our LATEST PROJECTS</span>
                        <h2 class="sec-title3 h1">Our Successful Projects</h2></div>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="sec-btns">
                        <button class="vs-btn style4" data-slick-prev="#projectslide1"><i class="far fa-arrow-left"></i>Prev
                        </button>
                        <button class="vs-btn style4" data-slick-next="#projectslide1">Next<i
                                class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid overflow-hidden px-xxl-0">
            <div class="row vs-carousel" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3"
                 data-md-slide-show="2" id="projectslide1">
                <div class="col-xl-3">
                    <div class="project-style2">
                        <div class="project-img"><img src="assets/img/gallery/gal-1-1.jpg" alt="project">
                            <div class="project-shape"></div>
                            <a href="assets/img/gallery/gal-1-1.jpg" class="popup-image icon-btn style3"><i
                                    class="far fa-search"></i></a></div>
                        <div class="project-content"><span class="project-label">IT Solution</span>
                            <h3 class="project-title h5"><a href="project-details.html" class="text-reset">Digital
                                    Marketing</a></h3></div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="project-style2">
                        <div class="project-img"><img src="assets/img/gallery/gal-1-2.jpg" alt="project">
                            <div class="project-shape"></div>
                            <a href="assets/img/gallery/gal-1-2.jpg" class="popup-image icon-btn style3"><i
                                    class="far fa-search"></i></a></div>
                        <div class="project-content"><span class="project-label">App Solution</span>
                            <h3 class="project-title h5"><a href="project-details.html" class="text-reset">App
                                    Development</a></h3></div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="project-style2">
                        <div class="project-img"><img src="assets/img/gallery/gal-1-3.jpg" alt="project">
                            <div class="project-shape"></div>
                            <a href="assets/img/gallery/gal-1-3.jpg" class="popup-image icon-btn style3"><i
                                    class="far fa-search"></i></a></div>
                        <div class="project-content"><span class="project-label">UI Design</span>
                            <h3 class="project-title h5"><a href="project-details.html" class="text-reset">Portfolio
                                    Design</a></h3></div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="project-style2">
                        <div class="project-img"><img src="assets/img/gallery/gal-1-4.jpg" alt="project">
                            <div class="project-shape"></div>
                            <a href="assets/img/gallery/gal-1-4.jpg" class="popup-image icon-btn style3"><i
                                    class="far fa-search"></i></a></div>
                        <div class="project-content"><span class="project-label">Cyber Security</span>
                            <h3 class="project-title h5"><a href="project-details.html" class="text-reset">Database
                                    checkup</a></h3></div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="project-style2">
                        <div class="project-img"><img src="assets/img/gallery/gal-1-5.jpg" alt="project">
                            <div class="project-shape"></div>
                            <a href="assets/img/gallery/gal-1-5.jpg" class="popup-image icon-btn style3"><i
                                    class="far fa-search"></i></a></div>
                        <div class="project-content"><span class="project-label">Affiliate</span>
                            <h3 class="project-title h5"><a href="project-details.html" class="text-reset">Digital
                                    Marketing</a></h3></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space-extra">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area"><span class="sec-subtitle">Our Prices</span>
                        <h2 class="sec-title3 h1">Pricing Plans</h2></div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2" data-center-mode="true">
                <div class="col-xl-4">
                    <div class="price-style1">
                        <div class="price-shape" data-bg-src="assets/img/shape/price-bg-shape-1-1.png"></div>
                        <h3 class="price-package h5">Basic Plan</h3>
                        <div class="price-amount h1">$29.99 <span class="price-duration">/monthly</span></div>
                        <div class="price-features">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Ad Management</li>
                                <li><i class="far fa-check-circle"></i>Live Chat</li>
                                <li><i class="far fa-check-circle"></i>Multi-Language Content</li>
                                <li><i class="far fa-check-circle"></i>Conversational Bots</li>
                                <li><i class="far fa-check-circle"></i>Programmable Chatbots</li>
                            </ul>
                        </div>
                        <a href="contact.html" class="vs-btn">Get Started<i class="far fa-arrow-right"></i></a></div>
                </div>
                <div class="col-xl-4">
                    <div class="price-style1">
                        <div class="price-shape" data-bg-src="assets/img/shape/price-bg-shape-1-1.png"></div>
                        <h3 class="price-package h5">Silver Plan</h3>
                        <div class="price-amount h1">$39.99 <span class="price-duration">/anually</span></div>
                        <div class="price-features">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Ad Management</li>
                                <li><i class="far fa-check-circle"></i>Live Chat</li>
                                <li><i class="far fa-check-circle"></i>Multi-Language Content</li>
                                <li><i class="far fa-check-circle"></i>Conversational Bots</li>
                                <li><i class="far fa-check-circle"></i>Programmable Chatbots</li>
                            </ul>
                        </div>
                        <a href="contact.html" class="vs-btn">Get Started<i class="far fa-arrow-right"></i></a></div>
                </div>
                <div class="col-xl-4">
                    <div class="price-style1">
                        <div class="price-shape" data-bg-src="assets/img/shape/price-bg-shape-1-1.png"></div>
                        <h3 class="price-package h5">Gold Plan</h3>
                        <div class="price-amount h1">$79.99 <span class="price-duration">/yearly</span></div>
                        <div class="price-features">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Ad Management</li>
                                <li><i class="far fa-check-circle"></i>Live Chat</li>
                                <li><i class="far fa-check-circle"></i>Multi-Language Content</li>
                                <li><i class="far fa-check-circle"></i>Conversational Bots</li>
                                <li><i class="far fa-check-circle"></i>Programmable Chatbots</li>
                            </ul>
                        </div>
                        <a href="contact.html" class="vs-btn">Get Started<i class="far fa-arrow-right"></i></a></div>
                </div>
                <div class="col-xl-4">
                    <div class="price-style1">
                        <div class="price-shape" data-bg-src="assets/img/shape/price-bg-shape-1-1.png"></div>
                        <h3 class="price-package h5">VIP Plan</h3>
                        <div class="price-amount h1">$99.99 <span class="price-duration">/lifetime</span></div>
                        <div class="price-features">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Ad Management</li>
                                <li><i class="far fa-check-circle"></i>Live Chat</li>
                                <li><i class="far fa-check-circle"></i>Multi-Language Content</li>
                                <li><i class="far fa-check-circle"></i>Conversational Bots</li>
                                <li><i class="far fa-check-circle"></i>Programmable Chatbots</li>
                            </ul>
                        </div>
                        <a href="contact.html" class="vs-btn">Get Started<i class="far fa-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </section>
    <section data-bg-src="assets/img/bg/appoin-bg-1-1.jpg">
        <div class="container">
            <div class="row gx-60">
                <div class="col-xl-6 align-self-center space wow fadeInUp" data-wow-delay="0.2s"><span
                        class="sec-subtitle text-white">Make An Appointment</span>
                    <h2 class="sec-title3 h1 text-white">We Provide Best Advice For Your Future</h2>
                    <hr class="hr-style1">
                    <p class="mb-4 mt-1 pb-3 text-white">Compellingly mesh cross-platform portals through functional
                        human
                        capital world-class architectures for orthogonal initiatives. Assertively benchmark visionary
                        quality vectors after covalent e-tailers. Intrinsicly</p>
                    <div class="row gy-30">
                        <div class="col-md-6">
                            <div class="contact-media">
                                <div class="contact-media__icon"><i class="fal fa-phone-alt"></i></div>
                                <div class="media-body"><span class="contact-media__label">24/7 Call Available</span>
                                    <p class="contact-media__info"><a href="tel:+0423565446789">+042356 5446 (789)</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-media">
                                <div class="contact-media__icon"><i class="fal fa-envelope"></i></div>
                                <div class="media-body"><span class="contact-media__label">Write a Quick mail</span>
                                    <p class="contact-media__info"><a
                                            href="mailto:support@example.com">support@example.com</a></p></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-media">
                                <div class="contact-media__icon"><i class="fal fa-map-marker-alt"></i></div>
                                <div class="media-body"><span class="contact-media__label">Visite America Office</span>
                                    <p class="contact-media__info">3401 Ladera Dr NW,<br>New York</p></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-media">
                                <div class="contact-media__icon"><i class="fal fa-map-marker-alt"></i></div>
                                <div class="media-body"><span class="contact-media__label">Visite German Office</span>
                                    <p class="contact-media__info">Kaiserbleek 4 Goslar<br>Lower Saxony</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 form-wrap1">
                    <form action="#" class="form-style1"><h2 class="form-title h4">Make An Appointment</h2>
                        <div class="form-group"><input type="text" placeholder="Enter Full Name"></div>
                        <div class="form-group"><input type="text" placeholder="Email Address"></div>
                        <div class="form-group"><input type="text" placeholder="Appointment Subject"></div>
                        <div class="form-group"><input type="text" placeholder="mm/dd/yyyy"></div>
                        <div class="form-group"><textarea placeholder="Write a short message..."></textarea></div>
                        <div class="form-btn">
                            <button class="vs-btn style5">Make An Appointment<i class="far fa-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area"><span class="sec-subtitle">Weekly Updates</span>
                        <h2 class="sec-title3 h1">Weekly Latest Updates</h2></div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img"><img src="assets/img/blog/blog-1-1.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>24 Feb,
                                        2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a></div>
                                <h3 class="blog-title h5"><a href="blog-details.html">Contrary to popular belief ipsum
                                        is
                                        not simply</a></h3><a href="blog-details.html" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img"><img src="assets/img/blog/blog-1-4.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>30 Mar,
                                        2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a></div>
                                <h3 class="blog-title h5"><a href="blog-details.html">Lorem ipsum placeholder text
                                        commonly
                                        used</a></h3><a href="blog-details.html" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img"><img src="assets/img/blog/blog-1-2.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>31 Jul,
                                        2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a></div>
                                <h3 class="blog-title h5"><a href="blog-details.html">From its medieval to the digital
                                        learn
                                        everything</a></h3><a href="blog-details.html" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img"><img src="assets/img/blog/blog-1-3.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>26 Aug,
                                        2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a></div>
                                <h3 class="blog-title h5"><a href="blog-details.html">Global Business Goal Make Life
                                        Easy
                                        From Tech</a></h3><a href="blog-details.html" class="link-btn">Read Details<i
                                        class="far fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="space" data-bg-src="assets/img/bg/brand-bg-2-1.jpg">
        <div class="container">
            <div class="row vs-carousel text-center" data-slide-show="5" data-md-slide-show="3" data-sm-slide-show="2"
                 data-xs-slide-show="2">
                <div class="col-auto"><img src="assets/img/brand/br-1-1.png" alt="Brand"></div>
                <div class="col-auto"><img src="assets/img/brand/br-1-2.png" alt="Brand"></div>
                <div class="col-auto"><img src="assets/img/brand/br-1-3.png" alt="Brand"></div>
                <div class="col-auto"><img src="assets/img/brand/br-1-4.png" alt="Brand"></div>
                <div class="col-auto"><img src="assets/img/brand/br-1-5.png" alt="Brand"></div>
                <div class="col-auto"><img src="assets/img/brand/br-1-6.png" alt="Brand"></div>
            </div>
        </div>
    </div>
@endsection
