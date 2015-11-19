@extends('templates.architect.layout')

@section('title')
    <title>BeraNia Office</title>
@endsection

@section('css')

@endsection

@section('content')
    <body class="animated">
    <header id="header">
        <div class="top-header-line">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12">
                        <div class="contact-icons clearfix">
                            <ul class="contact-details">
                                <li style="font-family:'roboto'"><i class="icon-location-2"></i><a href="https://www.google.com" target="_blank">No.3, 3rdFloor, Elahieh Building, 12th Ave, Fatemi St, Qom, Iran</a></li>
                                <li><i class=" icon-mail-5"></i>E-mail: <a href="mailto:info@beraniaoffice.com">info@architect.com</a></li>
                                <li style="font-family:'roboto'"><i class="icon-phone-2"></i>+98-25-37840592</li>
                            </ul>
                        </div>

                    </div>

                </div><!--/ .row-->

            </div><!--/ .container-->

        </div><!--/ .top-header-line-->


        <div class="middle-header-line">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-10">

                        <div class="header-in">

                            <h1 id="logo">
                                <a href="{{ route('template.architect.index') }}"><img src="{{ asset('img/architect/logo-trs.png') }}" width="256" height="80" alt="logo"></a>
                            </h1>

                            <a id="responsive-nav-button" class="responsive-nav-button" href="#"></a>

                            <div class="nav-wrapper">
                                <nav id="navigation" class="navigation">
                                    <ul>
                                        <li><a href="{{ route('template.architect.index') }}">HOME</a></li>
                                        <li class="current-menu-item">
                                            <a href="{{ route('template.architect.projects') }}">Projects</a></li>
                                        <li><a>RESEARCH</a></li>
                                        <li><a href="{{ route('template.architect.media') }}">Media</a></li>
                                        <li><a href="{{ route('template.architect.about') }}">about us</a>
                                            <ul>
                                                <li><a href="http://beraniaoffice.com/download/BeraNiaOffice.pdf" target="_blank">Download Resume</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('template.architect.contact') }}">contact</a></li>
                                    </ul>

                                </nav><!--/ .navigation-->

                            </div><!--/ .nav-wrapper-->

                        </div><!--/ .header-in-->

                    </div>

                </div><!--/ .row-->

            </div><!--/ .container-->

        </div><!--/ .middle-header-line-->

    </header><!--/ #header-->




    <div class="overlay-paralax content-animation"></div>


