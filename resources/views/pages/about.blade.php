@extends('layouts.app')

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content"><h1 class="breadcumb-title">A Propos</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{route('home')}}">Accueil</a></li>
                        <li>A Propos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout3">
                        <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                        <div class="service-top">
                            <div class="service-icon">
                                {{--                                <img src="assets/img/icon/sr-icon-1-1.png" alt="Features">--}}
                            </div>
                            <span class="service-number">01</span></div>
                        <h3 class="service-title h5"><a>Notre vision</a></h3>
                        <p class="service-text">
                            Vous accompagnez pour la réussite de vos projets et la réalisation de toutes vos tâches au
                            quotidien.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout3">
                        <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                        <div class="service-top">
                            <div class="service-icon">
                                {{--                                <img src="assets/img/icon/sr-icon-1-2.png" alt="Features">--}}
                            </div>
                            <span class="service-number">02</span></div>
                        <h3 class="service-title h5"><a>Nos objectifs</a></h3>
                        <p class="service-text">
                            Vous décharger et porlter à bout de bras tous vos projets jusqu'à leur réalisation
                            intégrale, palier aux défis et aux difficultés liés au travail.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout3">
                        <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                        <div class="service-top">
                            <div class="service-icon">
                                {{--                                <img src="assets/img/icon/sr-icon-1-3.png" alt="Features">--}}
                            </div>
                            <span class="service-number">03</span></div>
                        <h3 class="service-title h5"><a>Nos valeurs</a></h3>
                        <p class="service-text">
                            Nous respectons les échéances dans l'exécution des projets. Nous offrons un service de
                            qualité défiant toute concurrence, satisfaire le client est une exigence sinon un impératif
                            de nécessité.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout3">
                        <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                        <div class="service-top">
                            <div class="service-icon"><img src="assets/img/icon/sr-icon-1-4.png" alt="Features"></div>
                            <span class="service-number">04</span></div>
                        <h3 class="service-title h5"><a href="service-details.html">Business Analycis</a></h3>
                        <p class="service-text">Cardinate premier technology without sustainable leadership work...</p>
                        <a
                            href="service-details.html" class="link-btn">Read More<i
                                class="far fa-long-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </section>

    <section data-bg-src="assets/img/bg/about-bg-5-1.jpg">
        <div class="container container-style1">
            <div class="row flex-row-reverse align-items-center gx-70">
                <div class="col-lg-6 col-xl">
                    <p>
                        L'entreprise produit de l'eau purifiée LACHAI-ROI. « LACHAI-ROI » est une
                        marque renommée dans le secteur de l’eau dans la province du HautKatanga, et elle est en
                        train de devenir l’eau potable pure la plus fiable avec la
                        certification industrielle pour la qualité de l’eau.
                        <br>
                        <br>
                        Nous produisons et mettons à disposition de tous les âges (bébés, enfants,
                        adultes et personnes âgées) une eau pure et de qualité nommée LACHAI-ROI
                        dans tous ses formats, 500ml, 750ml, 1,5L, 5L, 10L et 20L.
                        <br>
                        <br>
                        L'entreprise, grâce à sa stratégie de marketing intelligent, est fière de
                        sécuriser des milliers de clients et a obtenu avec succès le label OCC
                        (Certificat de l'Office Congolais de Contrôle).
                        <br>
                        <br>
                        En plus de produire de l'eau purifiée LACHAI-ROI, la société a le plan
                        d'expansion pour augmenter la capacité de sa production et démarrer
                        également la production de boissons gazeuses en bouteille plastique et
                        canette pour ces produits à l'avenir.
                        <br>
                        <br>
                        Notre eau est de qualité et la pureté est garantie.

                    </p>
                </div>
                <div class="col-lg-6 col-xl-auto wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-box2">
                        <h2 class="sec-title3 h1">Description</h2>
                        <p>
                            GROUPE MANNE CACHEE SARL est une société dédiée et dynamique,
                            enregistrée sous la loi de la RD Congo, son numéro d'enregistrement est
                            CD/LSH/RCCM/20-B-00927, ID. NAT.: 05-F4300-N70294F, Numéro d’Impôt:
                            A2044946C.
                            <br>
                            <br>
                            Basée à Lubumbashi en République Démocratique du Congo, GROUPE
                            MANNE CACHEE SARL, en sigle « GMC SARL », est une entreprise
                            familiale, qui a été formellement créée en 2003 par Mme BAISOLE TAWELO
                            Esther, est une société multisectorielle de droit Congolais, spécialisé dans
                            différents domaines: l'eau purifiée mise en bouteille, la publicité, l'imprimerie,
                            le génie civil et la fourniture.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space-top space-extra-bottom">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area"><span class="sec-subtitle">Grands Membres de l'Equipe</span>
                        <h2 class="sec-title3 h1">UNE EQUIPE D'EXPERTS</h2></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a><img src="assets/img/team/t-2-1.jpg" alt="image"></a>
                            <div class="team-social">
                                {{--                                <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i--}}
                                {{--                                        class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a>--}}
                                {{--                                <a--}}
                                {{--                                    href="#"><i class="fab fa-behance"></i></a> <a href="#"><i--}}
                                {{--                                        class="fab fa-youtube"></i></a>--}}
                            </div>
                        </div>
                        <div class="team-content"><h3 class="team-title h5">
                                <a class="text-inherit">
                                    BAISOLE TAWELO Esther
                                </a>
                            </h3>
                            {{--                            <p class="team-degi">Cheif Expert</p>--}}
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a><img src="assets/img/team/t-2-2.jpg" alt="image"></a>
                            <div class="team-social">
                                {{--                                <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i--}}
                                {{--                                        class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a>--}}
                                {{--                                <a--}}
                                {{--                                    href="#"><i class="fab fa-behance"></i></a> <a href="#"><i--}}
                                {{--                                        class="fab fa-youtube"></i></a>--}}
                            </div>
                        </div>
                        <div class="team-content"><h3 class="team-title h5">
                                <a class="text-inherit">
                                    LOBANGA Harvey
                                </a>
                            </h3>
                            {{--                            <p class="team-degi">Cheif Expert</p>--}}
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a><img src="assets/img/team/t-2-3.jpg" alt="image"></a>
                            <div class="team-social">
                                {{--                                <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i--}}
                                {{--                                        class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a>--}}
                                {{--                                <a--}}
                                {{--                                    href="#"><i class="fab fa-behance"></i></a> <a href="#"><i--}}
                                {{--                                        class="fab fa-youtube"></i></a>--}}
                            </div>
                        </div>
                        <div class="team-content"><h3 class="team-title h5">
                                <a class="text-inherit">
                                    UCAMA Gracia
                                </a>
                            </h3>
                            {{--                            <p class="team-degi">Cheif Expert</p>--}}
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a><img src="assets/img/team/t-2-4.jpg" alt="image"></a>
                            <div class="team-social">
                                {{--                                <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i--}}
                                {{--                                        class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a>--}}
                                {{--                                <a--}}
                                {{--                                    href="#"><i class="fab fa-behance"></i></a> <a href="#"><i--}}
                                {{--                                        class="fab fa-youtube"></i></a>--}}
                            </div>
                        </div>
                        <div class="team-content"><h3 class="team-title h5">
                                <a class="text-inherit">
                                    MUNGUNUTI Divine
                                </a>
                            </h3>
                            {{--                            <p class="team-degi">Cheif Expert</p>--}}
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a><img src="assets/img/team/t-2-5.jpg" alt="image"></a>
                            <div class="team-social">
                                {{--                                <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i--}}
                                {{--                                        class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a>--}}
                                {{--                                <a--}}
                                {{--                                    href="#"><i class="fab fa-behance"></i></a> <a href="#"><i--}}
                                {{--                                        class="fab fa-youtube"></i></a>--}}
                            </div>
                        </div>
                        <div class="team-content"><h3 class="team-title h5">
                                <a class="text-inherit">
                                    ALIRACH Eunicia
                                </a>
                            </h3>
                            {{--                            <p class="team-degi">Cheif Expert</p>--}}
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="team-style2">
                        <div class="team-img">
                            <div class="team-shape1"></div>
                            <div class="team-shape2"></div>
                            <a><img src="assets/img/team/t-2-6.jpg" alt="image"></a>
                            <div class="team-social">
                                {{--                                <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i--}}
                                {{--                                        class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a>--}}
                                {{--                                <a--}}
                                {{--                                    href="#"><i class="fab fa-behance"></i></a> <a href="#"><i--}}
                                {{--                                        class="fab fa-youtube"></i></a>--}}
                            </div>
                        </div>
                        <div class="team-content"><h3 class="team-title h5">
                                <a class="text-inherit">
                                    WATHMABER Eliel
                                </a>
                            </h3>
                            {{--                            <p class="team-degi">Cheif Expert</p>--}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
