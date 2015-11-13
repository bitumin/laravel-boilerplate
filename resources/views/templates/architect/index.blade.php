@extends('templates.architect.layout')

@section('title')
    <title>BeraNia Office</title>
@endsection

@section('css')

@endsection

@section('content')
<div id="content-padding-off">

    <div class="sequence-parallax">

        <div id="sequence">

            <span class="sequence-prev">Prev</span>
            <span class="sequence-next">Next</span>

            <ul class="sequence-canvas">

                <li class="slide-1 bg-animation">
                    <div class="slide-bg content-animation" style="background-image: url(/img/architect/slide-1.jpg);"></div>
                    <div class="overlay-paralax content-animation"></div>

                    <div class="sequence-container content-animation">

                        <div class="sequence-entry">
                            <div class="slide-title">
                                <p>BeraNia <span>Office</span></p>
                            </div>

                            <div class="slide-text">
                                <p>The best solution for your architectural Design & Constrution Projects</p>
                            </div>

                            <div class="slide-button">
                                <a href="{{ route('template.architect.about') }}" class="btn-cta">About Us</a>
                            </div>
                        </div><!--/ .sequence-entry-->

                    </div><!--/ .sequence-container-->

                </li><!--/ .slide-1-->

                <li class="slide-2 bg-animation">
                    <div class="slide-bg content-animation" style="background-image: url(/img/architect/slide-2.jpg);"></div>
                    <div class="overlay-paralax content-animation"></div>

                    <div class="sequence-container content-animation">

                        <div class="sequence-entry">

                            <div class="slide-title">
                                <p>WE ALWAYS KEEP UP<span> WITH THE TIMES</span></p>
                            </div>

                            <div class="slide-button">
                                <a href="{{ route('template.architect.projects') }}" class="btn-cta">Projects</a>
                            </div>
                        </div><!--/ .sequence-entry-->

                    </div><!--/ .sequence-container-->

                </li><!--/ .slide-2-->

                <li class="slide-3 bg-animation">
                    <div class="slide-bg content-animation" style="background-image: url(/img/architect/slide-3.jpg);"></div>
                    <div class="overlay-paralax content-animation"></div>

                    <div class="sequence-container content-animation">

                        <div class="sequence-entry">

                            <div class="slide-title">
                                <p>Get in touch with us and</p> <span>meet your dreams</span>
                            </div>

                            <div class="slide-button">
                                <a href="{{ route('template.architect.contact') }}" class="btn-cta">Contact US</a>
                            </div>
                        </div><!--/ .sequence-entry-->

                    </div><!--/ .sequence-container-->

                </li><!--/ .slide-3-->

            </ul><!--/ .sequence-canvas-->

        </div><!--/ #sequence-->

    </div><!--/ .sequence-parallax-->

</div><!--/ #content-->

@endsection

