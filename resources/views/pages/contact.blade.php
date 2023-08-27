@extends('layouts.app')

@section('content')

    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content"><h1 class="breadcumb-title">Contactez-nous</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{route('home')}}">Accueil</a></li>
                        <li>Contactez-nous</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="tab-content" id="nav-contactTabContent">
                <div class="tab-pane fade show active" id="nav-GermanyAddress" role="tabpanel"
                     aria-labelledby="nav-GermanyAddress-tab">
                    <div class="row">
                        <div class="col-lg-6 mb-30">
                            <div class="contact-box"><h3 class="contact-box__title h4">Nos bureaux</h3>
                                <p class="contact-box__text">
                                    _____________________________________
                                </p>
                                <div class="contact-box__item">
                                    <div class="contact-box__icon"><i class="fal fa-phone-alt"></i></div>
                                    <div class="media-body"><h4 class="contact-box__label">N° Téléphone et Adresse email</h4>
                                        <p class="contact-box__info">
                                            <a href="tel:+243811497046"> +243811497046</a>
                                            <a href="tel:+243972043209">+243972043209</a>
                                            <a href="mailto:gmnc.sarl@gmail.com">gmnc.sarl@gmail.com</a>
                                            <a href="mailto:mannecachee2007@yahoo.fr">mannecachee2007@yahoo.fr</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-box__item">
                                    <div class="contact-box__icon"><i class="far fa-map-marker-alt"></i></div>
                                    <div class="media-body"><h4 class="contact-box__label">Office Address</h4>
                                        <p class="contact-box__info">
                                            50, Avenue Manne Cachée, Golf TSHAMALALE, Lubumbashi
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-box__item">
                                    <div class="contact-box__icon"><i class="far fa-clock"></i></div>
                                    <div class="media-body"><h4 class="contact-box__label">Heure de travail</h4>
                                        <p class="contact-box__info">
                                            8:00 - 17:00 ( Lundi - Vendredi ),
                                            8:00 - 12:00 (Samedi),
                                            Fermé (Dimanche)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-30">
                            <div class="contact-box"><h3 class="contact-box__title h4">Laissez-nous un message</h3>
                                <p class="contact-box__text">Nous sommes prêt pour vous aider.</p>
                                <form class="contact-box__form ajax-contact"
                                      action="#" method="POST">
                                    <div class="row gx-20">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="name" id="name"
                                                                                placeholder="Votre nom"> <i
                                                class="fal fa-user"></i></div>
                                        <div class="col-md-6 form-group">
                                            <input type="email" name="email" id="email"
                                                                                placeholder="Adresse email"> <i
                                                class="fal fa-envelope"></i></div>
                                        <div class="col-12 form-group"><select name="subject" id="subject">
                                                <option selected="selected" disabled="disabled" hidden>Sujet:</option>
                                                <option value="Web Development">Eau minerale</option>
                                                <option value="UI Design">Imprimerie</option>
                                                <option value="CMS Development">Publicité</option>
                                                <option value="Theme Development">Autres</option>
                                            </select></div>
                                        <div class="col-12 form-group">
                                            <textarea name="message" id="message"
                                                                                 placeholder="Entrez votre message ici"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="vs-btn">Soumettre<i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messages mb-0 mt-3"></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
