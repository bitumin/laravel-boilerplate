@extends('templates.architect.layout')

@section('title')
    <title>BeraNia Office</title>
@endsection

@section('css')

@endsection

@section('content')
<div class="overlay-paralax content-animation"></div>


<div id="content-padding-off">

    <section class="section">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <iframe src="https://www.google.com/maps/d/embed?mid=zFL9FcGfmlec.kIa6o4ATMksw" width="540" height="380"></iframe>

                    <div class="contact-widget opacity">
                        <p class="rt">
                        <h4>
                            راه‌های ارتباطی
                        </h4>
                        </p>
                        <div class="textwidget contact-info">
                            <p><i class="icon-phone-2"></i>Call : 25-37840592</p>
                            <p><i class=" icon-mail-5"></i>E-mail : <a href="mailto:info@architect.com">info@architect.com</a></p>
                            <p><i class=" icon-facebook-1"></i>Facebook : <a href="https://www.facebook.com">facebook.com/BeraNiaOffice</a></p>
                            <p><i class=" icon-instagram-1"></i>Instagram : <a href="https://www.instagram.com">instagram.com/BeraNiaOffice</a></p>
                            <p><i class=" icon-youtube-1"></i>Youtube : <a href="https://www.youtube.com">youtube.com/BeraNiaOffice</a></p>
                            <p><i class="icon-location-2"></i>قم - خیابان شهید فاطمی - نبش کوچه 12 - ساختمان الهیه - طبقه سوم - واحد۳</p>
                        </div>

                    </div><!--/ .contact-widget-->

                </div><!--/ .col-md-6-->

                <div class="col-md-6">

                    <div class="contact-respond opacity">

                        <div id="respond">

                            <form action="http://html.webtemplatemasters.com/" class="contact-form" method="post">

                                <p class="input-block">
                                    <input type="text" id="name" placeholder="Name *" name="name" required="" />
                                </p>
                                <p class="input-block">
                                    <input type="email" id="email" placeholder="Email *" name="email" required="" />
                                </p>
                                <p class="input-block">
                                    <input type="url" id="url" placeholder="Website" name="website" />
                                </p>
                                <p class="input-block">
                                    <textarea id="comment" placeholder="Your message " name="message" required=""></textarea>
                                </p>
                                <p class="input-block">
										<span id="captcha">
											<iframe src="php/capcha_page.html" name="capcha_image_frame"></iframe>
											<input class="verify" type="text" id="verify" name="verify" />
										</span>
                                    <button id="submit" class="button default input-block-last" type="submit">Submit</button>
                                </p>
                            </form><!--/ .comments-form-->

                        </div><!--/ .respond-->

                    </div><!--/ .contact-respond-->

                </div><!--/ .col-md-6-->

            </div><!--/ .row-->

        </div><!--/ .container-->

    </section><!--/ .section-->

</div><!--/ .content-->


@endsection
