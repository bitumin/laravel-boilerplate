@extends('templates.architect.layout')

@section('title')
    <title>BeraNia Office</title>
@endsection

@section('css')

@endsection

@section('content')
    <div class="overlay-paralax content-animation"></div>

<div id="content">

    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <aside class="side-gallery-panel opacity">
                    <h2 class="row-title">The Sagrada Familia</h2><h5>Reintegrating & Landscape Design</h5>
                    <p>

                    </p>

                    <ul class="side-meta">
                        <img src="{{ asset('img/architect/logo.png') }}" alt="">

                        <li>
                            <b class="side-meta-title">Type :</b>
                            <b class="side-text">Cultural / Landscape</b>
                        </li>
                        <li>
                            <b class="side-meta-title">Location :</b>
                            <b class="side-text">Barcelona, Spain</b>
                        </li>
                        <li>
                            <b class="side-meta-title">Size :</b>
                            <h style="font-family:'roboto'"><b class="side-text">40000m2</b></h>
                        </li>
                        <li>
                            <b class="side-meta-title">Status :</b>
                            <b class="side-text">Proposal</b>
                        </li>
                        <li>
                            <b class="side-meta-title">Date :</b>
                            <h style="font-family:'roboto'"><b class="side-text">Feb 2015</b></h>
                        </li>

                    </ul><!--/ .side-meta-->

                    <div class="side-share">

                        <a class="side-like" href="#">
                            <i class="icon-share"></i>
                            <span>share</span>
                        </a>

                        <div class="social-icons circle-icons">
                            <ul>
                                <li class="facebook"><a href="https://facebook.com" target="_blank"><i class="icon-facebook"></i>Facebook</a></li>
                                <li class="Instagram"><a href="http://instagram.com" target="_blank"><i class="icon-instagram"></i>Instagram</a></li>
                                <li class="youtube"><a href="https://www.youtube.com" target="_blank"><i class="icon-youtube"></i>Youtube</a></li>
                            </ul><!--/ .social-icons-->
                        </div>

                    </div><!--/ .side-share-->


                    <div class="side-nav">
                        <a class="prev" href="{{ route('template.architect.detail') }}"></a>
                        <a class="central" href="{{ route('template.architect.projects') }}"></a>
                        <a class="next" href="{{ route('template.architect.detail') }}"></a>
                    </div>


                    <div class="widget widget_popular_posts">

                        <h2 class="row-title">Related Works</h2>

                        <ul class="popular_posts">

                            <li>
                                <div class="entry-image">
                                    <a class="single-image" href="{{ route('template.architect.detail') }}">
                                        <img src="{{ asset('img/architect/90.jpg') }}" width="140" alt="" />
                                        <span class="curtain"></span>
                                    </a>
                                </div>

                                <div class="post-holder">
                                    <h6 align="right" style="font-family:'roboto'" class="entry-title"><a href="{{ route('template.architect.project-detail') }}">Qebleh Square Landscape Design</a></h6>
                                    <span align="right" class="entry-date">Mashhad, Khorasan Razavi</span>
                                </div>
                            </li>

                        </ul><!--/ .popular_posts-->

                    </div>


                </aside><!--/ .side-gallery-panel-->

            </div><!--/ .col-md-4-->
            <div class="col-md-8">

                <div class="image-slider">

                    <ul id="image-slider" class="popup-gallery">
                        <li class="item">
                            <div class="image-entry">
                                <a href="{{ asset('img/architect/C-02-01.jpg') }}" class="single-image popup-link lazy-image img">
                                    <div class="lazy">
                                        <i  class="G G_1"></i>
                                        <i  class="G G_2"></i>
                                        <i  class="G G_3"></i>
                                        <i  class="G G_4"></i>
                                        <i  class="G G_5"></i>
                                        <i  class="G G_6"></i>
                                        <i  class="G G_7"></i>
                                        <i  class="G G_8"></i>
                                    </div>
                                    <img src="{{ asset('img/architect/C-02-01.jpg') }}" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="item">
                            <div class="image-entry">
                                <a href="{{ asset('img/architect/C-02-00.jpg') }}" class="single-image popup-link">
                                    <img src="{{ asset('img/architect/C-02-01.jpg') }}" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="item">
                            <div class="image-entry">
                                <a href="{{ asset('img/architect/C-02-02.jpg') }}" class="single-image popup-link">
                                    <img src="{{ asset('img/architect/C-02-02.jpg') }}" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="item">
                            <div class="image-entry">
                                <a href="{{ asset('img/architect/C-02-03.jpg') }}" class="single-image popup-link">
                                    <img src="{{ asset('img/architect/C-02-03.jpg') }}" alt="">
                                </a>
                            </div>
                        </li>
                    </ul><!--/ #image-slider-->
                    <div class='owl-counter'>
                        <span class='currentPosition'></span>
                        <span class="allItems"></span>
                    </div>

                </div><!--/ .image-slider-->

            </div><!--/ .classic-image-slider-->



            <section class="section">

                <div class="col-md-8">

                    <div class="row">
                        <p></p>
                        <h2 class="title"  align="center">ساماندهی و طراحی منظر مجموعه فرهنگی کلیسای ساگرادا فامیلیا</h2>

                        <div class="col-md-6 opacity">

                            <p class="jf">
                                در طراحی مجموعه سعی کردیم سناریوی عملکردی لندسکیپ در جهت تقویت عملکرد و سناریو ورود و خروج کلیسا و همچنین تقویت مفاهیم موجود در زمینه تاریخی مجموعه باشد اما در فرم نسبت به بنای تاریخی ساگرادا فامیلیا یک تضاد و دوگانگی چشمگیر داشته باشیم به نحوی که این تضاد باعث تاکید بیشتر به بنای کلیسا باشد.							</p>


                        </div>

                        <div class="col-md-6 opacity">
                            <p class="jf">
                                در ابتدا دو بلوک سبز در دو سمت شرقی و غربی ساگرادا داشتیم که قرار بود لندسکیپ مجموعه به نحوی طراحی شود که میان این دو بلوک سبز ارتباط و دسترسی وجود داشته باشد.							</p>
                            <p class="jf">
                                تصمیم گرفتیم بلوک جنوبی ساگرادا را نیز به این مجموع اضافه کنیم تا علاوه بر تاکید و تقویت محور اصلی ورودی کلیسا به یک سه گانه (Trilogy) برسیم که   از نظر  حکمی به اعتقاد مسحیت به سپر ایمان و تثلیث  اشاره دارد.							</p>

                        </div>

                    </div>

                    <div class="youtubes">
                        <h2 class="row-title" style="font-family:'roboto'">3D Presentation</h2>
                        <iframe width="547" height="380" src="https://www.youtube.com/embed/uGuSQX0uohE"  frameborder="0" allowfullscreen></iframe>
                    </div>

                </div>


            </section>





        </div>

    </div><!--/ .container-->

</div><!--/ #content-->


@endsection