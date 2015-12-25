@extends('templates.resume.layout')

@section('title')

    <title>Andrew Smith - Responsive Resume / Personal Portfolio Template</title>
@endsection

@section('css')

@endsection

@section('content')


    <div class="content-scroller">
    <div class="content-wrapper">

        <!-- Introduction -->
        <article class="content introduction noscroll" id="chapterintroduction">
            <div class="inner">
                <h2><span>HEllo, I'm</span><br>
                    Andrew Smith</h2>
                <span class="title">UX Designer / Frontend Developer</span> </div>
            <div id="owl-demo" class="owl-carousel">
                <div class="item"><img src="{{ asset('img/resume/profile.jpg') }}" alt="" /></div>
                <div class="item"><img src="{{ asset('img/resume/profile-01.jpg') }}" alt="" /></div>
                <div class="item"><img src="{{ asset('img/resume/profile-02.jpg') }}" alt="" /></div>
            </div>
        </article>

        <!-- About -->
        <article class="content about white-bg" id="chapterabout">
            <div class="inner">
                <h2>About</h2>
                <div class="title-divider"></div>
                <div class="about-con">
                    <ul>
                        <li>Name: Andrew Smith</li>
                        <li>Email: <a href="mailto:andrew@gmail.com">andrew@gmail.com</a></li>
                        <li>Phone: (123) - 456-7890</li>
                        <li>Date of birth: 23 February 1986</li>
                        <li>Address: PO Box 16122 Collins Street West, Victoria, USA.</li>
                        <li>Nationality: United States</li>
                    </ul>
                    <h3>Professional Profile</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit.<br>
                    </p>
                    <a href="#" class="button">Download resume as PDF format</a> <img src="{{ asset('img/resume/signature.png') }}" class="signature" alt=""/> </div>
            </div>
        </article>

        <!-- Skills -->
        <article class="content skills gray-bg" id="chapterskills">
            <div class="inner">
                <h2>Skills</h2>
                <div class="title-divider"></div>
                <h3>Just My Awesome Skills</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
                <div class="skills-con">
                    <div class="container-sub margin-top50">
                        <div class="row">
                            <div class="col-6 margin-bottom50">
                                <div class="col-6"><span class="chart" data-percent="75"><span class="percent"></span> </span></div>
                                <div class="col-6 chart-text">
                                    <h4>Film Editing</h4>
                                    <p>Expert, 4 years</p>
                                </div>
                            </div>
                            <div class="col-6 margin-bottom50">
                                <div class="col-6"><span class="chart" data-percent="88"><span class="percent"></span> </span></div>
                                <div class="col-6 chart-text">
                                    <h4>Art Direction</h4>
                                    <p>Advanced, 2 years</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-6"><span class="chart" data-percent="90"><span class="percent"></span> </span></div>
                                <div class="col-6 chart-text">
                                    <h4>Technical Expertise</h4>
                                    <p>Expert, 8 years</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-6"><span class="chart" data-percent="96"><span class="percent"></span> </span></div>
                                <div class="col-6 chart-text">
                                    <h4>HTML5 CSS3</h4>
                                    <p>Expert, 8 years</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="full-divider"></div>
                    <div class="container-sub skill-list">
                        <div class="row">
                            <h3>Knowledge</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
                            <div class="col-4 margin-top10">
                                <ul>
                                    <li>Google Analythics & SEO</li>
                                    <li>Instal and Configure</li>
                                    <li>E-commerce Platform</li>
                                    <li>Color theory knowledge</li>
                                </ul>
                            </div>
                            <div class="col-4 margin-top10">
                                <ul>
                                    <li>Photo manipulation skills</li>
                                    <li>Digital Painting</li>
                                    <li>Photo Composition</li>
                                    <li>Good sense of Tipography</li>
                                </ul>
                            </div>
                            <div class="col-4 margin-top10">
                                <ul>
                                    <li>Web Usability</li>
                                    <li>Grid & Layout</li>
                                    <li>Portrait Retouching</li>
                                    <li>Video Editing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="full-divider"></div>
                    <div class="container-sub">
                        <div class="row">
                            <h3>Language Skills</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
                            <div class="progressbar-main margin-top50">
                                <div class="progress-bar-description">English Experienced</div>
                                <div id="progressBar" class="progress">
                                    <div class="progress-value"></div>
                                </div>
                            </div>
                            <div class="progressbar-main margin-top40">
                                <div class="progress-bar-description">French Advanced</div>
                                <div id="progressBar2" class="progress">
                                    <div class="progress-value"></div>
                                </div>
                            </div>
                            <div class="progressbar-main margin-top40">
                                <div class="progress-bar-description">German Basic</div>
                                <div id="progressBar3" class="progress">
                                    <div class="progress-value"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Experience -->
        <article class="content experience white-bg" id="chapterexperience">
            <div class="inner">
                <h2>Experience</h2>
                <div class="title-divider"></div>
                <h3>14 Years Experience!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
                <div class="experience-con">
                    <div class="container-sub">
                        <div class="full-divider"></div>
                        <div class="row">
                            <div class="experience-details">
                                <div class="col-6 margin-bottom50 margin-top50">
                                    <div class="col-3 icon-block"><i class="fa fa-send-o"></i></div>
                                    <div class="flot-left">
                                        <h5>Panara Media</h5>
                                        <h4>Art Director</h4>
                                        <span>2014 - 2013</span> </div>
                                </div>
                                <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                            </div>
                            <div class="full-divider"></div>
                            <div class="experience-details">
                                <div class="col-6 margin-bottom50 margin-top50">
                                    <div class="col-3 icon-block"><i class="fa fa-briefcase"></i></div>
                                    <div class="flot-left">
                                        <h5>Ace Advertising</h5>
                                        <h4>Project Manager</h4>
                                        <span>2013 - 2011</span> </div>
                                </div>
                                <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                            </div>
                            <div class="full-divider"></div>
                            <div class="experience-details">
                                <div class="col-6 margin-bottom50 margin-top50">
                                    <div class="col-3 icon-block"><i class="fa fa-arrows-alt"></i></div>
                                    <div class="flot-left">
                                        <h5>Linksture Web</h5>
                                        <h4>Senior UX Designer</h4>
                                        <span>2011 - 2008</span> </div>
                                </div>
                                <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                            </div>
                            <div class="full-divider"></div>
                            <div class="experience-details">
                                <div class="col-6 margin-bottom50 margin-top50">
                                    <div class="col-3 icon-block"><i class="fa fa-quote-right"></i></div>
                                    <div class="flot-left">
                                        <h5>Matrix Media</h5>
                                        <h4>Visual / UI Designer</h4>
                                        <span>2008 - 2006</span> </div>
                                </div>
                                <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                            </div>
                            <div class="full-divider"></div>
                            <div class="experience-details">
                                <div class="col-6 margin-bottom50 margin-top50">
                                    <div class="col-3 icon-block"><i class="fa fa-bullhorn"></i></div>
                                    <div class="flot-left">
                                        <h5>Creatika Agency</h5>
                                        <h4>Graphic Designer</h4>
                                        <span>2006 - 2004</span> </div>
                                </div>
                                <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Education -->
        <article class="content education gray-bg" id="chaptereducation">
            <div class="inner">
                <h2>Education</h2>
                <div class="title-divider"></div>
                <h3>Just My Education</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
                <div class="education-con">
                    <div class="container-sub">
                        <div class="full-divider"></div>
                        <div class="row">
                            <div class="education-details">
                                <div class="col-6 margin-bottom50 margin-top50">
                                    <div class="col-3 icon-block"><i class="fa fa-photo"></i></div>
                                    <div class="flot-left">
                                        <h5>University of Design</h5>
                                        <h4>Bachelor of Arts</h4>
                                        <span>2009 - 2010</span> </div>
                                </div>
                                <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                            </div>
                            <div class="full-divider"></div>
                            <div class="education-details">
                                <div class="col-6 margin-bottom50 margin-top50">
                                    <div class="col-3 icon-block"><i class="fa fa-laptop"></i></div>
                                    <div class="flot-left">
                                        <h5>Boston State University</h5>
                                        <h4>Visual Art & Design</h4>
                                        <span>2006 - 2007</span> </div>
                                </div>
                                <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                            </div>
                            <div class="full-divider"></div>
                            <div class="education-details">
                                <div class="col-6 margin-bottom50 margin-top50">
                                    <div class="col-3 icon-block"><i class="fa fa-life-bouy"></i></div>
                                    <div class="flot-left">
                                        <h5>Boston State University</h5>
                                        <h4>Degree of Design</h4>
                                        <span>2004 - 2005</span> </div>
                                </div>
                                <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Pportfolio -->
        <article class="content portfolio white-bg" id="chapterportfolio">
            <div class="inner">
                <h2>Portfolio</h2>
                <div class="title-divider"></div>
                <h3>Our portfolio features a variety of projects and services</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
                <div class="portfolio-con">
                    <div class="container-sub margin-top50">
                        <div class="row">
                            <div id="grid-gallery" class="grid-gallery">
                                <section class="grid-wrap">
                                    <ul class="grid">
                                        <li>
                                            <figure> <img src="{{ asset('img/resume/work1.jpg') }}" alt=""/>
                                                <figcaption>
                                                    <div class="figcaption-details"> <img src="{{ asset('img/resume/icon-plus.png') }}" height="82" width="82" alt="" />
                                                        <h3>The Flavour Restaurant</h3>
                                                        <span>Website Design & Development</span> </div>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure> <img src="{{ asset('img/resume/work2.jpg') }}" alt="" />
                                                <figcaption>
                                                    <div class="figcaption-details"> <img src="{{ asset('img/resume/icon-plus.png') }}" height="82" width="82" alt="" />
                                                        <h3>Herbal Beauty Salon</h3>
                                                        <span>Photography</span> </div>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure> <img src="{{ asset('img/resume/work3.jpg') }}" alt="" />
                                                <figcaption>
                                                    <div class="figcaption-details"> <img src="{{ asset('img/resume/icon-plus.png') }}" height="82" width="82" alt="" />
                                                        <h3>Kayra Modelleri</h3>
                                                        <span>Branding and Identity</span> </div>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure> <img src="{{ asset('img/resume/work4.jpg') }}" alt="" />
                                                <figcaption>
                                                    <div class="figcaption-details"> <img src="{{ asset('img/resume/icon-plus.png') }}" height="82" width="82" alt="" />
                                                        <h3>Fashion and You</h3>
                                                        <span>APPS and Web Design</span> </div>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure> <img src="{{ asset('img/resume/work5.jpg') }}" alt="" />
                                                <figcaption>
                                                    <div class="figcaption-details"> <img src="{{ asset('img/resume/icon-plus.png') }}" height="82" width="82" alt="" />
                                                        <h3>Whole Food Flour</h3>
                                                        <span>Branding and Identity</span> </div>
                                                </figcaption>
                                            </figure>
                                        </li>
                                    </ul>
                                </section>

                                <!-- Lightbox Popup -->
                                <section class="slideshow">
                                    <ul>
                                        <li>
                                            <figure>
                                                <figcaption>
                                                    <h3>The Flavour Restaurant</h3>
                                                    <span>Website Design & Development</span>
                                                    <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, 						ullamco craft beer.</p>
                                                </figcaption>
                                                <div id="owl-demo1" class="owl-carousel">
                                                    <div class="item"><img src="{{ asset('img/resume/work-details1.jpg') }}" alt="" /></div>
                                                    <div class="item"><img src="{{ asset('img/resume/work-details2.jpg') }}" alt="" /></div>
                                                    <div class="item"><img src="{{ asset('img/resume/work-details3.jpg') }}" alt="" /></div>
                                                    <div class="item"><img src="{{ asset('img/resume/work-details4.jpg') }}" alt="" /></div>
                                                    <div class="item"><img src="{{ asset('img/resume/work-details5.jpg') }}" alt="" /></div>
                                                </div>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <figcaption>
                                                    <h3>Herbal Beauty Salon</h3>
                                                    <span>Photography</span>
                                                    <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                                                </figcaption>
                                                <img src="{{ asset('img/resume/work2.jpg') }}" alt="" /></figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <figcaption>
                                                    <h3>Kayra Modelleri</h3>
                                                    <span>Branding and Identity</span>
                                                    <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                                                </figcaption>
                                                <div id="owl-demo2" class="owl-carousel">
                                                    <div class="item"><img src="{{ asset('img/resume/work3.jpg') }}" alt="" /></div>
                                                    <div class="item"><img src="{{ asset('img/resume/work1.jpg') }}" alt="" /></div>
                                                    <div class="item"><img src="{{ asset('img/resume/work2.jpg') }}" alt="" /></div>
                                                    <div class="item"><img src="{{ asset('img/resume/work4.jpg') }}" alt="" /></div>
                                                    <div class="item"><img src="{{ asset('img/resume/work5.jpg') }}" alt="" /></div>
                                                </div>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <figcaption>
                                                    <h3>Fashion and You</h3>
                                                    <span>APPS and Web Design</span>
                                                    <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                                                </figcaption>
                                                <iframe width="854" height="480" src="//www.youtube.com/embed/ZwzY1o_hB5Y" frameborder="0" allowfullscreen></iframe> </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <figcaption>
                                                    <h3>Whole Food Flour</h3>
                                                    <span>Branding and Identity</span>
                                                    <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                                                </figcaption>
                                                <img src="{{ asset('img/resume/work5.jpg') }}" alt="" /> </figure>
                                        </li>
                                    </ul>
                                    <nav> <span class="fa nav-prev"></span> <span class="fa nav-next"></span> <span class="fa nav-close"></span> </nav>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Contact -->
        <article class="content contact gray-bg" id="chaptercontact">
            <div class="inner">
                <h2>Contact</h2>
                <div class="title-divider"></div>
                <h3>Let's Keep In Touch</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
                <div class="full-divider"></div>
                <div class="contact-con margin-top50">
                    <div class="container-sub">
                        <div class="row">
                            <div class="contact-details">
                                <div class="col-6">
                                    <div class="contact-text">
                                        <div class="col-2 icon-block address"><i class="fa fa-map-marker"></i></div>
                                        <div class="flot-left"> <strong>Andrew Smith</strong><br>
                                            PO Box 16122 Collins Street West,<br>
                                            Victoria 8007, United States. </div>
                                    </div>
                                    <div class="contact-text">
                                        <div class="col-2 icon-block phone"><i class="fa fa-phone"></i></div>
                                        <div class="flot-left"> <strong>Phone</strong><br>
                                            +123-456-7890 </div>
                                    </div>
                                    <div class="contact-text">
                                        <div class="col-2 icon-block email"><i class="fa fa-envelope"></i></div>
                                        <div class="flot-left"> <strong>Email</strong><br>
                                            <a href="mailto:no-reply@domain.com">no-reply@domain.com</a> </div>
                                    </div>
                                </div>
                                <div class="col-6 m-margin-top30">
                                    <h3>I'm also on Social Networks</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor.
                                    <div class="contact-social margin-top30"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="full-divider"></div>
                    <div class="container-sub">
                        <div class="row">
                            <div class="contact-form">
                                <h3>Drop Me a Line</h3>
                                <form id="form1" name="form1" method="post" >
                                    <input name="name" type="text" id="name" placeholder="Your Name..." />
                                    <input name="email" type="text" id="email" placeholder="Your Email..." />
                                    <textarea name="message" id="message" cols="45" rows="5" placeholder="Your Message..."></textarea>
                                    <input type="submit" name="button" id="button" value="say hello!" >
                                    <div id="successmsg" ></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Introduction -->
        <article class="content introduction-end" id="chapterthankyou">
            <div class="inner">
                <div class="introduction-end-con margin-top50">
                    <h3><strong>Andrew Smith</strong></h3>
                    <div id="rotate" class="rotate">
                        <div><span>awesome.</span></div>
                        <div><span>invincible.</span></div>
                        <div><span>unbeatable.</span></div>
                        <div><span>indestructible.</span></div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
@endsection

@section('js')

<script>
    new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>
<script type="text/javascript" src="{{ asset('js/resume/resume-mousewheel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/resume/resume-wheelintent.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/resume/resume-scrollpane.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/resume/resume-history.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/resume/resume-corestring.js') }}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.easing/1.3/jquery.easing.1.3.min.js"></script>
<script type="text/javascript" src="{{ asset('js/resume/resume-smartresize.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/resume/resume-page.js') }}"></script>


@endsection
