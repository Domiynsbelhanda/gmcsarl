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
                    <br>
                    <ul>
                        <li>
                            Dans son programme d’accroissement de ses productions, GMC Sarl a planifié de mettre en
                            service, en début de l’année 2024, sa seconde usine d’une grande capacité de la
                            production de l’eau minérale Lachaï-roï à Lubumbashi en vue de faire face à la forte
                            sollicitation de sa clientèle et cela grâce à l’accompagnement de FPI.
                        </li>
                        <li>
                            GMC Sarl est également dans le domaine de publicité depuis 2009 et assure la location
                            de ses panneaux publicitaires implantés dans les principales villes de la République
                            démocratique du Congo (Kinshasa, Matadi, Boma, Mbuji-Mayi, Lubumbashi, Kolwezi,
                            Fungurume, Kakanda, Kasumbalesa, Sakania, Goma, Bunia….).
                        </li>
                        <li>
                            GMC Sarl est également dotée d’une imprimerie industrielle située à son siège social à
                            Lubumbashi. GMC Sarl vous propose un service d’impression de qualité sur tous types de
                            supports : des affiches sur bâches, T-shirts, polos, tasses, assiettes, broderies,
                            drapeau, …..
                            <br>
                            Vous pouvez également passer, auprès de GMC Sarl, vos commande des documents de gestion
                            tels que les carnets, facturiers, bons de commande, bons de livraison, des sorties
                            magasins, bons de caisse, prospectus, des cachets, Etc…….
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-xl-auto wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-box2">
                        <h2 class="sec-title3 h1">Description</h2>
                        <p>
                            Basée à Lubumbashi en République démocratique du Congo, la Société Groupe Manne Cachée Sarl,
                            en sigle « GMC Sarl », créée en 2003 par Madame BAISOLE TAWELO Esther, est une société
                            multisectorielle de droit congolais spécialisée dans les différents domaines dont les
                            principaux sont:
                        <ul>
                            <li>
                                Dès 2003, GMC Sarl a commencé à participer aux travaux de sous-traitance et à la
                                livraison des diverses fournitures dans des sociétés.
                            </li>
                            <li>
                                Dès 2008, elle s’est lancée dans les réalisations des travaux des infrastructures à
                                l’aide des plusieurs contrats signés avec certaines sociétés, organismes et gouvernorat
                                notamment la Coopération Technique Belge (CTB), la BRALIMA, l’UNOPS (Banque Mondiale),
                                le Gouvernorat du Katanga, Celtel (Airtel)…et continue à évoluer dans ce domaine
                                jusqu’en ce jour.
                            </li>
                            <li>
                                Depuis 2021, GMC Sarl produit et livre de l’eau minérale Lachaï-roï en bouteille de
                                500 ml, 750 ml, 1,5 l et des bidons de 20 L appréciée de tous, grâce à sa saveur
                                agréable. Ladite production est faite à partir de son usine située à Lubumbashi.
                            </li>
                        </ul>
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
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
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

            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">

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
