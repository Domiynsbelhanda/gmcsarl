@extends('layouts.app')

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content"><h1 class="breadcumb-title">Accueil</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{route('home')}}">Services</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra-bottom">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout2">
                        <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                        <div class="service-icon"><img src="assets/img/icon/sr-icon-1-1.png" alt="Features"></div>
                        <h3 class="service-title h5"><a>Production Eau Minerale</a></h3>
                        <p class="service-text">
                            LACHAI-ROI est une eau de table filtrée selon les normes strictes de l'OMS. Elle possède une
                            pureté exceptionnelle, une fraicheur continue.
                            <br>
                            LACHAI-ROI est une très bonne eau pour les bébés et adultes. Il peut être consommée à
                            n'importe quelle circonstance.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout2">
                        <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                        <div class="service-icon"><img src="assets/img/icon/sr-icon-1-2.png" alt="Features"></div>
                        <h3 class="service-title h5"><a>Imprimerie</a></h3>
                        <p class="service-text">
                            Nous imprimons à l'échelle de bureau et industriel, nous imprimons sur tous supports et tout
                            format tels que brochure, flyers, affiche, catalogue, depliants, carte de visite,
                            calendrier, facture, magazine, carte d'invitation, etc...
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout2">
                        <div class="service-bg" data-bg-src="assets/img/bg/sr-box-bg-1.jpg"></div>
                        <div class="service-icon"><img src="assets/img/icon/sr-icon-1-3.png" alt="Features"></div>
                        <h3 class="service-title h5"><a>Publicité et Marketing</a></h3>
                        <p class="service-text">
                            Nous offrons des services de communication, marketing et publicité. Nous vous offrons des
                            services d'affichage grand format sur les différentes villes de la République Démocratique
                            du Congo tels que Kinshasa, Lubumbashi, Kasumbalesa, Sakania, Kolwezi, Kakanda,
                            Fungurume, Goma, Mbuji-Mayi, Matadi, Boma, Bunia, etc...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="z-index-common space" data-bg-src="assets/img/bg/cta-bg-1-2.jpg">
        <div class="container">
            <div class="row text-center text-lg-start align-items-center justify-content-between">
                <div class="col-lg-auto"><span
                        class="sec-subtitle text-white">
                        NOUS SOMMES LÀ POUR RÉPONDRE À VOS QUESTIONS 24 HEURES SUR 24, 7 JOURS SUR 7
                    </span>
                    <h2 class="h1 sec-title cta-title1">
                        BESOIN D'UNE CONSULTATION ?
                    </h2></div>
                <div class="col-lg-auto"><a href="tel:+243811497046" class="vs-btn">CONTACTEZ-NOUS<i
                            class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="process-wrap1 space-top space-extra-bottom" data-bg-src="assets/img/bg/process-bg-3-1.jpg">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area"><span class="sec-subtitle">
                            CE QUE NOUS FAISONS POUR VOUS
                        </span>
                        <h2 class="sec-title3 h1">
                            Notre spécialisation
                        </h2></div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-4 col-xl-auto process-style2">
                    <div class="process-arrow"><img src="assets/img/icon/process-arrow-2-1.png" alt="arrow"></div>
                    <div class="process-icon"><img src="assets/img/icon/process-1-1.png" alt="icon"> <span
                            class="process-number">01</span></div>
                    <h3 class="process-title h5">Planification du projet</h3>
                </div>

                <div class="col-md-4 col-xl-auto process-style2">
                    <div class="process-arrow"><img src="assets/img/icon/process-arrow-2-1.png" alt="arrow"></div>
                    <div class="process-icon"><img src="assets/img/icon/process-1-2.png" alt="icon"> <span
                            class="process-number">02</span></div>
                    <h3 class="process-title h5">Evaluation du projet</h3>
                </div>

                <div class="col-md-4 col-xl-auto process-style2">
                    <div class="process-arrow"><img src="assets/img/icon/process-arrow-2-1.png" alt="arrow"></div>
                    <div class="process-icon"><img src="assets/img/icon/process-1-3.png" alt="icon"> <span
                            class="process-number">03</span></div>
                    <h3 class="process-title h5">Execution du projet</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="space-top space-extra-bottom">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-between">
                <div class="col-lg-auto text-center text-lg-start">
                    <div class="title-area"><span class="sec-subtitle"><i class="fas fa-bring-forward"></i>
                            NOS MEILLEURS COMMENTAIRES
                        </span>
                        <h2 class="sec-title3 h1">Feedback de nos clients</h2></div>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="sec-btns">
                        <button class="vs-btn style4" data-slick-prev="#testislide1"><i class="far fa-arrow-left"></i>Précédent
                        </button>
                        <button class="vs-btn style4" data-slick-next="#testislide1">Suivant<i
                                class="far fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2" id="testislide1">
                <div class="col-xl-4">
                    <div class="testi-style1">
                        <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                        <p class="testi-text">
                            “Je suis très satisfaite de l’eau minérale que vous produisez. Elle est pure,
                            rafraîchissante et délicieuse. Elle m’apporte les minéraux dont j’ai besoin pour ma santé.
                            Merci pour votre travail de qualité !”
                        </p>
                        <h3 class="testi-name h6">Bijou Kabeya</h3>
                        <div class="testi-degi">Katanga Minéralia</div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="testi-style1">
                        <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                        <p class="testi-text">
                            “Votre agence de communication est un atout majeur pour mon projet. Vous avez créé une
                            identité visuelle unique, un logo accrocheur et un slogan percutant. Vous avez su me
                            convaincre, me surprendre et me fidéliser. Vous êtes des professionnels talentueux !”
                        </p>
                        <h3 class="testi-name h6">Nélius NGOMA</h3>
                        <div class="testi-degi">DG Comia</div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="testi-style1">
                        <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                        <p class="testi-text">
                            “Je tiens à vous remercier pour l’impression de mes flyers. Ils sont magnifiques, conformes
                            à ma demande et livrés dans les délais. Vous avez su respecter mes consignes et me
                            conseiller au mieux. Je recommande vivement votre service !”
                        </p>
                        <h3 class="testi-name h6">Jesper KAZADI</h3>
                        <div class="testi-degi">SEO KOLORA</div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="testi-style1">
                        <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                        <p class="testi-text">
                            “e suis ravie de la campagne marketing que vous avez conçue pour mon entreprise. Vous avez
                            su cerner mes besoins, analyser mon marché et proposer des solutions adaptées. Vous avez été
                            à l’écoute, disponibles et efficaces. Vous avez boosté ma visibilité et ma notoriété !”
                        </p>
                        <h3 class="testi-name h6">Julie MWAMBA</h3>
                        <div class="testi-degi">Aqua Congo</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
