<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo"><a href="{{route('home')}}"><img src="assets/img/logo.png" alt="Manne Cachée"
                                                                  class="logo"></a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li><a href="{{route('about')}}">A Propos de nous</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Contactez-nous</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="sidemenu-wrapper d-none d-lg-block">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget">
            <div class="vs-widget-about">
                <div class="footer-logo"><a href="{{route('home')}}"><img src="assets/img/logo.png" alt="Manne Cachée"
                                                                          class="logo"></a>
                </div>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="widget"><h4 class="widget_title">Notre Gallerie</h4>
            <div class="sidebar-gallery">
                <div class="gallery-thumb"><img src="assets/img/widget/gal-1-1.jpg" alt="Gallery Image" class="w-100">
                </div>
                <div class="gallery-thumb"><img src="assets/img/widget/gal-1-2.jpg" alt="Gallery Image" class="w-100">
                </div>
                <div class="gallery-thumb"><img src="assets/img/widget/gal-1-3.jpg" alt="Gallery Image" class="w-100">
                </div>
                <div class="gallery-thumb"><img src="assets/img/widget/gal-1-4.jpg" alt="Gallery Image" class="w-100">
                </div>
                <div class="gallery-thumb"><img src="assets/img/widget/gal-1-5.jpg" alt="Gallery Image" class="w-100">
                </div>
                <div class="gallery-thumb"><img src="assets/img/widget/gal-1-6.jpg" alt="Gallery Image" class="w-100">
                </div>
            </div>
        </div>
        <div class="widget"><h3 class="widget_title">Office Maps</h3>
            <div class="footer-map">
                <iframe title="office location map"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15631.755657084703!2d27.4503946!3d-11.6277033!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19723b6f83d2499d%3A0xc87670e4a408d8b6!2sGroupe%20Manne%20Cach%C3%A9e%20SARL!5e0!3m2!1sfr!2scd!4v1682267327876!5m2!1sfr!2scd"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

<header class="vs-header header-layout2">
    <div class="header-shape"></div>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center justify-content-between text-center text-lg-start">
                <div class="col-md-auto text-center text-md-start">
                    <div class="header-links">
                        <ul>
                            <li><i class="far fa-phone-alt"></i>
                                <a href="tel:+243811497046">+243811497046</a> <br>
                                <i class="far fa-phone-alt"></i>
                                <a href="tel:+243972043209">+243972043209</a>
                            </li>
                            <li class="d-none d-xxl-inline-block"><i class="far fa-map-marker-alt"></i>
                                50, Avenue Manne Cachée, Golf TSHAMALALE, Lubumbashi
                            </li>
                            <li><i class="far fa-envelope"></i><a
                                    href="mailto:mannecachee2007@yahoo.fr">mannecachee2007@yahoo.fr</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="header-social"><span class="social-title">Suivez-nous sur : </span>
                        <a href="#"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a
                            href="https://www.instagram.com/lachairoi.gmc/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <div class="container">
                <div class="menu-area">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="logo-style1"><a href="{{route('home')}}"><img src="assets/img/logo-white.png"
                                                                                      alt="Manne Cachée"
                                                                                      class="logo"></a></div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu menu-style2 d-none d-lg-block">
                                <ul>
                                    <li><a href="{{route('home')}}">Accueil</a>
                                    </li>
                                    <li><a href="{{route('about')}}">A propos de nous</a></li>
                                    <li><a href="">Services</a></li>
                                    <li><a href="">Contactez-nous</a></li>
                                </ul>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-btns"><a href="#" class="vs-btn d-none d-xxl-inline-block">Commande<i
                                        class="far fa-arrow-right"></i></a>
                                <button class="icon-btn style3 sideMenuToggler"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