<div id="content-bottom-off">

    <section id="folio" class="page">

        <section class="section padding-off">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12">
                        <ul id="portfolio-filter" class="portfolio-filter">
                            <li class="filter active" data-filter="all">All</li>
                            <li class="filter" data-filter="Apartment">Apartment</li>
                            <li class="filter" data-filter="House">House</li>
                            <li class="filter" data-filter="Villa">Villa</li>
                            <li class="filter" data-filter="Residential">Residential</li>
                            <li class="filter" data-filter="Monument">Monument</li>
                            <li class="filter" data-filter="Cultural">Cultural</li>
                            <li class="filter" data-filter="Landscape">Landscape</li>
                        </ul><!--/ #portfolio-filter -->
                    </div>

                </div><!--/ .row-->

            </div><!--/ .container-->

            <section id="portfolio-items" class="portfolio-items col-6">
                <article class="mix mix_all">
                    <div class="work-item lazy-image img">
                        <div class="lazy">
                            <i class="G G_1"></i>
                            <i class="G G_2"></i>
                            <i class="G G_3"></i>
                            <i class="G G_4"></i>
                            <i class="G G_5"></i>
                            <i class="G G_6"></i>
                            <i class="G G_7"></i>
                            <i class="G G_8"></i>
                        </div>
                        <img src="{{ asset('img/architect/2015.png') }}" alt="" />
                    </div><!--/ .work-item-->
                </article>

                <article class="Residential mix Apartment mix mix_all">

                    <div class="work-item lazy-image img">
                        <div class="lazy">
                            <i class="G G_1"></i>
                            <i class="G G_2"></i>
                            <i class="G G_3"></i>
                            <i class="G G_4"></i>
                            <i class="G G_5"></i>
                            <i class="G G_6"></i>
                            <i class="G G_7"></i>
                            <i class="G G_8"></i>
                        </div>
                        <img src="{{ asset('img/architect/89.jpg') }}" alt="" />
                        <a href="{{ route('template.architect.detail') }}">
                            <div class="image-extra">
                                <div class="extra-content">
                                    <h2 style="font-family:'roboto'" class="extra-title">14Masoum Residential & Religious Complex</h2>
                                    <h6 class="extra-descript">Mashhad, Khorasan Razavi</h6>
                                </div><!--/ .extra-content-->
                            </div><!--/ .image-extra-->
                        </a>
                    </div><!--/ .work-item-->

                </article>
                <article class="Landscape mix Cultural mix_all">

                    <div class="work-item lazy-image img">
                        <div class="lazy">
                            <i class="G G_1"></i>
                            <i class="G G_2"></i>
                            <i class="G G_3"></i>
                            <i class="G G_4"></i>
                            <i class="G G_5"></i>
                            <i class="G G_6"></i>
                            <i class="G G_7"></i>
                            <i class="G G_8"></i>
                        </div>
                        <img src="{{ asset('img/architect/91.jpg') }}" alt="" />
                        <a href="{{ route('template.architect.detail') }}">
                            <div class="image-extra">
                                <div class="extra-content">
                                    <h2 class="extra-title">The Sagrada Familia Reintegrating & Landscape Design</h2>
                                    <h6 class="extra-descript">Barcelona, Spain</h6>
                                </div><!--/ .extra-content-->
                            </div><!--/ .image-extra-->
                        </a>
                    </div><!--/ .work-item-->

                </article>
                <article class="Monument mix mix_all">

                    <div class="work-item lazy-image img">
                        <div class="lazy">
                            <i class="G G_1"></i>
                            <i class="G G_2"></i>
                            <i class="G G_3"></i>
                            <i class="G G_4"></i>
                            <i class="G G_5"></i>
                            <i class="G G_6"></i>
                            <i class="G G_7"></i>
                            <i class="G G_8"></i>
                        </div>
                        <img src="{{ asset('img/architect/93.jpg') }}" alt="" />
                        <a href="{{ route('template.architect.detail') }}">
                            <div class="image-extra">
                                <div class="extra-content">
                                    <h2 class="extra-title">Salam Square</h2>
                                    <h6 class="extra-descript">Jamkaran, Qom</h6>
                                </div><!--/ .extra-content-->
                            </div><!--/ .image-extra-->
                        </a>
                    </div><!--/ .work-item-->

                </article>

                <article class="mix mix_all">
                    <div class="work-item lazy-image img">
                        <div class="lazy">
                            <i class="G G_1"></i>
                            <i class="G G_2"></i>
                            <i class="G G_3"></i>
                            <i class="G G_4"></i>
                            <i class="G G_5"></i>
                            <i class="G G_6"></i>
                            <i class="G G_7"></i>
                            <i class="G G_8"></i>
                        </div>
                        <img src="{{ asset('img/architect/2014.png') }}" alt="" />
                    </div><!--/ .work-item-->
                </article>
                <article class="Landscape mix mix_all">

                    <div class="work-item lazy-image img">
                        <div class="lazy">
                            <i class="G G_1"></i>
                            <i class="G G_2"></i>
                            <i class="G G_3"></i>
                            <i class="G G_4"></i>
                            <i class="G G_5"></i>
                            <i class="G G_6"></i>
                            <i class="G G_7"></i>
                            <i class="G G_8"></i>
                        </div>
                        <img src="{{ asset('img/architect/90.jpg') }}" alt="" />
                        <a href="{{ route('template.architect.detail') }}">
                            <div class="image-extra">
                                <div class="extra-content">
                                    <h2 class="extra-title">The Qebleh Square - Landscape & Urban Design</h2>
                                    <h6 class="extra-descript">Mashhad, Khorasan Razavi</h6>
                                </div><!--/ .extra-content-->
                            </div><!--/ .image-extra-->
                        </a>
                    </div><!--/ .work-item-->

                </article>

                <article class="Residential mix mix_all">

                    <div class="work-item lazy-image img">
                        <div class="lazy">
                            <i class="G G_1"></i>
                            <i class="G G_2"></i>
                            <i class="G G_3"></i>
                            <i class="G G_4"></i>
                            <i class="G G_5"></i>
                            <i class="G G_6"></i>
                            <i class="G G_7"></i>
                            <i class="G G_8"></i>
                        </div>
                        <img src="{{ asset('img/architect/92.jpg') }}" alt="" />
                        <a href="{{ route('template.architect.detail') }}">
                            <div class="image-extra">
                                <div class="extra-content">
                                    <h2 class="extra-title">Alghadir II Residential Complex</h2>
                                    <h6 class="extra-descript">Safashahr, Qom</h6>
                                </div><!--/ .extra-content-->
                            </div><!--/ .image-extra-->
                        </a>
                    </div><!--/ .work-item-->

                </article>



                <article class="Apartment mix mix_all">

                    <div class="work-item lazy-image img">
                        <div class="lazy">
                            <i class="G G_1"></i>
                            <i class="G G_2"></i>
                            <i class="G G_3"></i>
                            <i class="G G_4"></i>
                            <i class="G G_5"></i>
                            <i class="G G_6"></i>
                            <i class="G G_7"></i>
                            <i class="G G_8"></i>
                        </div>
                        <img src="{{ asset('img/architect/94.jpg') }}" alt="" />
                        <a href="{{ route('template.architect.detail') }}">
                            <div class="image-extra">
                                <div class="extra-content">
                                    <h2 class="extra-title">Apartment of Mr.Rezayati</h2>
                                    <h6 class="extra-descript">Narmak, Tehran</h6>
                                </div><!--/ .extra-content-->
                            </div><!--/ .image-extra-->
                        </a>
                    </div><!--/ .work-item-->

                </article>

                <article class="Monument mix mix_all">

                    <div class="work-item lazy-image img">
                        <div class="lazy">
                            <i class="G G_1"></i>
                            <i class="G G_2"></i>
                            <i class="G G_3"></i>
                            <i class="G G_4"></i>
                            <i class="G G_5"></i>
                            <i class="G G_6"></i>
                            <i class="G G_7"></i>
                            <i class="G G_8"></i>
                        </div>
                        <img src="{{ asset('img/architect/95.jpg') }}" alt="" />
                        <a href="{{ route('template.architect.detail') }}">
                            <div class="image-extra">
                                <div class="extra-content">
                                    <h2 class="extra-title">Main Entrance of Meybod University</h2>
                                    <h6 class="extra-descript">Meybod, Yazd</h6>
                                </div><!--/ .extra-content-->
                            </div><!--/ .image-extra-->
                        </a>
                    </div><!--/ .work-item-->

                </article>

                <article class="mix mix_all">
                    <div class="work-item lazy-image img">
                        <div class="lazy">
                            <i class="G G_1"></i>
                            <i class="G G_2"></i>
                            <i class="G G_3"></i>
                            <i class="G G_4"></i>
                            <i class="G G_5"></i>
                            <i class="G G_6"></i>
                            <i class="G G_7"></i>
                            <i class="G G_8"></i>
                        </div>
                        <img src="{{ asset('img/architect/2013.png') }}" alt="" />
                    </div><!--/ .work-item-->
                </article>

                <article class="Cultural mix mix_all">

                    <div class="work-item lazy-image img">
                        <div class="lazy">
                            <i class="G G_1"></i>
                            <i class="G G_2"></i>
                            <i class="G G_3"></i>
                            <i class="G G_4"></i>
                            <i class="G G_5"></i>
                            <i class="G G_6"></i>
                            <i class="G G_7"></i>
                            <i class="G G_8"></i>
                        </div>
                        <img src="{{ asset('img/architect/96.jpg') }}" alt="" />
                        <a href="{{ route('template.architect.detail') }}">
                            <div class="image-extra">
                                <div class="extra-content">
                                    <h2 class="extra-title">Bonyad-e Aseman Cultural Center</h2>
                                    <h6 class="extra-descript">Pardisan, Qom</h6>
                                </div><!--/ .extra-content-->
                            </div><!--/ .image-extra-->
                        </a>
                    </div><!--/ .work-item-->

                </article>

                <article class="House mix mix_all">

                    <div class="work-item lazy-image img">
                        <div class="lazy">
                            <i class="G G_1"></i>
                            <i class="G G_2"></i>
                            <i class="G G_3"></i>
                            <i class="G G_4"></i>
                            <i class="G G_5"></i>
                            <i class="G G_6"></i>
                            <i class="G G_7"></i>
                            <i class="G G_8"></i>
                        </div>
                        <img src="{{ asset('img/architect/97.jpg') }}" alt="" />
                        <a href="{{ route('template.architect.detail') }}">
                            <div class="image-extra">
                                <div class="extra-content">
                                    <h2 class="extra-title">House of Mr.Mohseni</h2>
                                    <h6 class="extra-descript">Safashahr, Qom</h6>
                                </div><!--/ .extra-content-->
                            </div><!--/ .image-extra-->
                        </a>
                    </div><!--/ .work-item-->

                </article>

                <article class="Villa mix mix_all">

                    <div class="work-item lazy-image img">
                        <div class="lazy">
                            <i class="G G_1"></i>
                            <i class="G G_2"></i>
                            <i class="G G_3"></i>
                            <i class="G G_4"></i>
                            <i class="G G_5"></i>
                            <i class="G G_6"></i>
                            <i class="G G_7"></i>
                            <i class="G G_8"></i>
                        </div>
                        <img src="{{ asset('img/architect/98.jpg') }}" alt="" />
                        <a href="{{ route('template.architect.detail') }}">
                            <div class="image-extra">
                                <div class="extra-content">
                                    <h2 class="extra-title">Turned View Villa</h2>
                                    <h6 class="extra-descript">Lavasan, Tehran</h6>
                                </div><!--/ .extra-content-->
                            </div><!--/ .image-extra-->
                        </a>
                    </div><!--/ .work-item-->

                </article>

                <article class="House mix mix_all">

                    <div class="work-item lazy-image img">
                        <div class="lazy">
                            <i class="G G_1"></i>
                            <i class="G G_2"></i>
                            <i class="G G_3"></i>
                            <i class="G G_4"></i>
                            <i class="G G_5"></i>
                            <i class="G G_6"></i>
                            <i class="G G_7"></i>
                            <i class="G G_8"></i>
                        </div>
                        <img src="{{ asset('img/architect/99.jpg') }}" alt="" />
                        <a href="{{ route('template.architect.detail') }}">
                            <div class="image-extra">
                                <div class="extra-content">
                                    <h2 class="extra-title">House of Mr.Ayatollahi</h2>
                                    <h6 class="extra-descript">Danial, Qom</h6>
                                </div><!--/ .extra-content-->
                            </div><!--/ .image-extra-->
                        </a>
                    </div><!--/ .work-item-->

                </article>

            </section><!--/ .portfolio-items-->

        </section><!--/ .section-->

    </section>
    <!--/ .page-->


</div><!--/ #content-->


@endsection
